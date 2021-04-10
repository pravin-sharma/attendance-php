<!-- Header -->
<?php 
    require_once('includes/header.php')
?>  
<!-- Body -->
<h1 class="text-center text-success">Account Registration Successful</h1>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text"><?php echo $_POST['firstname'] ?></p>
    <p class="card-text"><?php echo $_POST['lastname'] ?></p>
    <p class="card-text"><?php echo $_POST['dob'] ?></p>
    <p class="card-text"><?php echo $_POST['speciality'] ?></p>
    <p class="card-text"><?php echo $_POST['email'] ?></p>
    <p class="card-text"><?php echo $_POST['contact'] ?></p>
  </div>
</div>

<!-- Footer -->
<?php 
    require_once('includes/footer.php')
?>