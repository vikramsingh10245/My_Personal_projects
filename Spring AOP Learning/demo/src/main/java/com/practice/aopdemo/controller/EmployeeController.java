
package com.practice.aopdemo.controller;

import java.util.List;


import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.practice.aopdemo.entity.Employee;
import com.practice.aopdemo.service.EmployeeService;

@RestController
@RequestMapping("/emp")
public class EmployeeController {
	
		@Autowired
		private EmployeeService employeeService;
		
		@GetMapping("/all")
	    public ResponseEntity<List<Employee>> fetchAllEmployees() {
	        List<Employee> employees = employeeService.getAllEmps();
	        return new ResponseEntity<>(employees, HttpStatus.OK);
	    }
		
		@PostMapping("/add")
		public ResponseEntity<?> addEmployee(@RequestBody Employee e)
		{
			return new ResponseEntity<Employee>(employeeService.addEmployee(e),HttpStatus.OK);
		}
		@DeleteMapping("/delete/{id}")
		public ResponseEntity<String> deleteEmp(@PathVariable Long id)
		{
			return new ResponseEntity<>(employeeService.deleteEmp(id),HttpStatus.OK);
		}
		@GetMapping("/get/{id}")
		public ResponseEntity<Employee> fetchEmployee(@PathVariable Long id){
			return new ResponseEntity<>(employeeService.fetchEmployee(id),HttpStatus.OK);
		}
}
