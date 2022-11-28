<?php $this->view("admin/header", $data); ?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?=ASSETS . ADMIN?>img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?= $data['user_data']->name ?></h5>
              	  	
                  <li class="mt">
                      <a class="active" href="<?=ROOT?>admin/race">
                          <i class="fa fa-dashboard"></i>
                          <span>Race</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      
           <!--main content start-->
           <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Responsive Table Examples</h3>

		  	<div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
						  <h4><i class="fa fa-angle-right"></i> No More Table</h4>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                  <th>ID</th>
                                      <th>Full Name</th>
                                      <th>Url Address</th>

                                      <th>Distance</th>
                                      <th>Time</th>
                                      <th>Action</th>

          
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <?php if(isset($races) && is_array($races)): ?>
                                    <?php foreach($races as $race): ?>
                                  <tr>
                                  
                                  <td data-title="Code"><?=$race->id?></td>

                                      <td data-title="Code"><?=$race->fullname?></td>
                                      <td data-title="Code"><?=$race->url_address?></td>
                                      <td data-title="Company"><?=$race->distance?></td>
                                      <td data-title="Company"><?=$race->time?></td>
                                      <td data-title="Company"><a href="<?=ROOT?>admin/race_details/<?=$race->id?>">Edit</a></td>

                                  </tr>
                                  <?php endforeach; ?>
                                        <?php endif; ?>
                                
                                
                                  </tbody>
                              </table>

                              <?php
                              
                              $con = mysqli_connect("localhost", "root", "", "race");

                                if(isset($_POST['update'])){

                                    $id = $_POST['id'];
                                    $fullname = $_POST['fullname'];
                                    $distance = $_POST['distance'];
                                    $time = $_POST['time'];

                                    $query = "UPDATE race SET fullname='$fullname', distance='$distance', time='$time' WHERE id='$id' ";

                                    $query_run = mysqli_query($con, $query);



                                }
                              
                              
                              ?>

                              <form action="<?php $_PHP_SELF ?>" method="POST">
                                    <h2>Enter into race!</h2>
                                    <span style="font-size: 18px; color: red;">
                                    <?php check_error() ?>
                                    </span>

                                    <label for="fname">ID</label>
                                    <input type="text" id="fname" name="id"  placeholder="Your name..">

                                    <label for="fname">Full Name</label>
                                    <input type="text" id="fname" name="fullname"  placeholder="Your name..">


                                    <label for="lname">Distance</label>
                                    <select name="distance">
                                        <option value="long">Long</option>
                                        <option value="medium">Medium</option>
                                    </select>

                                    <label for="lname">Time</label>
                                    <input type="text" id="lname" name="time" placeholder="Your Time">


                                    <button type="submit" name="update" >Send</button>

                                </form>
                          </section>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section>

      <!--main content end-->
   
      <!--footer end-->
  </section>


  <?php $this->view("admin/footer", $data); ?>
