/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.transfer;

import org.junit.runner.RunWith;
import org.junit.runners.Suite;

/**
 *
 * @author felipe
 */
@org.junit.runner.RunWith(org.junit.runners.Suite.class)
@org.junit.runners.Suite.SuiteClasses({TransferIT.class, StatusLoginTransferIT.class, CustomerTransferIT.class, CompanyTransferIT.class, UserTransferIT.class, LoginTransferIT.class})
public class TransferITSuite {

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
