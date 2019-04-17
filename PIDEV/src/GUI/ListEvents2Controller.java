/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Services.EventCRUD;
import com.itextpdf.text.Document;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Paragraph;
import com.itextpdf.text.pdf.PdfWriter;
import entities.event;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.net.URL;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.Pagination;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.KeyEvent;
import javafx.scene.layout.VBox;


/**
 * FXML Controller class
 *
 * @author zaxs
 */
public class ListEvents2Controller implements Initializable {

    @FXML
    private Pagination pagination;
    @FXML
    private VBox Vbx;
    @FXML
    private Label nameLabel1;
    @FXML
    private Label nameLabel2;
    @FXML
    private Label nameLabel3;
    @FXML
    private Label nameLabel4;

    List<event> myList = EventCRUD.getListEvents();

    private Image img = new Image("https://i.imgur.com/uCIzoPV.jpg");
    
    
    @FXML
    private ImageView ImageView1;
    @FXML
    private ImageView ImageView2;
    @FXML
    private ImageView ImageView3;
    @FXML
    private ImageView ImageView4;
    @FXML
    private TextField rechercheInput;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {

            Image img = new Image("https://i.imgur.com/uCIzoPV.jpg");
            


        pagination.getStyleClass().add(Pagination.STYLE_CLASS_BULLET);
        pagination.setPageFactory((Integer pageIndex) -> createPage(pageIndex));
        
        pagination.setMaxPageIndicatorCount((myList.size() / 4) + 1);
        if((myList.size() % 4)==0)
            pagination.setPageCount((myList.size() / 4) );
        else
            pagination.setPageCount((myList.size() / 4) + 1);
        
        
        GotoDetails();
        
        rechercheInput.setOnKeyPressed((KeyEvent event) -> {
            myList=EventCRUD.rechercheListEvents(rechercheInput.getText());
            System.out.println("my list changed");
            pagination.setPageFactory((Integer pageIndex) -> createPage(pageIndex));
        
        pagination.setMaxPageIndicatorCount((myList.size() / 4) + 1);
        if((myList.size() % 4)==0)
            pagination.setPageCount((myList.size() / 4) );
        else
            pagination.setPageCount((myList.size() / 4) + 1);
            });
        // TODO
    }
    
    
    private void GotoDetails(){
        nameLabel1.setOnMouseClicked((event) -> {
            Goevnt1();
        });
        
        nameLabel2.setOnMouseClicked((event) -> {
            Goevnt2();
        });
        
        nameLabel3.setOnMouseClicked((event) -> {
            Goevnt3();
        });

        nameLabel4.setOnMouseClicked((event) -> {
           Goevnt4();
        });
        
        ImageView1.setOnMouseClicked((event) -> {
            Goevnt1();
        });
        
        ImageView2.setOnMouseClicked((event) -> {
            Goevnt2();
        });
        
        ImageView3.setOnMouseClicked((event) -> {
            Goevnt3();
        });
        
        ImageView4.setOnMouseClicked((event) -> {
            Goevnt4();
        });
    }
    
    
    private void Goevnt1(){
        try {
            FXMLLoader loader =new FXMLLoader(getClass().getResource("EventDetails.fxml"));
            Parent root;
            root=loader.load();
            EventDetailsController detailsController = loader.getController();
            detailsController.setDetails(myList.get((pagination.getCurrentPageIndex())*4));
            nameLabel1.getScene().setRoot(root);
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
                    }
    }
    private void Goevnt2(){
        try {
            FXMLLoader loader =new FXMLLoader(getClass().getResource("EventDetails.fxml"));
            Parent root;
            root=loader.load();
            EventDetailsController detailsController = loader.getController();
            detailsController.setDetails(myList.get(((pagination.getCurrentPageIndex())*4)+1));
            nameLabel2.getScene().setRoot(root);
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
                    }
    }
    private void Goevnt3(){
        try {
            FXMLLoader loader =new FXMLLoader(getClass().getResource("EventDetails.fxml"));
            Parent root;
            root=loader.load();
            EventDetailsController detailsController = loader.getController();
            detailsController.setDetails(myList.get(((pagination.getCurrentPageIndex())*4)+2));
            nameLabel3.getScene().setRoot(root);
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
                    }
    }
    private void Goevnt4(){
         try {
            FXMLLoader loader =new FXMLLoader(getClass().getResource("EventDetails.fxml"));
            Parent root;
            root=loader.load();
            EventDetailsController detailsController = loader.getController();
            detailsController.setDetails(myList.get(((pagination.getCurrentPageIndex())*4)+3));
            nameLabel4.getScene().setRoot(root);
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
                    }
    }

    private VBox createPage(int pageIndex) {
        
        for (int i = 0; i < 4; i++) {
            if (((pageIndex * 4) + i) < (myList.size())) {
                showEventNames(myList.get((pageIndex * 4) + i), i);
            } else {
                showEventNames(null, i);
            }
        }

        return Vbx;
    }
    
    
    private void showEventNames(event e, int i) {

        if (e != null) {
            if (i == 0) {
                nameLabel1.setText(e.getName());
                ImageView1.setImage(img);
                nameLabel1.setDisable(false);
                ImageView1.setVisible(true);
            
            } else if (i == 1) {
                nameLabel2.setText(e.getName());
                ImageView2.setImage(img);
                nameLabel2.setDisable(false);
                ImageView2.setVisible(true);
            
            } else if (i == 2) {
                nameLabel3.setText(e.getName());
                ImageView3.setImage(img);
                nameLabel3.setDisable(false);
                ImageView3.setVisible(true);
            
            } else {
                nameLabel4.setText(e.getName());
                ImageView4.setImage(img);
                nameLabel4.setDisable(false);
                ImageView4.setVisible(true);
            }

        } else {
            if (i == 0) {
                nameLabel1.setText("");
                nameLabel1.setDisable(true);
                ImageView1.setVisible(false);
            } else if (i == 1) {
                nameLabel2.setText("");
                nameLabel2.setDisable(true);
                ImageView2.setVisible(false);
            } else if (i == 2) {
                nameLabel3.setText("");
                nameLabel3.setDisable(true);
                ImageView3.setVisible(false);
            } else {
                nameLabel4.setText("");
                nameLabel4.setDisable(true);
                ImageView4.setVisible(false);
            }

        }

    }

    @FXML
    private void addEvent(ActionEvent event) {
        try {
            FXMLLoader loader =new FXMLLoader(getClass().getResource("AjouterEvent.fxml"));
            Parent root;
            root=loader.load();
            nameLabel1.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(ListEvents2Controller.class.getName()).log(Level.SEVERE, null, ex);
        }
    }


    

    
}
