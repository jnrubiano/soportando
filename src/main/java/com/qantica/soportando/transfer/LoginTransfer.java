/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.transfer;

import com.google.gson.Gson;
import com.google.gson.JsonObject;
import com.google.gson.reflect.TypeToken;
import com.qantica.soportando.model.User;
import java.lang.reflect.Type;
import java.util.ArrayList;

/**
 *
 * @author felipe
 */
public class LoginTransfer extends Transfer {

    private String login;
    private String pass;
    private String sid;

    public LoginTransfer(String json) {
        Type listType = new TypeToken<ArrayList<LoginTransfer>>() {
        }.getType();
        JsonObject a = new Gson().fromJson(json, JsonObject.class);
        login = a.get("user").getAsString();
        pass = a.get("pass").getAsString();
    }

    public String getLogin() {
        return login;
    }

    public void setLogin(String login) {
        this.login = login;
    }

    public String getPass() {
        return pass;
    }

    public void setPass(String pass) {
        this.pass = pass;
    }

    public String getSid() {
        return sid;
    }

    public void setSid(String sid) {
        this.sid = sid;
    }
}
