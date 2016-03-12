/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.transfer;

import java.util.Date;
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
public class UserTransferIT {
    
    public UserTransferIT() {
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
     * Test of getUid method, of class UserTransfer.
     */
    @org.junit.Test
    public void testGetUid() {
        System.out.println("getUid");
        UserTransfer instance = new UserTransfer();
        Integer expResult = null;
        Integer result = instance.getUid();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setUid method, of class UserTransfer.
     */
    @org.junit.Test
    public void testSetUid() {
        System.out.println("setUid");
        Integer uid = null;
        UserTransfer instance = new UserTransfer();
        instance.setUid(uid);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getEmail method, of class UserTransfer.
     */
    @org.junit.Test
    public void testGetEmail() {
        System.out.println("getEmail");
        UserTransfer instance = new UserTransfer();
        String expResult = "";
        String result = instance.getEmail();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setEmail method, of class UserTransfer.
     */
    @org.junit.Test
    public void testSetEmail() {
        System.out.println("setEmail");
        String email = "";
        UserTransfer instance = new UserTransfer();
        instance.setEmail(email);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getLogin method, of class UserTransfer.
     */
    @org.junit.Test
    public void testGetLogin() {
        System.out.println("getLogin");
        UserTransfer instance = new UserTransfer();
        String expResult = "";
        String result = instance.getLogin();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setLogin method, of class UserTransfer.
     */
    @org.junit.Test
    public void testSetLogin() {
        System.out.println("setLogin");
        String login = "";
        UserTransfer instance = new UserTransfer();
        instance.setLogin(login);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getLastAccess method, of class UserTransfer.
     */
    @org.junit.Test
    public void testGetLastAccess() {
        System.out.println("getLastAccess");
        UserTransfer instance = new UserTransfer();
        Date expResult = null;
        Date result = instance.getLastAccess();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setLastAccess method, of class UserTransfer.
     */
    @org.junit.Test
    public void testSetLastAccess() {
        System.out.println("setLastAccess");
        Date lastAccess = null;
        UserTransfer instance = new UserTransfer();
        instance.setLastAccess(lastAccess);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getActive method, of class UserTransfer.
     */
    @org.junit.Test
    public void testGetActive() {
        System.out.println("getActive");
        UserTransfer instance = new UserTransfer();
        int expResult = 0;
        int result = instance.getActive();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setActive method, of class UserTransfer.
     */
    @org.junit.Test
    public void testSetActive() {
        System.out.println("setActive");
        int active = 0;
        UserTransfer instance = new UserTransfer();
        instance.setActive(active);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }
    
}
