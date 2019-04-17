/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DataBase;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

/**
 *
 * @author zaxs
 */
public class MyConnection {

    String url = "jdbc:mysql://localhost:3306/pidevteamone";
    String login = "root";
    String mdp = "";
    Connection cnx;
    static MyConnection myCnx;
    
    
    
    private MyConnection() {

        try {
            cnx = DriverManager.getConnection(url, login, mdp);
            System.out.println("connexion etablie");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public Connection getCnx() {
        return cnx;
    }
    
    public static MyConnection getInstance(){
        if(myCnx==null)
        {
           myCnx= new MyConnection();
        }
        return myCnx;
    }

}
