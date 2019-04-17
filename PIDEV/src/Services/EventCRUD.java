/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import entities.event;
import DataBase.MyConnection;
import static Services.EventtypeCRUD.getIdEventType;
import static Services.EventtypeCRUD.getNomEventType;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.sql.Time;
import java.sql.Types;
import java.util.ArrayList;
import java.util.List;
import java.util.Optional;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.scene.control.Alert;
import javafx.scene.control.ButtonType;
import javax.lang.model.util.ElementFilter;

/**
 *
 * @author zaxs
 */
public class EventCRUD {

    public static List<event> getListEvents() {
        List<event> myList = new ArrayList();
        String requete1 = "Select * FROM event ";
        try {
            PreparedStatement pst = MyConnection.getInstance().getCnx().prepareStatement(requete1);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                int id = rs.getInt("id");
                String idorganisateur = getNomOrganisateur(Integer.toString(rs.getInt("idorganisateur")));
                String eventtype = getNomEventType(Integer.toString(rs.getInt("eventtype")));
                String name = rs.getString("name");
                String description = rs.getString("description");
                int capacity = rs.getInt("capacity");
                int reserved = rs.getInt("reserved");
                Date date = rs.getDate("date");
                int numberOfDays = rs.getInt("numberOfDays");
                Time time = rs.getTime("time");
                String adresse = rs.getString("adresse");
                String etat = rs.getString("etat");
                String ville = rs.getString("ville");
                int codePostal = rs.getInt("codePostal");
                boolean free = rs.getBoolean("free");
                Float prix = rs.getFloat("prix");
                event e = new event(id, idorganisateur, eventtype, name, description, capacity, reserved, date, numberOfDays, time, adresse, etat, ville, codePostal, free, prix);
                // print the results
                myList.add(e);
            }
            pst.close();
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return myList;
    }

    public static void ajouterEvent(event e) {
        String idEventType = getIdEventType(e.getEventtype());
        System.out.println(idEventType);
        int free;
        if (e.isFree() == true) {
            free = 1;
        } else {
            free = 0;
        }
        System.out.println("Event ajouter started");
        String requete = " INSERT INTO `event` (`idorganisateur`, `eventtype`, `name`, `description`, `capacity`,"
                + " `reserved`, `date`, `numberofdays`, `time`, `adresse`, `etat`, `ville`, `codepostal`, `free`, `prix`) "
                + "VALUES ('5', '" + idEventType + "',"
                + " '" + e.getName() + "', '" + e.getDescription() + "', '" + e.getCapacity() + "', '" + e.getReserved() + "', "
                + " '" + e.getDate() + "', '" + e.getNumberOfDays() + "', '" + e.getTime() + "', '" + e.getAdresse() + "', "
                + "'" + e.getEtat() + "', '" + e.getVille() + "', '" + e.getCodePostal() + "', '" + free + "', '" + e.getPrix() + "')";

        try {
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            st.executeUpdate(requete);
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("info Dialog");
            alert.setHeaderText(null);
            alert.setContentText("Evenement ajouté!");
            alert.show();
            System.out.println("Event ajouter");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public static void supprimerEvent(int id) {
        String requete3 = "DELETE FROM event "
                + "WHERE id=? ";
        try {
            PreparedStatement pst = MyConnection.getInstance().getCnx().prepareStatement(requete3);
            pst.setInt(1, id);
            pst.executeUpdate();
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("info Dialog");
            alert.setHeaderText(null);
            alert.setContentText("Evenement supprimé!");
            alert.show();
            System.out.println("event supprimer !");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public static void modifierEvent(event e, int id) {
        String eventtypeIdStr = getIdEventType(e.getEventtype());
        int eventtypeId = Integer.parseInt(eventtypeIdStr);
        String requete2 = "UPDATE event "
                + "SET `eventtype`=?,`name`=?,`description`=?,"
                + "`capacity`=?,`reserved`=?,`date`=?,`numberofdays`=?,`adresse`=?,"
                + "`etat`=?,`ville`=?,`codepostal`=?,`free`=?,`prix`=?"
                + " WHERE id=? ";
        try {
            PreparedStatement pst = MyConnection.getInstance().getCnx().prepareStatement(requete2);
            pst.setInt(1, eventtypeId);
            pst.setString(2, e.getName());
            pst.setString(3, e.getDescription());
            pst.setInt(4, e.getCapacity());
            pst.setInt(5, e.getReserved());
            pst.setDate(6, e.getDate());
            pst.setInt(7, e.getNumberOfDays());
            pst.setString(8, e.getAdresse());
            pst.setString(9, e.getEtat());
            pst.setString(10, e.getVille());
            pst.setInt(11, e.getCodePostal());
            if (e.isFree()) {
                pst.setInt(12, 1);
                pst.setNull(13, Types.FLOAT);
            } else {
                pst.setInt(12, 0);
                pst.setFloat(13, e.getPrix());

            }
            pst.setInt(14, id);
            pst.executeUpdate();
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("info Dialog");
            alert.setHeaderText(null);
            alert.setContentText("Evenement modifié!");
            alert.show();

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public static String getNomOrganisateur(String idorg) {
        String np = "";
        try {
            String requete2 = "Select (username) FROM fos_user where id=?  ";
            PreparedStatement pst2 = MyConnection.getInstance().getCnx().prepareStatement(requete2);
            pst2.setString(1, idorg);
            ResultSet rs = pst2.executeQuery();
            while (rs.next()) {
                np = rs.getString("username");
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

        return np;
    }

    public static List<event> rechercheListEvents(String str) {
        List<event> myList = new ArrayList();
        //String requete1 = "SELECT event.* FROM event,eventtype  where eventtype.name like '%"+str+"%' AND event.eventtype=eventtype.id ";
        String requete1 = "SELECT event.* FROM event "
                + "inner join eventtype on event.eventtype=eventtype.id "
                + "where  eventtype.name like '%"+str+"%' or event.name like '%"+str+"%' ";

        try {
            PreparedStatement pst = MyConnection.getInstance().getCnx().prepareStatement(requete1);
            
           
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                int id = rs.getInt("id");
                String idorganisateur = getNomOrganisateur(Integer.toString(rs.getInt("idorganisateur")));
                String eventtype = getNomEventType(Integer.toString(rs.getInt("eventtype")));
                String name = rs.getString("name");
                String description = rs.getString("description");
                int capacity = rs.getInt("capacity");
                int reserved = rs.getInt("reserved");
                Date date = rs.getDate("date");
                int numberOfDays = rs.getInt("numberOfDays");
                Time time = rs.getTime("time");
                String adresse = rs.getString("adresse");
                String etat = rs.getString("etat");
                String ville = rs.getString("ville");
                int codePostal = rs.getInt("codePostal");
                boolean free = rs.getBoolean("free");
                Float prix = rs.getFloat("prix");
                
                event e = new event(id, idorganisateur, eventtype, name, description, capacity, reserved, date, numberOfDays, time, adresse, etat, ville, codePostal, free, prix);
                  System.out.println("Mylist event : "+e);
// print the results
                myList.add(e);
            }
            pst.close();
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        return myList;
    }
    
    public static void addViewToEvent(int id){
        
        
        try {
            String requete2 = "UPDATE event "
                    + "SET vues=vues+1 "
                    + " WHERE id=? ";
            PreparedStatement pst = MyConnection.getInstance().getCnx().prepareStatement(requete2);
            pst.setInt(1, id);
            pst.executeUpdate();
        } catch (SQLException ex) {
            Logger.getLogger(EventCRUD.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

}
