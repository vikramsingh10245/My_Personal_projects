package com.fullstack.employee.Repository;

import org.springframework.data.jpa.repository.JpaRepository;

import com.fullstack.employee.entity.Employee;

public interface EmployeeRepository extends JpaRepository<Employee, Long> {

}
