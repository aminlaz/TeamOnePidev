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
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.InputStream;
import java.net.URL;
import java.sql.Date;
import java.sql.Time;
import java.time.LocalDate;
import java.util.List;
import java.util.Optional;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
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
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.GridPane;



/**
 * FXML Controller class
 *
 * @author zaxs
 */
public class AjouterEventController implements Initializable {

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
    private Button AddBTN;
    @FXML
    private Button ResetBTN;
        
    List<eventtype> myList = EventtypeCRUD.getListEventtype();
    @FXML
    private DatePicker EventDate;
    @FXML
    private ImageView backImageV;
    
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
       
        warptxt();
        NumberControl();
        SetTypes() ;

    }    

    @FXML
    private void AddEvent(ActionEvent event) {
        
        
        
        if(isEmpty())
        {
            return;
        }
        else
        {
            Float prix;
        if(EventFree.isSelected())
        prix=0.0f;
        else
            prix=Float.parseFloat(EventPrix.getText());
        Time time = new Time(0, 0, 0);
        event e;
        
        e = new event(0, "0",(String) EventType.getValue() , 
                EventName.getText(), EventDescription.getText(),
                Integer.parseInt(EventCapacity.getText()), Integer.parseInt(EventReserved.getText()),java.sql.Date.valueOf(EventDate.getValue()), Integer.parseInt(EventNumberOfDays.getText()), time, EventAdresse.getText(),
                EventEtat.getText(),EventVille.getText(), Integer.parseInt(EventCodePostal.getText()),EventFree.isSelected(), prix);
        EventCRUD.ajouterEvent(e);
        try {
            FXMLLoader loader =new FXMLLoader(getClass().getResource("ListEvents2.fxml"));
            Parent root;
            root=loader.load();
            
            AddBTN.getScene().setRoot(root);
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
                    }
        }
    }

    @FXML
    private void ResetFields(ActionEvent event) {
       EventName.setText("");
    EventCapacity.setText("");
     EventReserved.setText("");
   EventDescription.setText("");
    EventAdresse.setText("");
    EventEtat.setText("");
    EventVille.setText("");
    EventNumberOfDays.setText("");
    EventCodePostal.setText("");
    EventPrix.setText("");
    }
    
    
    private void warning(String txt){
        Alert alert= new Alert(Alert.AlertType.WARNING);
        alert.setTitle("Warning Dialog");
        alert.setHeaderText(null);
        alert.setContentText(txt);
        Optional <ButtonType> action = alert.showAndWait();
    }
    
    
    private void NumberControl(){
        EventFree.setOnAction(new EventHandler<ActionEvent>() {
            @Override
            public void handle(ActionEvent event) {
                if(EventFree.isSelected())
                {
                    EventPrix.setVisible(false);
                }
                else
                {
                    EventPrix.setVisible(true);
                }
            }
        });
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
    
     private boolean isEmpty() {
        
        if (EventName.getText() == null || EventName.getText().trim().isEmpty()) {
            warning("Veuillez saisir le nom de l'evenement!");
            return true;
        }
        if (EventDescription.getText() == null || EventDescription.getText().trim().isEmpty()) {
            warning("Veuillez saisir la description de l'evenement!");
        }
        if (EventCapacity.getText() == null || EventCapacity.getText().trim().isEmpty()) {
            warning("Veuillez saisir la capacité maximale de places de l'evenement!");
            return true;
        }
        if (EventReserved.getText() == null || EventReserved.getText().trim().isEmpty()) {
            warning("Veuillez saisir le nombre de places reservées de l'evenement!");
            return true;
        }
        
        
        
        if (EventDate.getValue() == null || EventDate.getValue().isBefore(LocalDate.now())) {
            warning("Veuillez saisir une date valide pour l'evenement!");
            return true;
        }
        if (EventNumberOfDays.getText() == null || EventNumberOfDays.getText().trim().isEmpty()) {
            warning("Veuillez saisir le nombre de jours de l'evenement!");
            return true;
        }
 
        if (EventAdresse.getText() == null || EventAdresse.getText().trim().isEmpty()) {
            warning("Veuillez saisir l'adresse de l'evenement!");
            return true;
        }
        
        if (EventEtat.getText() == null || EventEtat.getText().trim().isEmpty()) {
            warning("Veuillez saisir l'etat de l'adresse de l'evenement!");
            return true;
        }
        
        if (EventVille.getText() == null || EventVille.getText().trim().isEmpty()) {
            warning("Veuillez saisir le ville de l'adresse de l'evenement!");
            return true;
        }
        
        if (EventCodePostal.getText() == null || EventCodePostal.getText().trim().isEmpty()) {
            warning("Veuillez saisir le code postal de l'adresse de l'evenement!");
            return true;
        }
        

        if ((!EventFree.isSelected()) && (EventPrix.getText() == null || EventPrix.getText().trim().isEmpty())) {
            warning("Veuillez saisir le prix de l'evenement!");
            return true;
        }
        
        if (Integer.parseInt(EventReserved.getText()) > Integer.parseInt(EventCapacity.getText())) {
            warning("Veuillez saisir une capacité et nombre de places reservées valide! (capacité > nombre de places reservées) ");
            return true;
        }
        
        if (Integer.parseInt(EventNumberOfDays.getText()) < 1) {
            warning("Veuillez saisir un nombre de jours valide! (nombre de jours > 0) ");
            return true;
        }

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
            FXMLLoader loader =new FXMLLoader(getClass().getResource("ListEvents2.fxml"));
            Parent root;
            root=loader.load();
            
            AddBTN.getScene().setRoot(root);
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
                    }
        
    }
    
}
