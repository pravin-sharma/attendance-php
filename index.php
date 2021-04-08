<!-- Header -->
<?php 
    require_once('includes/header.php')
?>  
<!-- Body -->
    <h1 class='text-center'>Registration Form</h1>
    <form>
        <div class="form-group" method="GET">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" >
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" >
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="text" class="form-control" id="dob" placeholder='Select your Birth Date'>
        </div>
        <div class="form-group">
            <label for="speciality">Speciality</label>
            <select class="form-control" id="speciality">
                <option selected disabled value=''>Select</option>
                <option>Database Admin</option>
                <option>Software Developer</option>
                <option>Web Admin</option>
                <option>Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="contact">Phone Number</label>
            <input type="text" class="form-control" id="contact" aria-describedby="contactHelp">
            <small id="contactHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>

<!-- Footer -->
<?php 
    require_once('includes/footer.php')
?>