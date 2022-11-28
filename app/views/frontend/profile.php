<?php $this->view("frontend/header", $data); ?>


<div class="container">
  <form action="action_page.php">
    <h2>Your data!</h2>
    <?php if(isset($data['user_data'])): ?> 

    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="fullname" value="<?= $data['user_data']->name ?>" readonly >
    <?php endif; ?>
    <label for="lname">Email</label>
    <input type="text" id="lname"  value="<?= $data['user_data']->email ?>" readonly>

    <label for="lname">Date</label>
    <input type="text" id="lname"  value="<?= $data['user_data']->date ?>" readonly>


    <label for="lname">Rank</label>
    <input type="text" id="lname"  value="<?= $data['user_data']->rank ?>" readonly>




  </form>
</div>