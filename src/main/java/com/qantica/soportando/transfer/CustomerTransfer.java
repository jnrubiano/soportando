/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.qantica.soportando.transfer;

import com.qantica.soportando.model.Customer;

/**
 *
 * @author felipe
 */
public class CustomerTransfer extends Transfer {

    private Integer cid;
    private String name;
    private String tel;
    private UserTransfer user;
    private CompanyTransfer company;

    public CustomerTransfer(Customer c) {
        cid = c.getCid();
        name = c.getName();
        tel = c.getTel();
        user = new UserTransfer(c.getUser());
        company = new CompanyTransfer(c.getCompany());
    }

    public Integer getCid() {
        return cid;
    }

    public void setCid(Integer cid) {
        this.cid = cid;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getTel() {
        return tel;
    }

    public void setTel(String tel) {
        this.tel = tel;
    }

    public UserTransfer getUser() {
        return user;
    }

    public void setUser(UserTransfer user) {
        this.user = user;
    }

    public CompanyTransfer getCompany() {
        return company;
    }

    public void setCompany(CompanyTransfer company) {
        this.company = company;
    }

}
