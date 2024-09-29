package com.practice.aopdemo.aop;

import org.aspectj.lang.JoinPoint;
import org.aspectj.lang.annotation.After;
import org.aspectj.lang.annotation.AfterReturning;
import org.aspectj.lang.annotation.AfterThrowing;
import org.aspectj.lang.annotation.Aspect;
import org.aspectj.lang.annotation.Before;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.stereotype.Component;

@Component
@Aspect
public class LoggingAspect {
	private static final Logger LOGGER=LoggerFactory.getLogger(LoggingAspect.class);
	
	// for writing this first come- retuen type, classname, .methodname, (args )
	//								*				*		.*				(..)
	@Before("execution(* com.practice.aopdemo.service.EmployeeService.getAllEmps(..)) || execution(* com.practice.aopdemo.service.EmployeeService.fetchEmployee(..))")
	public void logMethodCall(JoinPoint jp) {
		LOGGER.info("Method Called "+jp.getSignature().getName());
	}
	
	@After("execution(* com.practice.aopdemo.service.EmployeeService.getAllEmps(..)) || execution(* com.practice.aopdemo.service.EmployeeService.fetchEmployee(..))")
	public void logMethodExecuted(JoinPoint jp) {
		LOGGER.info("Method After Executed "+jp.getSignature().getName());
	}
	
	@AfterThrowing("execution(* com.practice.aopdemo.service.EmployeeService.getAllEmps(..)) || execution(* com.practice.aopdemo.service.EmployeeService.fetchEmployee(..))")
	public void logMethodCrash(JoinPoint jp) {
		LOGGER.info("Method Have Some Issues "+jp.getSignature().getName());
	}
	
	@AfterReturning("execution(* com.practice.aopdemo.service.EmployeeService.getAllEmps(..)) || execution(* com.practice.aopdemo.service.EmployeeService.fetchEmployee(..))")
	public void logMethodExecutedSucess(JoinPoint jp) {
		LOGGER.info("Method Have executed sucessfully "+jp.getSignature().getName());
	}
}
