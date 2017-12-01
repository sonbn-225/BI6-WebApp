<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form name="register" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputName">君の名は。</label>
            <input class="form-control" type="text" aria-describedby="nameHelp" name="name"  placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" type="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" >
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" type="password" name="rpassword" placeholder="Confirm password" >
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Phone number</label>
            <input class="form-control" type="text" name="phone" placeholder="Enter phone number" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input class="form-control" type="text" name="adress" placeholder="Enter address" >
          </div>
          <div class="form-group">
          <label class="inline" for="rememberme">
                    <input type="checkbox" value="forever" id="rememberme" name="approved">
                    Accept our privacy!
            </div>
          <a class="btn btn-primary btn-block button primary" type="submit">Register</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo base_url('login'); ?>">Had an account? Login now!</a>
          <a class="d-block small mt-3" href="<?php echo base_url(); ?>">Back to Homepage</a>
        </div>
      </div>
    </div>
  </div>