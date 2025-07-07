<?php
require ('../inc/functions.php');

$department = getListDepartment();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=*, initial-scale=1.0">
  <title>Liste</title>
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
        background-image: url('../assets/images/background1.png');
    }
  </style>
</head>
<body>
<div class="container mt-4">
  <h2>Liste des départements</h2>
  <table class="table table-striped">
    <tr>
      <th>Numéro</th>
      <th>Nom</th>
      <th>Manager</th>
      <th>Actions</th>
    </tr>
    <?php foreach ($department as $dep) { 
      $manager = getManagerEnCours($dep['dept_no']);
    ?>
      <tr>
        <td><?= $dep['dept_no'] ?></td>
        <td><?= $dep['dept_name'] ?></td>
        <td><?= $manager['first_name'] ?> <?= $manager['last_name'] ?></td>
        <td>
          <a href="liste_employees.php?dept_no=<?= $dep['dept_no'] ?>" class="btn btn-primary btn-sm">
            Voir liste des employés
          </a>
        </td>
      </tr>
    <?php } ?>
  </table>
</div>
</body>
</html>