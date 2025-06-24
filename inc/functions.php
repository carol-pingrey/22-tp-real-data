<?php
require ('connection.php');

function getListDepartment() {
    $select = "SELECT * FROM departments";
    $query = mysqli_query(dbconnect(), $select);
    $result = array();
    while ($fetch = mysqli_fetch_assoc($query)) {
        $result[] = $fetch;
    }
    return $result;
}

function getManagerEnCours($dept_no) {
    $select = "SELECT employees.first_name, employees.last_name 
               FROM employees
               JOIN dept_manager ON employees.emp_no = dept_manager.emp_no
               WHERE dept_manager.dept_no = '$dept_no' 
               AND dept_manager.to_date = '9999-01-01'";
    $query = mysqli_query(dbconnect(), $select);
    return mysqli_fetch_assoc($query);
}

function getDepartment($dept_no) {
    $select = "SELECT * FROM departments WHERE dept_no = '$dept_no'";
    $query = mysqli_query(dbconnect(), $select);
    return mysqli_fetch_assoc($query);
}

function getEmployeesByDept($dept_no) {
    $select = "SELECT employees.* FROM employees
               JOIN dept_emp ON employees.emp_no = dept_emp.emp_no
               WHERE dept_emp.dept_no = '$dept_no'
               AND dept_emp.to_date = '9999-01-01'";
    $query = mysqli_query(dbconnect(), $select);
    $result = array();
    while ($fetch = mysqli_fetch_assoc($query)) {
        $result[] = $fetch;
    }
    return $result;
}

function getEmployeesByNo($emp_no) {
    $select = "SELECT * FROM employees WHERE emp_no = '$emp_no'";
    $query = mysqli_query(dbconnect(), $select);
    return mysqli_fetch_assoc($query);
}
?>