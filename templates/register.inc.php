<?php  
  $errors = $user->errors;
?>
<div class="row">
  <div class="col-xs-12">
    <h1>Register</h1>
    <ol class="breadcrumb">
      <li><a href=".\">Home</a></li>
      <li  class="active">Register</li>
    </ol>
  </div>
</div>

  
    <form id="registerNewUser" action=".\?page=auth.store" method="POST" class="form horizontal">
    
      <h3 class="text-center">Register New User</h3>

      <div class="form-group <?php if($errors['username']): ?> has-error <?php endif; ?>">
        <label for="username" class="control-label">Username</label>
        <div>
          <input class="form-control" id="username" name="username" value="<?php echo $user->username; ?>">
          <div class="help-block"><?php echo $errors['username']; ?></div>
        </div>
      </div>

      <div class="form-group <?php if($errors['email']): ?> has-error <?php endif; ?>">
        <label for="email" class="control-label">user email</label>
        <div>
          <input class="form-control" id="email" name="email" placeholder="jon@example.com"
            value="<?php echo $user->email; ?>">
          <div class="help-block"><?php echo $errors['email']; ?></div>
        </div>
      </div>
        
      <div class="form-group <?php if($errors['password']): ?> has-error <?php endif; ?>">
        <label for="password" class="control-label">Password</label>
        <div>
          <input type="password" class="form-control" id="password" name="password">
          <div class="help-block"><?php echo $errors['password']; ?></div>
        </div>
      </div>

      <div class="form-group <?php if($errors['password2']): ?> has-error <?php endif; ?>">
        <label for="password2" class="control-label">Confirm password</label>
        <div>
          <input type="password" class="form-control" id="password2" name="password2">
          <div class="help-block"><?php echo $errors['password2']; ?></div>
        </div>
      </div>

      <div class="form-group">
        <div>
          <button class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Register</button>
        </div>
      </div>
    </form> 