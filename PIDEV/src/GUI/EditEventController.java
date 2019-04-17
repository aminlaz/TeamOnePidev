/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Services.EventCRUD;
import Services.EventtypeCRUD;
import entities.event;
import entities.eventtype;
import java.io.IOException;
import java.net.URL;
import java.sql.Date;
import java.sql.Time;
import java.time.LocalDate;
import java.time.temporal.TemporalAccessor;
import java.util.List;
import java.util.Optional;
import java.util.ResourceBundle;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.CheckBox;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.GridPane;

/**
 * FXML Controller class
 *
 * @author zaxs
 */
public class EditEventController implements Initializable {

    @FXML
    private GridPane gridPane;
    @FXML
    private TextField EventName;
    @FXML
    private TextField EventCapacity;
    @FXML
    private TextField EventReserved;
    @FXML
    private TextArea EventDescription;
    @FXML
    private ChoiceBox<String> EventType;
    @FXML
    private DatePicker EventDate;
    @FXML
    private TextField EventAdresse;
    @FXML
    private TextField EventEtat;
    @FXML
    private TextField EventVille;
    @FXML
    private TextField EventNumberOfDays;
    @FXML
    private TextField EventCodePostal;
    @FXML
    private CheckBox EventFree;
    @FXML
    private TextField EventPrix;
    @FXML
    private Button EditBTN;
    @FXML
    private Button ResetBTN;

    List<eventtype> myList = EventtypeCRUD.getListEventtype();
    event E;
    @FXML
    private ImageView backImageV;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        warptxt();
        SetTypes();
        // TODO

    }

    @FXML
    private void EditEvent(ActionEvent event) {

        if (isEmpty()) {
            return;
        } else {
            Float prix;
            if (EventFree.isSelected()) {
                prix = 0.0f;
            } else {
                if ((EventPrix.getText() == null) || (EventPrix.getText().trim().isEmpty())) {
                    Alert alert = new Alert(Alert.AlertType.WARNING);
                    alert.setTitle("Warning Dialog");
                    alert.setHeaderText(null);
                    alert.setContentText("Veuillez mettre un prix!");
                    Optional<ButtonType> action = alert.showAndWait();
                    return;
                } else {
                    prix = Float.parseFloat(EventPrix.getText());
                }
            }
            Time time = new Time(0, 0, 0);
            event e;

            e = new event(0, "0", (String) EventType.getValue(),
                    EventName.getText(), EventDescription.getText(),
                    Integer.parseInt(EventCapacity.getText()), Integer.parseInt(EventReserved.getText()), java.sql.Date.valueOf(EventDate.getValue()), Integer.parseInt(EventNumberOfDays.getText()), time, EventAdresse.getText(),
                    EventEtat.getText(), EventVille.getText(), Integer.parseInt(EventCodePostal.getText()), EventFree.isSelected(), prix);
            EventCRUD.modifierEvent(e, E.getId());
            try {
                FXMLLoader loader = new FXMLLoader(getClass().getResource("ListEvents2.fxml"));
                Parent root;
                root = loader.load();

                EditBTN.getScene().setRoot(root);
            } catch (IOException ex) {
                System.out.println(ex.getMessage());
            }
        }

    }

    public void getEvent(event e) {
        E = e;
    }

    @FXML
    private void ResetFields(ActionEvent event) {
        EventName.setText(E.getName());
        EventCapacity.setText(String.valueOf(E.getCapacity()));
        EventReserved.setText(String.valueOf(E.getReserved()));
        EventDate.setValue(E.getDate().toLocalDate());
        EventDescription.setText(E.getDescription());
        EventAdresse.setText(E.getAdresse());
        EventEtat.setText(E.getEtat());
        EventVille.setText(E.getVille());
        EventNumberOfDays.setText(String.valueOf(E.getNumberOfDays()));
        EventCodePostal.setText(String.valueOf(E.getCodePostal()));
        if (E.isFree()) {
            EventFree.setSelected(true);
        } else {
            EventFree.setSelected(false);
            EventPrix.setText(String.valueOf(E.getPrix()));
        }

    }

    public void initFields(event E) {
        EventName.setText(E.getName());
        EventCapacity.setText(String.valueOf(E.getCapacity()));
        EventDate.setValue(E.getDate().toLocalDate());
        EventReserved.setText(String.valueOf(E.getReserved()));
        EventDescription.setText(E.getDescription());
        EventAdresse.setText(E.getAdresse());
        EventEtat.setText(E.getEtat());
        EventVille.setText(E.getVille());
        EventNumberOfDays.setText(String.valueOf(E.getNumberOfDays()));
        EventCodePostal.setText(String.valueOf(E.getCodePostal()));
        if (E.isFree()) {
            EventFree.setSelected(true);
        } else {
            EventFree.setSelected(false);
            EventPrix.setText(String.valueOf(E.getPrix()));
        }
    }

    private void NumberControl() {

        EventNumberOfDays.textProperty().addListener(new ChangeListener<String>() {
            @Override
            public void changed(ObservableValue<? extends String> observable, String oldValue,
                    String newValue) {
                if (!newValue.matches("\\d*")) {
                    EventNumberOfDays.setText(newValue.replaceAll("[^\\d]", ""));
                }
            }
        });
        EventCodePostal.textProperty().addListener(new ChangeListener<String>() {
            @Override
            public void changed(ObservableValue<? extends String> observable, String oldValue,
                    String newValue) {
                if (!newValue.matches("\\d*")) {
                    EventCodePostal.setText(newValue.replaceAll("[^\\d]", ""));
                }
            }
        });
        EventCapacity.textProperty().addListener(new ChangeListener<String>() {
            @Override
            public void changed(ObservableValue<? extends String> observable, String oldValue,
                    String newValue) {
                if (!newValue.matches("\\d*")) {
                    EventCapacity.setText(newValue.replaceAll("[^\\d]", ""));
                }
            }
        });
        EventReserved.textProperty().addListener(new ChangeListener<String>() {
            @Override
            public void changed(ObservableValue<? extends String> observable, String oldValue,
                    String newValue) {
                if (!newValue.matches("\\d*")) {
                    EventReserved.setText(newValue.replaceAll("[^\\d]", ""));
                }
            }
        });

        /* EventPrix.textProperty().addListener(new ChangeListener<String>() {
    @Override
    public void changed(ObservableValue<? extends String> observable, String oldValue, 
        String newValue) {
        if (!newValue.matches("[-+]?[0-9]*\\.?[0-9]*")) {
            EventPrix.setText(newValue.replaceAll("^[[-+]?[0-9]*\\.?[0-9]*]", ""));
        }
    }
    });*/
    }

    private void warning(String txt) {
        Alert alert = new Alert(Alert.AlertType.WARNING);
        alert.setTitle("Warning Dialog");
        alert.setHeaderText(null);
        alert.setContentText(txt);
        Optional<ButtonType> action = alert.showAndWait();
    }

     private boolean isEmpty() {
        
        if (EventName.getText() == null || EventName.getText().trim().isEmpty()) {
            warning("Veuillez saisir le nom de l'evenement!");
            return true;
        }
        else if (EventDescription.getText() == null || EventDescription.getText().trim().isEmpty()) {
            warning("Veuillez saisir la description de l'evenement!");
        }
        else if (EventCapacity.getText() == null || EventCapacity.getText().trim().isEmpty()) {
            warning("Veuillez saisir la capacité maximale de places de l'evenement!");
            return true;
        }
        else if (EventReserved.getText() == null || EventReserved.getText().trim().isEmpty()) {
            warning("Veuillez saisir le nombre de places reservées de l'evenement!");
            return true;
        }
        
        else if (EventDate.getValue() == null || EventDate.getValue().isBefore(LocalDate.now())) {
            warning("Veuillez saisir une date valide pour l'evenement!");
            return true;
        }
        else if (EventNumberOfDays.getText() == null || EventNumberOfDays.getText().trim().isEmpty()) {
            warning("Veuillez saisir le nombre de jours de l'evenement!");
            return true;
        }
 
        else if (EventAdresse.getText() == null || EventAdresse.getText().trim().isEmpty()) {
            warning("Veuillez saisir l'adresse de l'evenement!");
            return true;
        }
        
        else if (EventEtat.getText() == null || EventEtat.getText().trim().isEmpty()) {
            warning("Veuillez saisir l'etat de l'adresse de l'evenement!");
            return true;
        }
        
        else if (EventVille.getText() == null || EventVille.getText().trim().isEmpty()) {
            warning("Veuillez saisir le ville de l'adresse de l'evenement!");
            return true;
        }
        
        else if (EventCodePostal.getText() == null || EventCodePostal.getText().trim().isEmpty()) {
            warning("Veuillez saisir le code postal de l'adresse de l'evenement!");
            return true;
        }
        

        else if ((!EventFree.isSelected()) && (EventPrix.getText() == null || EventPrix.getText().trim().isEmpty())) {
            warning("Veuillez saisir le prix de l'evenement!");
            return true;
        }
        
        else if ( (Integer.parseInt(EventReserved.getText())) > (Integer.parseInt(EventCapacity.getText())) ) {
            warning("Veuillez saisir une capacité et nombre de places reservées valide! (capacité > nombre de places reservées) ");
            return true;
        }
        
        else if (Integer.parseInt(EventNumberOfDays.getText()) < 1) {
            warning("Veuillez saisir un nombre de jours valide! (nombre de jours > 0) ");
            return true;
        }
        else return false;
        return false;
        
    }

    private void SetTypes() {
        for (eventtype object : myList) {
            EventType.getItems().add(object.getName());

        }
        EventType.getSelectionModel().selectFirst();
    }

    private void warptxt() {
        EventDescription.setWrapText(true);
    }

    @FXML
    private void GoBack(MouseEvent event) {
         try {
                FXMLLoader loader = new FXMLLoader(getClass().getResource("ListEvents2.fxml"));
                Parent root;
                root = loader.load();

                EditBTN.getScene().setRoot(root);
            } catch (IOException ex) {
                System.out.println(ex.getMessage());
            }
    }

}
