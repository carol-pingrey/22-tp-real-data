<?php
require ('../inc/functions.php');

$dept_no = $_GET['dept_no'];

$department = getDepartment($dept_no);
$employees = getEmployeesByDept($dept_no);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=*, initial-scale=1.0">
  <title>Fiche</title>
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
  <h2>Employés du département <?= $department['dept_name'] ?></h2>
  <table class="table table-striped">
    <tr>
      <th>ID</th>
      <th>Prénom</th>
      <th>Nom</th>
      <th>Date d'embauche</th>
      <th>K3</th>
      <th>Lolirock</th>
    </tr>
    <?php foreach ($employees as $emp) { ?>
      <tr>
        <td><?= $emp['emp_no'] ?></td>
        <td><?= $emp['first_name'] ?></td>
        <td><?= $emp['last_name'] ?></td>
        <td><?= $emp['hire_date'] ?></td>
      </tr>
    <?php } ?>
  </table>
  <a href="liste_department.php" class="btn btn-secondary">Retour</a>
</div>
</body>
</html>