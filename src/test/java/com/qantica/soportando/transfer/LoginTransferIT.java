/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.transfer;

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
public class LoginTransferIT {
    
    public LoginTransferIT() {
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
     * Test of getLogin method, of class LoginTransfer.
     */
    @org.junit.Test
    public void testGetLogin() {
        System.out.println("getLogin");
        LoginTransfer instance = null;
        String expResult = "";
        String result = instance.getLogin();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setLogin method, of class LoginTransfer.
     */
    @org.junit.Test
    public void testSetLogin() {
        System.out.println("setLogin");
        String login = "";
        LoginTransfer instance = null;
        instance.setLogin(login);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getPass method, of class LoginTransfer.
     */
    @org.junit.Test
    public void testGetPass() {
        System.out.println("getPass");
        LoginTransfer instance = null;
        String expResult = "";
        String result = instance.getPass();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setPass method, of class LoginTransfer.
     */
    @org.junit.Test
    public void testSetPass() {
        System.out.println("setPass");
        String pass = "";
        LoginTransfer instance = null;
        instance.setPass(pass);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getSid method, of class LoginTransfer.
     */
    @org.junit.Test
    public void testGetSid() {
        System.out.println("getSid");
        LoginTransfer instance = null;
        String expResult = "";
        String result = instance.getSid();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setSid method, of class LoginTransfer.
     */
    @org.junit.Test
    public void testSetSid() {
        System.out.println("setSid");
        String sid = "";
        LoginTransfer instance = null;
        instance.setSid(sid);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }
    
}
