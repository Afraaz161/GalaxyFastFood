<?php
include_once 'header.php';?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> <!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Registration Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



  <style type="text/css">
     @import url('https://fonts.googleapis.com/css?family=Numans');
  
    body
    {
      background-color: #60A3BC;
      
    }
    p {
      color:red;
    }
    .form-group input {
      width: 300px;
      border-radius: 10px;
    }
 </style>
</head>
<body>

   <!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
  <div class="container-fluaid" style="margin-top: 0%;">
   <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-md-4">
  
     <h1> Sign Up</h1>
     <br/>

     <div class="col-sm-12">
     <br/>
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
      
          <form method="post" action="<?php echo site_url('Signup_c/add_do');?>" enctype="multipart/form-data">

            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text"name="user_name" class="form-control" id="name"placeholder="Enter user name" value="<?php echo set_value('user_name');?>">
               <p><?php echo form_error('user_name');?></p> 
            </div>
            <div class="form-group">
              <label for="text">Phone:</label>
              <input type="text"name="user_phone" class="form-control" id="email"placeholder="Enter user phone number" value="<?php echo set_value('user_phone');?>">
               <p><?php echo form_error('user_phone');?></p> 
            </div>
             <div class="form-group">
              <label for="pic">Pic:</label>
               <input type="file" name="pic"  value="<?php echo set_value('pic');?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email"name="user_email" class="form-control" id="email" placeholder="Enter user email" value="<?php echo set_value('user_email');?>">
               <p><?php echo form_error('user_email');?></p> 
            </div>

            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password"name="user_password" class="form-control" id="pwd" placeholder="Enter user  password" value="<?php echo set_value('user_password');?>">
               <p><?php echo form_error('user_password');?></p> 
            </div>

            <div class="form-group">
              <label for="pwd">Confirm Password:</label>
              <input type="password"name="user_con-password" class="form-control" id="pwd" placeholder="Re-enter  password" value="<?php echo set_value('user_con-password');?>">
               <p><?php echo form_error('user_con-password');?></p> 
            </div>
            <div class="form-group">
              <label for="address">Address:</label>
              <input type="text"name="user_address" class="form-control" id="address" placeholder="Enter user address" value="<?php echo set_value('user_address');?>">
               <p><?php echo form_error('user_address');?></p> 
            </div>
            <button type="submit" class="btn btn-default btn-lg">Submit</button>
          </form>
          <br/>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- This design is created by manoj chauhan  -->



</body>
</html>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
 include_once 'footer.php';
?>