/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.controller;

import com.qantica.soportando.transfer.UserTransfer;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;
import javax.ws.rs.core.Context;
import javax.ws.rs.core.UriInfo;
import javax.ws.rs.Consumes;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.GET;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

/**
 * REST Web Service
 *
 * @author felipe
 */
@Path("user")
public class UserResource {

    @Context
    private UriInfo context;

    /**
     * Creates a new instance of UserResource
     */
    public UserResource() {
    }

    /**
     * Retrieves representation of an instance of
     * com.qantica.qanticahd.controller.UserResource
     *
     * @param req
     * @param id
     * @return an instance of java.lang.String
     */
    @Path("{id}")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public String getUser(@Context HttpServletRequest req, @PathParam("id") Integer id) {
        HttpSession session = req.getSession(true);
        UserTransfer response = new UserTransfer();

        return response.toJSON();
    }

    /**
     * PUT method for updating or creating an instance of UserResource
     *
     * @param content representation for the resource
     */
    @PUT
    @Consumes(MediaType.APPLICATION_JSON)
    public void putUser(String content) {
        System.out.println("PUT: " + content);
//        Session dbSession = HibernateUtil.getSessionFactory().openSession();
//        Transaction tx = dbSession.beginTransaction();
//        User u = new User();
//        u.setName("Felipe Cano");
//        u.setEmail("felipecanol@gmail.com");
//        u.setLogin("lcano");
//        u.setPass("aaaa");
//        dbSession.save(u);
//        tx.commit();
//        dbSession.close();
    }
}
