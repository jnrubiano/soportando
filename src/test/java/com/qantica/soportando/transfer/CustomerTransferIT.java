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
public class CustomerTransferIT {
    
    public CustomerTransferIT() {
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
     * Test of getCid method, of class CustomerTransfer.
     */
    @org.junit.Test
    public void testGetCid() {
        System.out.println("getCid");
        CustomerTransfer instance = null;
        Integer expResult = null;
        Integer result = instance.getCid();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setCid method, of class CustomerTransfer.
     */
    @org.junit.Test
    public void testSetCid() {
        System.out.println("setCid");
        Integer cid = null;
        CustomerTransfer instance = null;
        instance.setCid(cid);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getName method, of class CustomerTransfer.
     */
    @org.junit.Test
    public void testGetName() {
        System.out.println("getName");
        CustomerTransfer instance = null;
        String expResult = "";
        String result = instance.getName();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setName method, of class CustomerTransfer.
     */
    @org.junit.Test
    public void testSetName() {
        System.out.println("setName");
        String name = "";
        CustomerTransfer instance = null;
        instance.setName(name);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getTel method, of class CustomerTransfer.
     */
    @org.junit.Test
    public void testGetTel() {
        System.out.println("getTel");
        CustomerTransfer instance = null;
        String expResult = "";
        String result = instance.getTel();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setTel method, of class CustomerTransfer.
     */
    @org.junit.Test
    public void testSetTel() {
        System.out.println("setTel");
        String tel = "";
        CustomerTransfer instance = null;
        instance.setTel(tel);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getUser method, of class CustomerTransfer.
     */
    @org.junit.Test
    public void testGetUser() {
        System.out.println("getUser");
        CustomerTransfer instance = null;
        UserTransfer expResult = null;
        UserTransfer result = instance.getUser();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setUser method, of class CustomerTransfer.
     */
    @org.junit.Test
    public void testSetUser() {
        System.out.println("setUser");
        UserTransfer user = null;
        CustomerTransfer instance = null;
        instance.setUser(user);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of getCompany method, of class CustomerTransfer.
     */
    @org.junit.Test
    public void testGetCompany() {
        System.out.println("getCompany");
        CustomerTransfer instance = null;
        CompanyTransfer expResult = null;
        CompanyTransfer result = instance.getCompany();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of setCompany method, of class CustomerTransfer.
     */
    @org.junit.Test
    public void testSetCompany() {
        System.out.println("setCompany");
        CompanyTransfer company = null;
        CustomerTransfer instance = null;
        instance.setCompany(company);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }
    
}
