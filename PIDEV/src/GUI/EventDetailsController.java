/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Services.EventCRUD;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.pdf.AcroFields;
import com.itextpdf.text.pdf.PdfReader;
import com.itextpdf.text.pdf.PdfStamper;
import entities.event;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.net.URL;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.Optional;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.Label;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;

/**
 * FXML Controller class
 *
 * @author zaxs
 */
public class EventDetailsController implements Initializable {

    private String EventId;
    @FXML
    private Label EventType;
    @FXML
    private Label EventDescription;
    @FXML
    private Label EventOrganisateur;
    @FXML
    private Label EventPlacesDispo;
    @FXML
    private Label EventDateHeure;
    @FXML
    private Label EventNombreJours;
    @FXML
    private Label EventAdresse;
    @FXML
    private Label EventPrix;
    
    event E;
    @FXML
    private Label EventName;
    @FXML
    private Button rapport;
    @FXML
    private ImageView backImageV;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        warptxt() ;
        // TODO
    }    
    
    public void setDetails(event e){
        if (e != null) {
            E=e;
        EventId=Integer.toString(e.getId());
        EventName.setText(e.getName());
        EventType.setText(e.getEventtype());
        EventPlacesDispo.setText(Integer.toString(e.getCapacity()-e.getReserved()));
        if(e.isFree())
        {
            EventPrix.setText("gratuit");
        }
        else{
            EventPrix.setText(Float.toString(e.getPrix()));
        }
        
        EventAdresse.setText(e.getEtat()+" "+e.getVille()+" "+e.getAdresse()+" "+e.getCodePostal());
        EventNombreJours.setText(Integer.toString(e.getNumberOfDays()));
        EventDateHeure.setText(e.getDate().toLocalDate().format(DateTimeFormatter.ISO_DATE).toString()+" "+e.getTime().toString());
        EventDescription.setText(e.getDescription());
        EventOrganisateur.setText(e.getIdorganisateur());
        EventCRUD.addViewToEvent(e.getId());


    } else {
        EventId="";
        EventName.setText("");
        EventType.setText("");
        EventPlacesDispo.setText("");
        EventPrix.setText("");
        EventAdresse.setText("");
        EventNombreJours.setText("");
        EventDateHeure.setText("");
        EventDescription.setText("");
        EventOrganisateur.setText("");
    }
    }
    
    @FXML
    private void deleteEvent(ActionEvent event) {
        Alert alert= new Alert(AlertType.CONFIRMATION);
        alert.setTitle("Confirmation Dialog");
        alert.setHeaderText(null);
        alert.setContentText("Êtes-vous sûr(e) de vouloir supprimer cet event?");
        Optional <ButtonType> action = alert.showAndWait();
        if(action.get()==ButtonType.OK)
        {
            EventCRUD.supprimerEvent(Integer.valueOf(EventId));
            try {
            FXMLLoader loader =new FXMLLoader(getClass().getResource("ListEvents2.fxml"));
            Parent root;
            root=loader.load();
            EventName.getScene().setRoot(root);
            } catch (IOException ex) {
            Logger.getLogger(ListEvents2Controller.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }

    @FXML
    private void editEvent(ActionEvent event) {
         try {
            FXMLLoader loader =new FXMLLoader(getClass().getResource("EditEvent.fxml"));
            Parent root;
            

            root=loader.load();
            
            EditEventController editController = loader.getController();
            editController.initFields(E);
            editController.getEvent(E);
            EventName.getScene().setRoot(root);
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
                    }
    }

    private void warptxt() {
        EventAdresse.setWrapText(true);
        EventDescription.setWrapText(true);
    }
    
    
    @FXML
    private void doRapport(ActionEvent event)  {
       /* try{
            File filefrom = new File("C:/Users/ramos/Desktop/MyJavaFX/templatePDF/TemplateReport.pdf");
            File filedest = new File("C:/Users/ramos/Desktop/MyJavaFX/PIDEV/Report.pdf");
        Path FROM = Paths.get(filefrom.toURI());
        Path TO = Paths.get(filedest.toURI());
        //overwrite the destination file if it exists, and copy
        // the file attributes, including the rwx permissions
        CopyOption[] options = new CopyOption[]{
          StandardCopyOption.REPLACE_EXISTING,
          StandardCopyOption.COPY_ATTRIBUTES
        }; 
        Files.copy(FROM, TO, options);
        }  catch (IOException ex) {
            Logger.getLogger(EventDetailsController.class.getName()).log(Level.SEVERE, null, ex);
        }*/
        try {
                
                PdfReader reader = new PdfReader("C:/Users/ramos/Desktop/MyJavaFX/templatePDF/TemplateReport.pdf");
                PdfStamper stamper = new PdfStamper(reader, new FileOutputStream("C:/Users/ramos/Desktop/MyJavaFX/PIDEV/Report.pdf"));
                AcroFields form = stamper.getAcroFields();
                form.setField("Organisateur", "test");
                form.setField("nomEvent", E.getName());
                form.setField("datePlaceEvent", EventDateHeure.getText()+" "+EventAdresse.getText());
                form.setField("NbrJoursEvent", EventNombreJours.getText());
                form.setField("typeEvent", EventType.getText());
                form.setField("descriptionEvent", EventDescription.getText());
                form.setField("capacityEvent", String.valueOf(E.getCapacity()));
                form.setField("reserveEvent", String.valueOf(E.getReserved()));
                form.setField("PrixEvent", EventPrix.getText());
                form.setField("rapportDate", LocalDate.now().toString());
                stamper.setFormFlattening(true);
                stamper.close();
                reader.close();

            
            
            
            
        } catch (FileNotFoundException ex) {
            System.out.println(ex.getMessage());
        } catch (DocumentException ex) {
            System.out.println(ex.getMessage());
        } catch (IOException ex) {
            Logger.getLogger(EventDetailsController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        
    }

    @FXML
    private void GoBack(MouseEvent event) {try {
            FXMLLoader loader =new FXMLLoader(getClass().getResource("ListEvents2.fxml"));
            Parent root;
            root=loader.load();
            EventName.getScene().setRoot(root);
            } catch (IOException ex) {
            Logger.getLogger(ListEvents2Controller.class.getName()).log(Level.SEVERE, null, ex);
            }
        
    }
}
