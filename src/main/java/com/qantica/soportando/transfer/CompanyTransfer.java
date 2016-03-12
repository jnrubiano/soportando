/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.transfer;

import com.qantica.soportando.model.Company;

/**
 *
 * @author felipe
 */
public class CompanyTransfer extends Transfer {

    private Integer companyId;
    private String name;

    public CompanyTransfer(Company c) {
        this.companyId = c.getCompanyId();
        this.name = c.getName();
    }

    public Integer getCompanyId() {
        return companyId;
    }

    public void setCompanyId(Integer companyId) {
        this.companyId = companyId;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

}
