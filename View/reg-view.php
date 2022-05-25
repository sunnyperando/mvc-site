<div class="container">
        <h1><?php echo $title; ?></h1>
        <a href="javascript:history.go(-1)" class="btn btn-dark">Go Back</a> </br>
        <form action="" method="POST">
            <div class="row">
                <div class="col-sm-4">
                    <div class="mb-3 mt-3">
                        <label for="username" class="form-label">Username: <span class="error">* <?php echo $errors['username'] ?? '' ?></span></label>
                        <input type="text"  class="form-control" id="username" placeholder="Enter Username" name="username"
                        value="<?php echo $username;?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="password" class="form-label">Password:  <span class="error">* <?php echo $errors['password'] ?? '' ?></span></label>
                        <input type="password" id="myInput" class="form-control" id="username" placeholder="Enter Password" name="password"
                        value="<?php echo $password;?>">
                        <input type="checkbox" onclick="myFunction()" class="form-label"> Show Password
                    </div>
                        <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                </div>
                <div class="col-sm-4">
                <?php if($login == false) { ?>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email: <span class="error">* <?php echo $errors['email'] ?? '' ?></span></label>
                        <input type="email"  class="form-control" id="email" placeholder="Enter Email" name="email"
                        value="<?php echo $email;?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Birthday: <span class="error">* <?php echo $errors['bdate'] ?? '' ?></span></label>
                        <input type="date"  class="form-control" id="bdate" placeholder="Enter Birthday" name="bdate"
                        value="<?php echo $bdate;?>">
                    </div>
                <?php } ?>        
                </div>
                <div class="col-sm-4">
                    <div class="mb-3 mt-3">
                        
                    </div>
                    <div class="mb-3 mt-3">
                    </div>
                </div>
            </div>
        </form>
      </div>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>