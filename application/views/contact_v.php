
<?php include_once 'header.php';?>

<div class="parallax_2">
    <img src="<?php echo base_url('assets/media/mini-banner.jpg'); ?>">
    <b><p><span>Galaxy</span> contact us</p></b> 
  </div>



<div class="container">
  <div class="row">
    <div class="col-md-6 no-gutters">
      <div class="map-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13458.452069012492!2d74.5184609!3d32.5097708!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x739fe4bd63ea448d!2sGalaxy%20Filling%20Station!5e0!3m2!1sen!2s!4v1583915943381!5m2!1sen!2s" width="100%" height="400" frameborder="0" style="border:0; padding:0px 0px 20px 0px;border-radius: 20px;" allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe>
  </div>
    </div>
    <div class="col-md-6">
       
       <div class="contact_aria">
        <h1>Contact us</h1>
          <?php
            foreach ($contact as  $value)
             {
            ?>
            <div>
             <i class="fa fa-map-marker fa-2x" style="color: #EA4335;" aria-hidden="true"></i>
             <span><?php echo $value->address;?></span>
           </div>
           <br>
           <div>
            <i class="fa fa-phone-square fa-2x" style="color: #619DE5;" aria-hidden="true"></i>
            <span><?php echo $value->phone_1;?></span>
           </div>
           <div>
             <i class="fa fa-mobile fa-2x" aria-hidden="true"></i>
             <span><?php echo $value->mobile_1;?></span>
           </div>
           <div>
            <i class="fab fa-whatsapp fa-2x" style="color: #188038;"></i>
             <span><?php echo $value->whatsapp_1?></span>
           </div>
          <?php
           }
          ?>  
       </div>
    </div>
  </div>
</div>





</body>
</html>
<?php include_once 'footer.php';?>













<!-- 










