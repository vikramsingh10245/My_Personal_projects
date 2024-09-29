package com.Auth.Userservice.service;

import com.Auth.Userservice.domain.Role;
import com.Auth.Userservice.domain.User;

import java.util.List;

public interface UserService {
    User saveUser(User user);
    Role saveRole(Role role);
    void addRoleToUser(String username, String role);
    User getUser(String username);
    List<User> getUsers();
}
