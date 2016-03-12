/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.controller;

import javax.servlet.FilterChain;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
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
public class AllowAccessFilterIT {
    
    public AllowAccessFilterIT() {
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
     * Test of doFilterInternal method, of class AllowAccessFilter.
     */
    @org.junit.Test
    public void testDoFilterInternal() throws Exception {
        System.out.println("doFilterInternal");
        HttpServletRequest request = null;
        HttpServletResponse response = null;
        FilterChain filterChain = null;
        AllowAccessFilter instance = new AllowAccessFilter();
        instance.doFilterInternal(request, response, filterChain);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }
    
}
