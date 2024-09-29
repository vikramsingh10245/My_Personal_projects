package com.practice.aopdemo.service;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.practice.aopdemo.entity.Employee;
import com.practice.aopdemo.repo.EmployeeRepo;

@Service
public class EmployeeService {

		@Autowired
	private EmployeeRepo employeeRepo;

		public List<Employee> getAllEmps() {
			
			return employeeRepo.findAll();
		}

		public Employee addEmployee(Employee e) {
			// TODO Auto-generated method stub
			return employeeRepo.save(e);
		}

		public String deleteEmp(Long id) {
			employeeRepo.deleteById(id);
			return "Deleted SUcessfully";
		}

	public Employee fetchEmployee(Long id) {
		return employeeRepo.findById(id).get(); // or you can return a default Employee instance if preferred
	}

}
