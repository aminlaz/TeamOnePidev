/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package TestsMain;

import java.io.IOException;
import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.StackPane;
import javafx.stage.Stage;

/**
 *
 * @author zaxs
 */
public class NewFXMain extends Application {
    
    @Override
    public void start(Stage primaryStage) {
        
        
        
        try {
            FXMLLoader loader =new FXMLLoader(getClass().getResource("/GUI/mainevent.fxml"));
            Parent root;
            root=loader.load();
            Scene scene = new Scene(root, 800, 450);
            primaryStage.setScene(scene);
            primaryStage.show();
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
                    }
        
        
        
                
    }

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        launch(args);
    }
    
}
