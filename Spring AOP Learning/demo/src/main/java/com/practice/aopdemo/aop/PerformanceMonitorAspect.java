package com.practice.aopdemo.aop;

import org.aspectj.lang.ProceedingJoinPoint;
import org.aspectj.lang.annotation.Around;
import org.aspectj.lang.annotation.Aspect;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.stereotype.Component;

@Component
@Aspect
public class PerformanceMonitorAspect {
    private static final Logger LOGGER= LoggerFactory.getLogger(PerformanceMonitorAspect.class);
    @Around("execution(* com.practice.aopdemo.service.EmployeeService.getAllEmps(..))")
    public Object monitorTime(ProceedingJoinPoint jp) throws Throwable {
        Long start= System.currentTimeMillis();
         Object obj=   jp.proceed();
        Long end= System.currentTimeMillis();

        LOGGER.info("Time Taken: "+ (end-start)+"ms");

        return obj;

    }
}
