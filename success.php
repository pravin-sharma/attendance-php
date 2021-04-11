<!-- Header -->
<?php 
    require_once('includes/header.php');
    require_once('db/conn.php');

    if(isset($_POST['submit'])){
      $fname = $_POST['firstname'];
      $lname = $_POST['lastname'];
      $dob = $_POST['dob'];
      $email = $_POST['email'];
      $contact = $_POST['contact'];
      $speciality = $_POST['speciality'];

      $isSuccess = $crud->insert($fname,$lname,$dob,$email,$contact,$speciality);

      if($isSuccess){
        echo '<h1 class="text-center text-success">Account Registration Successful</h1>';
      }else{
        echo '<h1 class="text-center text-danger">Account Registration Failed</h1>';
      }
    }
?>  
<!-- Body -->

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