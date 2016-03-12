/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.model;

import java.util.Date;
import java.util.Set;
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
public class UserIT {
    
    public UserIT() {
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
     * Test of getUid method, of class User.
     */
    @org.junit.Test
    public void testGetUid() {
        System.out.println("getUid");
        User instance = new User();
        Integer expResult = null;
        Integer result = instance.getUid();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setUid method, of class User.
     */
    @org.junit.Test
    public void testSetUid() {
        System.out.println("setUid");
        Integer uid = null;
        User instance = new User();
        instance.setUid(uid);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getLogin method, of class User.
     */
    @org.junit.Test
    public void testGetLogin() {
        System.out.println("getLogin");
        User instance = new User();
        String expResult = "";
        String result = instance.getLogin();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setLogin method, of class User.
     */
    @org.junit.Test
    public void testSetLogin() {
        System.out.println("setLogin");
        String login = "";
        User instance = new User();
        instance.setLogin(login);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getPass method, of class User.
     */
    @org.junit.Test
    public void testGetPass() {
        System.out.println("getPass");
        User instance = new User();
        String expResult = "";
        String result = instance.getPass();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setPass method, of class User.
     */
    @org.junit.Test
    public void testSetPass() {
        System.out.println("setPass");
        String pass = "";
        User instance = new User();
        instance.setPass(pass);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getEmail method, of class User.
     */
    @org.junit.Test
    public void testGetEmail() {
        System.out.println("getEmail");
        User instance = new User();
        String expResult = "";
        String result = instance.getEmail();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setEmail method, of class User.
     */
    @org.junit.Test
    public void testSetEmail() {
        System.out.println("setEmail");
        String email = "";
        User instance = new User();
        instance.setEmail(email);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getLastAccess method, of class User.
     */
    @org.junit.Test
    public void testGetLastAccess() {
        System.out.println("getLastAccess");
        User instance = new User();
        Date expResult = null;
        Date result = instance.getLastAccess();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setLastAccess method, of class User.
     */
    @org.junit.Test
    public void testSetLastAccess() {
        System.out.println("setLastAccess");
        Date lastAccess = null;
        User instance = new User();
        instance.setLastAccess(lastAccess);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getActive method, of class User.
     */
    @org.junit.Test
    public void testGetActive() {
        System.out.println("getActive");
        User instance = new User();
        int expResult = 0;
        int result = instance.getActive();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setActive method, of class User.
     */
    @org.junit.Test
    public void testSetActive() {
        System.out.println("setActive");
        int active = 0;
        User instance = new User();
        instance.setActive(active);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getRecoverCode method, of class User.
     */
    @org.junit.Test
    public void testGetRecoverCode() {
        System.out.println("getRecoverCode");
        User instance = new User();
        String expResult = "";
        String result = instance.getRecoverCode();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setRecoverCode method, of class User.
     */
    @org.junit.Test
    public void testSetRecoverCode() {
        System.out.println("setRecoverCode");
        String recoverCode = "";
        User instance = new User();
        instance.setRecoverCode(recoverCode);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getRecoverDue method, of class User.
     */
    @org.junit.Test
    public void testGetRecoverDue() {
        System.out.println("getRecoverDue");
        User instance = new User();
        Date expResult = null;
        Date result = instance.getRecoverDue();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setRecoverDue method, of class User.
     */
    @org.junit.Test
    public void testSetRecoverDue() {
        System.out.println("setRecoverDue");
        Date recoverDue = null;
        User instance = new User();
        instance.setRecoverDue(recoverDue);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getCustomers method, of class User.
     */
    @org.junit.Test
    public void testGetCustomers() {
        System.out.println("getCustomers");
        User instance = new User();
        Set expResult = null;
        Set result = instance.getCustomers();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setCustomers method, of class User.
     */
    @org.junit.Test
    public void testSetCustomers() {
        System.out.println("setCustomers");
        Set customers = null;
        User instance = new User();
        instance.setCustomers(customers);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }
    
}
