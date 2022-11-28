<?php $this->view('frontend/header', $data) ?> 

<form method="post">


<div class="login-form">
    <h1>New User Signup!</h1>
    
<span style="font-size: 18px; color: red;">
    <?php check_error() ?>
</span>
    <div class="content">
      <div class="input-field">
      <input type="text" name="name" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>" placeholder="Name">
      </div>
      <div class="input-field">
      <input type="text" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" placeholder="Email">
      </div>
      <div class="input-field">
      <input type="password" name="password" placeholder="Password">
      </div>
      <div class="input-field">
      <input type="password" name="password2" placeholder="Password">
      </div>
    </div>
    <div class="action">
    <a href="signup">

    <button type="submit"> Register!</button>
    </div>
</div>
</form>

<br>
