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
public class CompanyTransferIT {
    
    public CompanyTransferIT() {
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
     * Test of getCompanyId method, of class CompanyTransfer.
     */
    @org.junit.Test
    public void testGetCompanyId() {
        System.out.println("getCompanyId");
        CompanyTransfer instance = null;
        Integer expResult = null;
        Integer result = instance.getCompanyId();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setCompanyId method, of class CompanyTransfer.
     */
    @org.junit.Test
    public void testSetCompanyId() {
        System.out.println("setCompanyId");
        Integer companyId = null;
        CompanyTransfer instance = null;
        instance.setCompanyId(companyId);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getName method, of class CompanyTransfer.
     */
    @org.junit.Test
    public void testGetName() {
        System.out.println("getName");
        CompanyTransfer instance = null;
        String expResult = "";
        String result = instance.getName();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setName method, of class CompanyTransfer.
     */
    @org.junit.Test
    public void testSetName() {
        System.out.println("setName");
        String name = "";
        CompanyTransfer instance = null;
        instance.setName(name);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }
    
}
