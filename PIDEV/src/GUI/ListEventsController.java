/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Services.EventtypeCRUD;
import entities.eventtype;
import java.io.IOException;
import java.util.List;
import java.util.Optional;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;

/**
 * FXML Controller class
 *
 * @author zaxs
 */
public class ListEventsController {

    private int doing = -1;
    private int SelectedId = -1;
    private eventtype sett;
    @FXML
    private Label EventDescription;
    @FXML
    private TableView<eventtype> EventNameTable;
    @FXML
    private TableColumn<eventtype, String> EventNameTableColomn;

    public ObservableList<eventtype> dataE = FXCollections.observableArrayList();
    @FXML
    private Button DeleteBtn;
    @FXML
    private Button EditBtn;
    @FXML
    private Button AddBtn;
    @FXML
    private TextArea DescriptionInput;
    @FXML
    private TextField NomInput;
    @FXML
    private Label NomLabel;
    @FXML
    private Label DescriptionLabel;
    @FXML
    private Button resetBtn;
    @FXML
    private Button cancelBtn;
    @FXML
    private Button confirmBtn;
    @FXML
    private Label DetLabel;
    @FXML
    private Label descShowLabel;
    @FXML
    private ImageView backImageV;
    @FXML
    private Button afficherEventtype;

    /**
     * Initializes the controller class.
     */
    public void initialize() {
        System.out.println("evttlist begin init");
        populateEventTable();
        showEventDetails(null);
        EventNameTable.getSelectionModel().selectedItemProperty().addListener((observable, oldValue, newValue) -> {
            sett = newValue;
            showEventDetails(newValue);
        });
        HideBtnBar();
        hideInputs();
        // TODO 
        //   System.out.println("testting");

    }

    private void showEventDetails(eventtype e) {
        if (e != null) {
            EventDescription.setText(e.getDescription());
            SelectedId = e.getId();
        } else {
            // Person is null, remove all the text.
            EventDescription.setText("");
            SelectedId = -1;
        }
    }

    private void populateEventTable() {
        List<eventtype> myList = EventtypeCRUD.getListEventtype();

        for (eventtype e : myList) {
            dataE.add(e);
        }
        EventNameTable.getItems().clear();
        EventNameTableColomn.setCellValueFactory(new PropertyValueFactory<>("name"));
        EventNameTable.setItems(dataE);
    }

    private void HideBtnBar() {
        confirmBtn.setVisible(false);
        resetBtn.setVisible(false);
        cancelBtn.setVisible(false);
    }

    private void showBtnBar() {
        confirmBtn.setVisible(true);
        resetBtn.setVisible(true);
        cancelBtn.setVisible(true);
    }

    private void HideCmdBtnBar() {
        AddBtn.setVisible(false);
        DeleteBtn.setVisible(false);
        EditBtn.setVisible(false);
    }

    private void showCmdBtnBar() {
        AddBtn.setVisible(true);
        DeleteBtn.setVisible(true);
        EditBtn.setVisible(true);
    }

    private void hideInputs() {
        NomInput.setVisible(false);
        NomLabel.setVisible(false);
        DescriptionInput.setVisible(false);
        DescriptionLabel.setVisible(false);
        descShowLabel.setVisible(true);
        EventDescription.setVisible(true);

    }

    private void showInputs() {
        NomInput.setVisible(true);
        NomLabel.setVisible(true);
        DescriptionInput.setVisible(true);
        DescriptionLabel.setVisible(true);
        descShowLabel.setVisible(false);
        EventDescription.setVisible(false);
    }

    @FXML
    private void addEvent(ActionEvent event) {
       
            doing = 1;
            showBtnBar();
            HideCmdBtnBar();
            showInputs();
            NomInput.setText("");
            DescriptionInput.setText("");
       

    }

    @FXML
    private void editEvent(ActionEvent event) {
        if (SelectedId != -1) {
            doing = 2;
            showBtnBar();
            HideCmdBtnBar();
            showInputs();
            NomInput.setText(sett.getName());
            DescriptionInput.setText(sett.getDescription());
        } else {
            warning("Veuillez selectionner un type!");
        }

    }
    
    

    @FXML
    private void deleteEvent(ActionEvent event) {
        if (SelectedId != -1) {
            Alert alert = new Alert(AlertType.CONFIRMATION);
            alert.setTitle("Confirmation Dialog");
            alert.setHeaderText(null);
            alert.setContentText("Êtes-vous sûr(e) de vouloir supprimer cet event?");
            Optional<ButtonType> action = alert.showAndWait();
            if (action.get() == ButtonType.OK) {
                EventtypeCRUD.supprimerEventtype(Integer.valueOf(SelectedId));
                try {
                    FXMLLoader loader = new FXMLLoader(getClass().getResource("listEvents.fxml"));
                    Parent root;
                    root = loader.load();
                    DetLabel.getScene().setRoot(root);
                } catch (IOException ex) {
                    Logger.getLogger(ListEvents2Controller.class.getName()).log(Level.SEVERE, null, ex);
                }
            }
        } else {
            warning("Veuillez selectionner un type!");
            
        }

    }

    @FXML
    private void reset(ActionEvent event) {
        if (doing == 1) {
            NomInput.setText("");
            DescriptionInput.setText("");
        } else if (doing == 2) {
            NomInput.setText(sett.getName());
            DescriptionInput.setText(sett.getDescription());
        }
    }

    @FXML
    private void cancel(ActionEvent event) {
        
        HideBtnBar();
        hideInputs();
        showCmdBtnBar();
        doing = -1;
    }

    @FXML
    private void confirm(ActionEvent event) {
        if (isEmpty()) {

        } else {
            if (doing == 1) {
                ajouterEventType();
                
            } else if (doing == 2) {
                modifierEventType();
            }
        }
    }

    private boolean isEmpty() {
        if (NomInput.getText() == null || NomInput.getText().trim().isEmpty()) {
            warning("Veuillez saisir le nom du type!");
            return true;
        }
        if (DescriptionInput.getText() == null || DescriptionInput.getText().trim().isEmpty()) {
            warning("Veuillez saisir la description du type!");
            return true;
        }
        return false;
    }
    
    private void ajouterEventType(){
            Alert alert = new Alert(AlertType.CONFIRMATION);
            alert.setTitle("Confirmation Dialog");
            alert.setHeaderText(null);
            alert.setContentText("Êtes-vous sûr(e) de vouloir ajouter ce type?");
            Optional<ButtonType> action = alert.showAndWait();
            if (action.get() == ButtonType.OK) {
                eventtype ett = new eventtype(SelectedId, NomInput.getText(), DescriptionInput.getText());
                EventtypeCRUD.ajouterEventtype(ett);
                try {
                    FXMLLoader loader = new FXMLLoader(getClass().getResource("listEvents.fxml"));
                    Parent root;
                    root = loader.load();
                    DetLabel.getScene().setRoot(root);
                } catch (IOException ex) {
                    Logger.getLogger(ListEvents2Controller.class.getName()).log(Level.SEVERE, null, ex);
                }
            }
                
    }
    
    private void modifierEventType(){
            Alert alert = new Alert(AlertType.CONFIRMATION);
            alert.setTitle("Confirmation Dialog");
            alert.setHeaderText(null);
            alert.setContentText("Êtes-vous sûr(e) de vouloir modifier ce type?");
            Optional<ButtonType> action = alert.showAndWait();
            if (action.get() == ButtonType.OK) {
                eventtype ett = new eventtype(SelectedId, NomInput.getText(), DescriptionInput.getText());
                EventtypeCRUD.modifierEvent(ett, SelectedId);
                try {
                    FXMLLoader loader = new FXMLLoader(getClass().getResource("listEvents.fxml"));
                    Parent root;
                    root = loader.load();
                    DetLabel.getScene().setRoot(root);
                } catch (IOException ex) {
                    Logger.getLogger(ListEvents2Controller.class.getName()).log(Level.SEVERE, null, ex);
                }
            }
                
    }

    

    private void warning(String txt) {
        Alert alert = new Alert(AlertType.WARNING);
            alert.setTitle("Confirmation Dialog");
            alert.setHeaderText(null);
            alert.setContentText(txt);
            Optional<ButtonType> action = alert.showAndWait();
    }

    @FXML
    private void GoBack(MouseEvent event) {
    }

    @FXML
    private void afficherEventtype(ActionEvent event) {
    }

}
