/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.transfer;

import com.qantica.soportando.model.User;
import java.util.Date;

/**
 *
 * @author felipe
 */
public class UserTransfer extends Transfer {

    private Integer uid;
    private String email;
    private String login;
    private Date lastAccess;
    private int active;

    public UserTransfer() {
    }

    public UserTransfer(User u) {
        uid = u.getUid();
        email = u.getEmail();
        login = u.getLogin();
        lastAccess = u.getLastAccess();
        active = u.getActive();
    }

    /**
     * @return the uid
     */
    public Integer getUid() {
        return uid;
    }

    /**
     * @param uid the uid to set
     */
    public void setUid(Integer uid) {
        this.uid = uid;
    }

    /**
     * @return the email
     */
    public String getEmail() {
        return email;
    }

    /**
     * @param email the email to set
     */
    public void setEmail(String email) {
        this.email = email;
    }

    /**
     * @return the login
     */
    public String getLogin() {
        return login;
    }

    /**
     * @param login the login to set
     */
    public void setLogin(String login) {
        this.login = login;
    }

    public Date getLastAccess() {
        return lastAccess;
    }

    public void setLastAccess(Date lastAccess) {
        this.lastAccess = lastAccess;
    }

    public int getActive() {
        return active;
    }

    public void setActive(int active) {
        this.active = active;
    }
}
