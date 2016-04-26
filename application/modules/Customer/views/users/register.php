<?php $this->load->view("template/header");?>

<div class="container">
             <div class="row">
                 <div class="col-md-12">
                    <img src= "http://localhost:81/Ejournal/assets/img/register.png" height ="55"/>
                    <br>

                    <br>
                    <p>If you are already registered with | Journal, please log in here.</p>
                    <p>Required information is marked in <strong>*</strong>.</p>
                  
<?php
 
  {

      echo form_open('Home/Register');
  }
 
?>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 form-control-label">Email</label>
    <div class="col-sm-10">
      <?php
      $data = array(
              'type'  => 'Email',
              'name'  => 'Email',
              'id'    => 'Email',
              'class' => 'form-control',
              'placeholder' => 'Email',
              'maxlength' => "30" 
          );
      echo "".form_input($data);
    
    ?>
    </div>
  </div>
   <div class="form-group row">
    <label for="inputUsername"  class="col-sm-2 form-control-label">Username</label>
    <div class="col-sm-10">
      <?php
   
        $data = array(

              'type'  => 'text',
              'name'  => 'username',
              'id'    => 'username',
              'class' => 'form-control',
              'placeholder' => 'Username',
              'maxlength' => "30" 
          );
      echo "".form_input($data);
    ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 form-control-label">Password</label>
    <div class="col-sm-10">
     <?php
      $data = array(
              'type'  => 'password',
              'name'  => 'password',
              'id'    => 'password',
              'class' => 'form-control',
              'placeholder' => 'Password',
              'maxlength' => "30" 
          );
      echo "".form_input($data);
    
    ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="confirmPassword3" class="col-sm-2 form-control-label">Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  

    <h2>Personal Information</h2>
    <br>

  <div class="form-group row">
    <label for="inputSurName" class="col-sm-2 form-control-label">Last Name</label>
    <div class="col-sm-10">
      <?php
      $data = array(
              'type'  => 'text',
              'name'  => 'LastName',
              'id'    => 'LastName',
              'class' => 'form-control',
              'placeholder' => 'Last Name',
              'maxlength' => "30" 
          );
      echo "".form_input($data);
    
    ?>
    </div>
  </div>

     <div class="form-group row">
    <label for="inputFirstname" class="col-sm-2 form-control-label">First Name</label>
    <div class="col-sm-10">
       <?php
      $data = array(
              'type'  => 'text',
              'name'  => 'FirstName',
              'id'    => 'FirstName',
              'class' => 'form-control',
              'placeholder' => 'First Name',
              'maxlength' => "30" 
          );
      echo "".form_input($data);
    
    ?>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputMiddlename" class="col-sm-2 form-control-label">Middle Name</label>
    <div class="col-sm-10">
       <?php
      $data = array(
              'type'  => 'text',
              'name'  => 'MiddleName',
              'id'    => 'MiddleName',
              'class' => 'form-control',
              'placeholder' => 'Middle Name',
              'maxlength' => "30" 
          );
      echo "".form_input($data);
    
    ?>
    </div>
  </div>
   

       <div class="form-group row">
    <label for="inputAddress" class="col-sm-2 form-control-label">Address</label>
    <div class="col-sm-10">
       <?php
      $data = array(
              'type'  => 'text',
              'name'  => 'Address',
              'id'    => 'Address',
              'class' => 'form-control',
              'placeholder' => 'Address',
              'maxlength' => "30" 
          );
      echo "".form_input($data);
    
    ?>
    </div>
  </div>

     <div class="form-group row">
    <label for="inputCity" class="col-sm-2 form-control-label">School</label>
    <div class="col-sm-10">
      <?php
      $data = array(
              'type'  => 'text',
              'name'  => 'School',
              'id'    => 'School',
              'class' => 'form-control',
              'placeholder' => 'School',
              'maxlength' => "30" 
          );
      echo "".form_input($data);
    
    ?>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputTelephone" class="col-sm-2 form-control-label">Contact Number</label>
    <div class="col-sm-10">
       <?php
      $data = array(
              'type'  => 'text',
              'name'  => 'ContactNumber',
              'id'    => 'ContactNumber',
              'class' => 'form-control',
              'placeholder' => 'Contact Number',
              'maxlength' => "30" 
          );
      echo "".form_input($data);
    
    ?>
    </div>
  </div>

  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
     
      <?php
         echo form_submit('submit', 'Submit', 'class="btn btn-default"');
         echo form_close(); 
      ?>
    </div>
  </div>
</form>


  
  <div>
  </div>



    </div>
    </div>
    </div>

               


        <!--footer-->

           
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br>



    </body>
</html>
<?php $this->load->view("template/footer");?>
