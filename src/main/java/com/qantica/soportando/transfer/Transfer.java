/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.transfer;

import com.google.gson.Gson;
import com.google.gson.GsonBuilder;

/**
 *
 * @author felipe
 */
public class Transfer {

    /**
     * Transforma el objeto en un String JSON
     *
     * @return String Cadena de texto JSON del objeto transfer
     */
    public String toJSON() {
        GsonBuilder builder = new GsonBuilder();
        builder.setPrettyPrinting().serializeNulls();
        Gson gson = builder.create();
        return gson.toJson(this);
    }
}
