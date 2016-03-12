/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.controller;

import com.qantica.soportando.model.Company;
import com.qantica.soportando.model.Customer;
import com.qantica.soportando.transfer.CompanyTransfer;
import com.qantica.soportando.transfer.CustomerTransfer;
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
@Path("customer")
public class CustomerResource {

    @Context
    private UriInfo context;

    /**
     * Creates a new instance of CustomerResource
     */
    public CustomerResource() {
    }

    /**
     * Retrieves representation of an instance of com.qantica.soportando.controller.CustomerResource
     * @return an instance of java.lang.String
     */
    @Path("list")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public String getCustomers() {
        String response = "";
        String s = "";
        Session dbSession = HibernateUtil.getSessionFactory().openSession();
        List<Customer> cs = dbSession.createQuery("FROM Customer").list();
        for (Customer c : cs) {
            CustomerTransfer ct = new CustomerTransfer(c);
            response += s + ct.toJSON();
            s = ",";
        }
        return "[" + response + "]";
    }

    /**
     * PUT method for updating or creating an instance of CustomerResource
     * @param content representation for the resource
     */
    @PUT
    @Consumes(MediaType.APPLICATION_JSON)
    public void putJson(String content) {
    }
}
