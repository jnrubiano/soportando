/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.model;

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
public class CompanyIT {
    
    public CompanyIT() {
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
     * Test of getCompanyId method, of class Company.
     */
    @org.junit.Test
    public void testGetCompanyId() {
        System.out.println("getCompanyId");
        Company instance = new Company();
        Integer expResult = null;
        Integer result = instance.getCompanyId();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setCompanyId method, of class Company.
     */
    @org.junit.Test
    public void testSetCompanyId() {
        System.out.println("setCompanyId");
        Integer companyId = null;
        Company instance = new Company();
        instance.setCompanyId(companyId);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getName method, of class Company.
     */
    @org.junit.Test
    public void testGetName() {
        System.out.println("getName");
        Company instance = new Company();
        String expResult = "";
        String result = instance.getName();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setName method, of class Company.
     */
    @org.junit.Test
    public void testSetName() {
        System.out.println("setName");
        String name = "";
        Company instance = new Company();
        instance.setName(name);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getCustomers method, of class Company.
     */
    @org.junit.Test
    public void testGetCustomers() {
        System.out.println("getCustomers");
        Company instance = new Company();
        Set expResult = null;
        Set result = instance.getCustomers();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setCustomers method, of class Company.
     */
    @org.junit.Test
    public void testSetCustomers() {
        System.out.println("setCustomers");
        Set customers = null;
        Company instance = new Company();
        instance.setCustomers(customers);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }
    
}
