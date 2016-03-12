/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.controller;

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
public class CustomerResourceIT {
    
    public CustomerResourceIT() {
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
     * Test of getCustomers method, of class CustomerResource.
     */
    @org.junit.Test
    public void testGetCustomers() {
        System.out.println("getCustomers");
        CustomerResource instance = new CustomerResource();
        String expResult = "";
        String result = instance.getCustomers();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of putJson method, of class CustomerResource.
     */
    @org.junit.Test
    public void testPutJson() {
        System.out.println("putJson");
        String content = "";
        CustomerResource instance = new CustomerResource();
        instance.putJson(content);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }
    
}
