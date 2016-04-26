<?php //
//require_once("include/header.php");
    $this->load->view("template/header");
?>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


<div class="container">
             <div class="row">
                 <div class="col-md-6">
                    <h2>Existing User</h2>
                    <p>If you are already registered with<br>Polytechnic University of the Philippines | Journals, <br>You can now login below.</p>

   
   <?php echo form_open('Home/validate_credentials'); ?>
            <div class="form-group">
                <label for="inputEmail">Username</label>
                
                <?php echo form_input('username','','type="username" class="form-control" placeholder="Username"')?>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                
                <?php 
                $data = array(
              'type'  => 'password',
              'name'  => 'password',
              'id'    => 'password',
              'class' => 'form-control',
              'placeholder' => 'Password',
              'maxlength' => "30" 
                  );
              echo "".form_input($data);?>
             </div>
                <a href= "#">Forgotten your Username or Password?</a>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
                 <?php echo form_submit('submit','Login','class="btn btn-primary"  value="Login"')?>
            
</div>
        <?php echo form_close();?>
        <div class="divider"></div>

        <div class="row">
                 <div class="col-md-6">
                    <h2>New User</h2>
                    <p>New to Polytechnic University of the Philippines | Journal?<br>Registration is free and only takes a minute. Once registered<br>
                        you will gain access to a range of additional services from<br>
                        | Journal including free sample issues, flexible email <br> alerts and the option to save your favourite articles and searches</p>
                        <br>
                        <br>

                        <a href= "http://localhost:81/Ejournal/index.php/Home/register">Click here to register as new user with | Journal</a>
                </div>
        </div>
</div>
</div>

        <!--footer-->

           
     <!--Welvs Footer -->

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </body>

 <?php //
//require_once("include/header.php");
    $this->load->view("template/footer");
?>




