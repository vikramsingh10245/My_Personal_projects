package com.fullstack.employee.Service;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.fullstack.employee.Repository.EmployeeRepository;
import com.fullstack.employee.entity.Employee;

@Service
public class EmployeeService {
	@Autowired
private EmployeeRepository empRepo;

	public Employee addEmployee(Employee employee) {
		// TODO Auto-generated method stub
		return empRepo.save(employee);
	}
	
	public List<Employee> getAllEmployees(){
		return empRepo.findAll();
	}

	public String deleteEmployee(Long id) {
		empRepo.deleteById(id);
		return "data deleted sucessfully";
		
	}

	public Optional<Employee> getEmployeeById(Long id) {
		
		return empRepo.findById(id);
	}

	public String updateEmployee(Long id, Employee updatedEmployee) {
        Optional<Employee> existingEmployeeOpt = empRepo.findById(id);
        
        if (existingEmployeeOpt.isPresent()) {
            // Retrieve the existing employee from the database
            Employee existingEmployee = existingEmployeeOpt.get();
            
            // Update fields with the new data
            existingEmployee.setName(updatedEmployee.getName());
            existingEmployee.setEmail(updatedEmployee.getEmail());
            existingEmployee.setPhone(updatedEmployee.getPhone());
            existingEmployee.setDepartment(updatedEmployee.getDepartment());
            
            // Save the updated employee back to the database
            empRepo.save(existingEmployee);
            
            return "Record Updated Successfully";
        } else {
            
            return "Employee Does not exist";
        }
    }
}
