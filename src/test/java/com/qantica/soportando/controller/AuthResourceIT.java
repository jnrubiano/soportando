/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.controller;

import javax.servlet.http.HttpServletRequest;
import org.junit.After;
import org.junit.AfterClass;
import org.junit.Before;
import org.junit.BeforeClass;
import org.junit.Test;
import static org.junit.Assert.*;

/**
 *
 * @author felipe
 */
public class AuthResourceIT {
    
    public AuthResourceIT() {
    }
    
    @BeforeClass
    public static void setUpClass() {
    }
    
    @AfterClass
    public static void tearDownClass() {
    }
    
    @Before
    public void setUp() {
    }
    
    @After
    public void tearDown() {
    }

    /**
     * Test of login method, of class AuthResource.
     */
    @org.junit.Test
    public void testLogin_HttpServletRequest() {
        System.out.println("login");
        HttpServletRequest req = null;
        AuthResource instance = new AuthResource();
        String expResult = "";
        String result = instance.login(req);
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of login method, of class AuthResource.
     */
    @org.junit.Test
    public void testLogin_HttpServletRequest_String() {
        System.out.println("login");
        HttpServletRequest req = null;
        String content = "";
        AuthResource instance = new AuthResource();
        String expResult = "";
        String result = instance.login(req, content);
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }
    
}
