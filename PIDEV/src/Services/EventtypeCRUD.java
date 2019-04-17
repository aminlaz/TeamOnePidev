/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;


import entities.eventtype;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import DataBase.MyConnection;
import java.sql.Statement;
import javafx.scene.control.Alert;

/**
 *
 * @author zaxs
 */
public class EventtypeCRUD {
    
     public static List<eventtype> getListEventtype() {
        List<eventtype> myList = new ArrayList();
        String requete1 = "Select * FROM eventtype ";
        try {
            PreparedStatement pst = MyConnection.getInstance().getCnx().prepareStatement(requete1);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                int id = rs.getInt("id");
                String name = rs.getString("name");
                String description = rs.getString("description");
                
                eventtype et = new eventtype(id, name, description);
                myList.add(et);
            }
            pst.close();
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return myList;
    }
    
     
    public static void ajouterEventtype(eventtype e) {
        System.out.println("Eventtype ajouter started");
        String requete =" INSERT INTO `eventtype` (`name`, `description`) "
                + "VALUES ('"+e.getName()+"', '"+e.getDescription()+"')";
        

        try {
            Statement st =MyConnection.getInstance().getCnx().createStatement();
            st.executeUpdate(requete);
            Alert alert= new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("info Dialog");
        alert.setHeaderText(null);
        alert.setContentText("Eventtype ajouté!");
        alert.show();
            System.out.println("Eventtype ajouté");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }
     
    public static void supprimerEventtype(int id) {
        String requete3 = "DELETE FROM eventtype "
                + "WHERE id=? ";
        try {
            PreparedStatement pst =MyConnection.getInstance().getCnx().prepareStatement(requete3);
            pst.setInt(1, id);
            pst.executeUpdate();
            Alert alert= new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("info Dialog");
        alert.setHeaderText(null);
        alert.setContentText("Type d'evenement supprimé!");
        alert.show();
            System.out.println("eventtype supprimer !");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }
    
    public static void modifierEvent(eventtype e, int id) {
        String requete2 = "UPDATE eventtype "
                + "SET `name`=?,`description`=?"
                + " WHERE id=? ";
        try {
            PreparedStatement pst =MyConnection.getInstance().getCnx().prepareStatement(requete2);
           
            pst.setString(1, e.getName());
            pst.setString(2, e.getDescription());
            pst.setInt(3, id);
            pst.executeUpdate();
            Alert alert= new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("info Dialog");
        alert.setHeaderText(null);
        alert.setContentText("Type d'evenement modifié!");
        alert.show();
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }
    
    
     public static String getNomEventType(String idevtt)
    {
        String np="";
        try {
            String requete2 = "Select (name) FROM eventtype where id=?  ";
            PreparedStatement pst2 =MyConnection.getInstance().getCnx().prepareStatement(requete2);
            pst2.setString(1,idevtt );
            ResultSet rs =pst2.executeQuery();
            while (rs.next()) {
                np= rs.getString("name") ;
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        return np;
        
    }
    public static String getIdEventType(String nameevtt)
    {   
        System.out.println("name evttype: "+nameevtt);
        String np="";
        try {
            String requete2 = "Select (id) FROM eventtype where name=?  ";
            PreparedStatement pst2 =MyConnection.getInstance().getCnx().prepareStatement(requete2);
            pst2.setString(1,nameevtt );
            ResultSet rs =pst2.executeQuery();
            while (rs.next()) {
                np= rs.getString("id") ;
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        System.out.println("Id event type : "+np);
        return np;
        
    }
}
