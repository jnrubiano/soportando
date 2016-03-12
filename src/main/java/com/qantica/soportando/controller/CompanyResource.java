/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.controller;

import com.qantica.soportando.model.Company;
import com.qantica.soportando.transfer.CompanyTransfer;
import java.util.List;
import javax.ws.rs.core.Context;
import javax.ws.rs.core.UriInfo;
import javax.ws.rs.Consumes;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.GET;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;
import org.hibernate.Session;

/**
 * REST Web Service
 *
 * @author felipe
 */
@Path("company")
public class CompanyResource {

    @Context
    private UriInfo context;

    /**
     * Creates a new instance of CompanyResource
     */
    public CompanyResource() {
    }

    /**
     * Retrieves representation of an instance of
     * com.qantica.soportando.controller.CompanyResource
     *
     * @return an instance of java.lang.String
     */
    @Path("list")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public String getJson() {
        String response = "";
        String s = "";
        Session dbSession = HibernateUtil.getSessionFactory().openSession();
        List<Company> cs = dbSession.createQuery("FROM Company").list();
        for (Company c : cs) {
            CompanyTransfer ct = new CompanyTransfer(c);
            response += s + ct.toJSON();
            s = ",";
        }
        return "[" + response + "]";
    }

    /**
     * PUT method for updating or creating an instance of CompanyResource
     *
     * @param content representation for the resource
     */
    @PUT
    @Consumes(MediaType.APPLICATION_JSON)
    public void putJson(String content) {
    }
}
