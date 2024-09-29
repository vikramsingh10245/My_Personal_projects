package com.practice.SpringSecEx.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class ContentController {
    @GetMapping("/hhh")
    public String handelWelcome(){
        return "Welcome home";
    }
    @GetMapping("/admin/home")
    public String handelAdminHome(){
        return "Welcome ADMIN home";
    }
    @GetMapping("/user/home")
    public String handelUserHome(){
        return "Welcome USER home";
    }
}
