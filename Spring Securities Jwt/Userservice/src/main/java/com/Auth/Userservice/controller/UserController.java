package com.Auth.Userservice.controller;

import com.Auth.Userservice.domain.Role;
import com.Auth.Userservice.domain.User;
import com.Auth.Userservice.service.UserService;
import lombok.Data;
import lombok.RequiredArgsConstructor;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@Controller
@RequestMapping("/api")
@RequiredArgsConstructor
public class UserController {
    private final UserService userService;
    @GetMapping("/users")
    public ResponseEntity<List<User>> getUsers()
    {
       return new ResponseEntity<>(userService.getUsers(),HttpStatus.OK);
    }
    @GetMapping("/user/{username}")
    public ResponseEntity<User> getUser(@PathVariable String username){
        return new ResponseEntity<>(userService.getUser(username),HttpStatus.OK);
    }
    @PostMapping("/user/save")
    public ResponseEntity<User> saveUser(@RequestBody User user)
    {
        return new ResponseEntity<>(userService.saveUser(user),HttpStatus.CREATED);
    }
    @PostMapping("/role/save")
    public ResponseEntity<Role> saveRole(@RequestBody Role role)
    {
        return new ResponseEntity<>(userService.saveRole(role),HttpStatus.CREATED);
    }
    @PostMapping("/role/addtouser")
    public ResponseEntity<?> addRoleToUser(@RequestBody RoleToUserForm form)
    {
        userService.addRoleToUser(form.getUsername(),form.getRolename());
        return new ResponseEntity<>("Role added",HttpStatus.CREATED);
    }



}
@Data
class RoleToUserForm{
    private String username;
    private String rolename;

}