package com.jwtauth.controller;

import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("/welcome")
public class HomeController {
    @GetMapping("/home")
    public ResponseEntity<String> getHome() {

        return ResponseEntity.status(HttpStatus.OK).body("Welcome Home Jwt Token");

    }
}
