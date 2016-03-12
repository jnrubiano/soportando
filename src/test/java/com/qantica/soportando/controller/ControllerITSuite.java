/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.controller;

import org.junit.runner.RunWith;
import org.junit.runners.Suite;

/**
 *
 * @author felipe
 */
@org.junit.runner.RunWith(org.junit.runners.Suite.class)
@org.junit.runners.Suite.SuiteClasses({CompanyResourceIT.class, UtilIT.class, HibernateUtilIT.class, UserResourceIT.class, CustomerResourceIT.class, ApplicationConfigIT.class, AllowAccessFilterIT.class, AuthResourceIT.class})
public class ControllerITSuite {

    @org.junit.BeforeClass
    public static void setUpClass() throws Exception {
    }

    @org.junit.AfterClass
    public static void tearDownClass() throws Exception {
    }

    @org.junit.Before
    public void setUp() throws Exception {
    }

    @org.junit.After
    public void tearDown() throws Exception {
    }
    
}
