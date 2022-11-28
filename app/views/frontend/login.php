<?php $this->view("frontend/header", $data); ?>


<form method="post">


<div class="login-form">
    <h1>Login</h1>
    
<span style="font-size: 18px; color: red;">
    <?php check_error() ?>
</span>
    <div class="content">
      <div class="input-field">
        <input type="email" name="email" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>" placeholder="Email" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>" placeholder="Password" autocomplete="new-password">
      </div>
    </div>
    <div class="action">
    <a href="signup">

    <button type="submit"> Login</button>
    </div>
</div>
</form>

<br>
