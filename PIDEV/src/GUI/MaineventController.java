/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Button;

/**
 * FXML Controller class
 *
 * @author zaxs
 */
public class MaineventController implements Initializable {
    
    @FXML
    private Button afficherEvents;
    
    @FXML
    private Button afficherEventtype;

    /**
     * Initializes the controller class.
     * @param url
     * @param rb
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void afficherEvents(ActionEvent event) {
        try {
            FXMLLoader loader =new FXMLLoader(getClass().getResource("ListEvents2.fxml"));
            Parent root;
            root=loader.load();
            
            afficherEvents.getScene().setRoot(root);
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
                    }
    }

    @FXML
    private void afficherEventtype(ActionEvent event) {
        try {
            FXMLLoader loader =new FXMLLoader(getClass().getResource("listEvents.fxml"));
            Parent root;
            System.out.println(loader.getLocation());
            root=loader.load();
            System.out.println("evttlist load");
            afficherEventtype.getScene().setRoot(root);
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
                    }
    }
    
}
