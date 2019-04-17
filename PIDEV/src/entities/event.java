/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;

import java.sql.Date;
import java.sql.Time;


/**
 *
 * @author zaxs
 */
public class event {
    private int id;
    private String idorganisateur;
    private String eventtype;
    private String name;
    private String description;
    private int capacity;
    private int reserved;
    private Date date;
    private int numberOfDays;
    private Time time;
    private String adresse;
    private String etat;
    private String ville;
    private int codePostal;
    private boolean free;
    private Float prix;

    public event(int id, String idorganisateur, String eventtype, String name, String description, int capacity, int reserved, Date date, int numberOfDays, Time time, String adresse, String etat, String ville, int codePostal, boolean free, Float prix) {
        this.id = id;
        this.idorganisateur = idorganisateur;
        this.eventtype = eventtype;
        this.name = name;
        this.description = description;
        this.capacity = capacity;
        this.reserved = reserved;
        this.date = date;
        this.numberOfDays = numberOfDays;
        this.time = time;
        this.adresse = adresse;
        this.etat = etat;
        this.ville = ville;
        this.codePostal = codePostal;
        this.free = free;
        this.prix = prix;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getIdorganisateur() {
        return idorganisateur;
    }

    public void setIdorganisateur(String idorganisateur) {
        this.idorganisateur = idorganisateur;
    }

    public String getEventtype() {
        return eventtype;
    }

    public void setEventtype(String eventtype) {
        this.eventtype = eventtype;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public int getCapacity() {
        return capacity;
    }

    public void setCapacity(int capacity) {
        this.capacity = capacity;
    }

    public int getReserved() {
        return reserved;
    }

    public void setReserved(int reserved) {
        this.reserved = reserved;
    }

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
        this.date = date;
    }

    public int getNumberOfDays() {
        return numberOfDays;
    }

    public void setNumberOfDays(int numberOfDays) {
        this.numberOfDays = numberOfDays;
    }

    public Time getTime() {
        return time;
    }

    public void setTime(Time time) {
        this.time = time;
    }

    public String getAdresse() {
        return adresse;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public String getEtat() {
        return etat;
    }

    public void setEtat(String etat) {
        this.etat = etat;
    }

    public String getVille() {
        return ville;
    }

    public void setVille(String ville) {
        this.ville = ville;
    }

    public int getCodePostal() {
        return codePostal;
    }

    public void setCodePostal(int codePostal) {
        this.codePostal = codePostal;
    }

    public boolean isFree() {
        return free;
    }

    public void setFree(boolean free) {
        this.free = free;
    }

    public Float getPrix() {
        return prix;
    }

    public void setPrix(Float prix) {
        this.prix = prix;
    }

    
    
}
