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
public class StatusLoginTransferIT {
    
    public StatusLoginTransferIT() {
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
     * Test of isStatus method, of class StatusLoginTransfer.
     */
    @org.junit.Test
    public void testIsStatus() {
        System.out.println("isStatus");
        StatusLoginTransfer instance = new StatusLoginTransfer();
        boolean expResult = false;
        boolean result = instance.isStatus();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setStatus method, of class StatusLoginTransfer.
     */
    @org.junit.Test
    public void testSetStatus() {
        System.out.println("setStatus");
        boolean status = false;
        StatusLoginTransfer instance = new StatusLoginTransfer();
        instance.setStatus(status);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }
    
}
