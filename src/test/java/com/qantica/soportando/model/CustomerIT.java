/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.model;

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
public class CustomerIT {
    
    public CustomerIT() {
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
     * Test of getCid method, of class Customer.
     */
    @org.junit.Test
    public void testGetCid() {
        System.out.println("getCid");
        Customer instance = new Customer();
        Integer expResult = null;
        Integer result = instance.getCid();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setCid method, of class Customer.
     */
    @org.junit.Test
    public void testSetCid() {
        System.out.println("setCid");
        Integer cid = null;
        Customer instance = new Customer();
        instance.setCid(cid);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getCompany method, of class Customer.
     */
    @org.junit.Test
    public void testGetCompany() {
        System.out.println("getCompany");
        Customer instance = new Customer();
        Company expResult = null;
        Company result = instance.getCompany();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setCompany method, of class Customer.
     */
    @org.junit.Test
    public void testSetCompany() {
        System.out.println("setCompany");
        Company company = null;
        Customer instance = new Customer();
        instance.setCompany(company);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getUser method, of class Customer.
     */
    @org.junit.Test
    public void testGetUser() {
        System.out.println("getUser");
        Customer instance = new Customer();
        User expResult = null;
        User result = instance.getUser();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setUser method, of class Customer.
     */
    @org.junit.Test
    public void testSetUser() {
        System.out.println("setUser");
        User user = null;
        Customer instance = new Customer();
        instance.setUser(user);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getName method, of class Customer.
     */
    @org.junit.Test
    public void testGetName() {
        System.out.println("getName");
        Customer instance = new Customer();
        String expResult = "";
        String result = instance.getName();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setName method, of class Customer.
     */
    @org.junit.Test
    public void testSetName() {
        System.out.println("setName");
        String name = "";
        Customer instance = new Customer();
        instance.setName(name);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getTel method, of class Customer.
     */
    @org.junit.Test
    public void testGetTel() {
        System.out.println("getTel");
        Customer instance = new Customer();
        String expResult = "";
        String result = instance.getTel();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setTel method, of class Customer.
     */
    @org.junit.Test
    public void testSetTel() {
        System.out.println("setTel");
        String tel = "";
        Customer instance = new Customer();
        instance.setTel(tel);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }
    
}
