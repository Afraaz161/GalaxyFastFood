<div class="footer_address">
  <div class="container">
    <div class="row">
     <div class="col-md-4">
      
       <p>Contact us</p>
       <?php
      foreach ($contact as  $value)
       {
      ?>
      <div style="padding-top: 10px;">
       <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
       <span style="color:white;margin-left: 10px;"><?php echo $value->address;?></span>
     </div>
     <div style="padding-top: 10px;">
      <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
      <span style="color:white; margin-left: 10px"><?php echo $value->phone_1;?></span>
     </div>
     
     <div style="padding-top: 10px;">
       <i class="fa fa-mobile fa-2x" aria-hidden="true"></i>
       <span style="color:white; margin-left: 10px"><?php echo $value->mobile_1;?></span>
     </div>
     <div style="padding-top: 10px;">
      <i class="fab fa-whatsapp fa-2x"></i>
       <span style="color:white; margin-left: 10px"><?php echo $value->whatsapp_1?></span>
     </div>
      
      <?php
       }
      ?>
      </div>
      <div class="col-md-4">
        <p>GALLARY</p>
        <div class="gallary">
          <?php
          foreach (@$footer_img as  $value)
          {
          ?>
           <img src="<?php echo base_url('assets/media/gallary/'.$value->pic);?>" >
          <?php
          }
          ?>
        </div>
      </div> 
      <div class="col-md-4">
       <p>MENU</p>
       
       <div class="footer-menu">
        <?php
         foreach ($footers_item as  $value)
          {
            $id = $value->item_type_id;
          ?>
          <a href="<?php echo site_url('Menu_c/itemtype/'.$id);?>" class="footer-menu-item">
              <img src="<?php echo base_url('assets/media/icons/'.$value->pic); ?>">
              <p><?php echo $value->name; ?></p>
          </a>
          
          <?php
          }
          ?>
       </div>  <!-- footer-menu -->
       
      </div> 
    </div>
  </div>
</div>     



<div class="clear"></div>

<div class="footer_designby">
  Design & Develop By AFRAAZ ANWAR , ALI Hussain and M.MAJID
</div>


 
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="<?php echo base_url('assets/owlCarousel2/owl.carousel.js') ?>"></script>
<script src="<?php echo base_url('assets/alert/alert-msg.js');?>"></script>

<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})



</script>
</body>
</html>





<!-- 




 <form method="post" action="#">
          <input  placeholder="Write Name" type="text" id="fname" name="fname">
          <input  placeholder="Write Number" type="number" id="number" name="number">
          <input  placeholder="Write Email" type="email" id="email" name="email">
          <input  placeholder="Write Message" type="text" id="1password" name="text">
          <input type="submit" class="btn btn-success" value="Submit">
        </form> -->