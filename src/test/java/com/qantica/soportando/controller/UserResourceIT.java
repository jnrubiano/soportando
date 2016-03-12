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
public class UserResourceIT {
    
    public UserResourceIT() {
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
     * Test of getUser method, of class UserResource.
     */
    @org.junit.Test
    public void testGetUser() {
        System.out.println("getUser");
        HttpServletRequest req = null;
        Integer id = null;
        UserResource instance = new UserResource();
        String expResult = "";
        String result = instance.getUser(req, id);
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of putUser method, of class UserResource.
     */
    @org.junit.Test
    public void testPutUser() {
        System.out.println("putUser");
        String content = "";
        UserResource instance = new UserResource();
        instance.putUser(content);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }
    
}
