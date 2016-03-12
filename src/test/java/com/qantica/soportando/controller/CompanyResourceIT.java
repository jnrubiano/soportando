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
public class CompanyResourceIT {
    
    public CompanyResourceIT() {
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
     * Test of getJson method, of class CompanyResource.
     */
    @org.junit.Test
    public void testGetJson() {
        System.out.println("getJson");
        CompanyResource instance = new CompanyResource();
        String expResult = "";
        String result = instance.getJson();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of putJson method, of class CompanyResource.
     */
    @org.junit.Test
    public void testPutJson() {
        System.out.println("putJson");
        String content = "";
        CompanyResource instance = new CompanyResource();
        instance.putJson(content);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }
    
}
