/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.controller;

import com.qantica.soportando.model.User;
import com.qantica.soportando.transfer.LoginTransfer;
import com.qantica.soportando.transfer.StatusLoginTransfer;
import com.qantica.soportando.transfer.UserTransfer;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;
import javax.ws.rs.core.Context;
import javax.ws.rs.core.UriInfo;
import javax.ws.rs.Consumes;
import javax.ws.rs.Path;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;
import org.hibernate.Session;
import org.hibernate.Transaction;

/**
 * REST Web Service
 *
 * @author felipe
 */
@Path("auth")
public class AuthResource {
    
    @Context
    private UriInfo context;

    /**
     * Creates a new instance of AuthResource
     */
    public AuthResource() {
    }

    /**
     * Retrieves representation of an instance of
     * com.qantica.soportando.controller.AuthResource
     *
     * @return an instance of java.lang.String
     */
    @Path("login")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public String login(@Context HttpServletRequest req) {
        HttpSession session = req.getSession(true);
        StatusLoginTransfer response = new StatusLoginTransfer();
        Object status = session.getAttribute("session");
        if (status != null) {
            response.setStatus(true);
        } else {
            response.setStatus(false);
        }
        return response.toJSON();
    }

    /**
     * PUT method for updating or creating an instance of AuthResource
     *
     * @param req
     * @param content representation for the resource
     * @return
     */
    @Path("login")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    public String login(@Context HttpServletRequest req, String content) {
        LoginTransfer lt = new LoginTransfer(content);
        Session dbSession = HibernateUtil.getSessionFactory().openSession();
        User u = (User) dbSession.createQuery("FROM User WHERE login='" + lt.getLogin()+ "'").uniqueResult();
        HttpSession session = req.getSession(true);
        session.setAttribute("session", u);
        lt.setPass("");
        lt.setSid(session.getId());
        return lt.toJSON();
    }
}
