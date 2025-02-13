package com.fullstack.employee.Controller;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.fullstack.employee.Service.EmployeeService;
import com.fullstack.employee.entity.Employee;

@RestController
@RequestMapping("/api")
@CrossOrigin("*")
public class EmployeeController {

	@Autowired
	private EmployeeService empService;
	
	@PostMapping("/employee")
	public Employee addEmployee(@RequestBody Employee employee) {
		
		return empService.addEmployee(employee);
	}
	
	@GetMapping("/employees")
	public List<Employee> getAllEmployees(){
		return empService.getAllEmployees();
	}
	
	@GetMapping("/employee/{id}")
	public Optional<Employee> getEmployeeById(@PathVariable Long id) {
		return empService.getEmployeeById(id);
	}
	
	@DeleteMapping("/employee/{id}")
	public String deleteEmployee(@PathVariable Long id)
	{
		return empService.deleteEmployee(id);
	}
	@PutMapping("/employee/{id}")
	public ResponseEntity<String> updateEmployee(@PathVariable Long id ,@RequestBody Employee employee) {
		String result= empService.updateEmployee(id,employee);
		if ("Record Updated Successfully".equals(result)) {
            return ResponseEntity.ok(result);
        } else {
            return ResponseEntity.status(404).body(result); // Return 404 Not Found
        }
	}
}
