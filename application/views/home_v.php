<?php
include 'header.php';
?>
<style type="text/css">
  .abcdef {
    opacity: 0.9;
  }
    .abcdef:hover {
    opacity: 0.9 !important;
    cursor:not-allowed;

  }
</style>

  <div class="slider" > <!-- div class slider start -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo base_url('assets/media/slider_img.png');?>" width="100%"height="500px">
          <div class="carousel-caption" class="rounded">
            <h3>DEALS</h3>
          </div><!-- carousel-caption closed -->
        </div> <!-- carousel-item active closed -->
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo base_url('assets/media/slider_img_1.png');?>" width="300px"height="500px">
          <div class="carousel-caption">
            <h3>BURGAR</h3>
          </div><!-- carouse-caption closed -->
        </div><!-- carousel-item closed -->
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo base_url('assets/media/slider_img_2.png');?>" width="100%"height="500px">
          <div class="carousel-caption">
            <h3>BURGAR</h3>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
      </a>
    </div>
 </div><!-- slider closed -->     
  <div class="index-deals">
    <div class="container">
     <div class="index-deals-heading"> DEALS </div>
    
     <div class="owl-carousel owl-theme">
       <?php
     foreach ($deal as  $value)
      {
        $id  = $value->item_id;
        if($this->session->userdata('validity') == NULL)
        {
      ?>
      <div class="item">
          <div class="deal-mb">
            <div class="deal-mb-pic">
             <img src="<?php echo base_url('assets/media/items/'.$value->itempic);?>" width="100px">
            </div>  <!-- deal-mn-pic -->
            <div class="deal-mb-detail">
             <a  class ="abcdef" href="#">
                <?php echo $value->iname;?>
                <span style="margin-right: 20px;float: right;"><b style="font-size: 20px;">Rs.<?php echo $value->price;?></b></span>
              </a>
            </div>  <!-- deal-mb-detail -->
          </div>  <!-- deal md -->
        </div>  <!-- item -->
      <?php
       }
       else
       {
       ?>

        <div class="item">
          <div class="deal-mb">
            <div class="deal-mb-pic">
             <img src="<?php echo base_url('assets/media/items/'.$value->itempic);?>" width="100px">
            </div>  <!-- deal-mn-pic -->
            <div class="deal-mb-detail">
             <a href="<?php echo site_url('Menu_c/add_order/'.$id);?>">
                <?php echo $value->iname;?>
                <span style="margin-right: 20px;float: right;"><b style="font-size: 20px;">Rs.<?php echo $value->price;?></b></span>
              </a>
            </div>  <!-- deal-mb-detail -->
          </div>  <!-- deal md -->
        </div>  <!-- item -->
         <?php
       }
       
      }
      ?>
      </div><!--owl-carousel owl-theme closed  -->
     
    </div>  <!-- container -->
  </div>  <!-- index deals -->
  <div class="index-big-menu">
    
    <div class="container">
      <div class="row">
        <?php
         foreach ($show_itemtype as $value)
         {
          $id = $value->item_type_id;
        ?>
        <div class="col-md-6">
           <div class="index-big-menu-item index-big-menu-item-1">
             <img src="<?php echo base_url('assets/media/banner/'.$value->banner);?>" >
             <p>
               <a href="<?php echo site_url('Menu_c/itemtype/'.$id);?>"><?php echo $value->name;?></a>
              </p>
            </div><!-- index-big-menu-item -->
        </div>
        <?php
         }
        ?>
      </div><!-- row closed -->
   </div><!-- container closed -->
  </div> <!-- index-big-menu closed -->
  <div class="parallax_main_page" ><!-- parallax_1 start -->
    <img src="<?php echo base_url('assets/media/maine_page.jpg'); ?>">
    <p><span>WELCOME</span> TO  <span>GALAXY FAST FOOD</span></p>
  </div><!-- parallax closed -->
  
  <div class="customer_view">
    <div class="container">
     <div class="row">
       
        <div class="heading_view">Customer View</div>
<style>
  .carousel-indicators .active{ background: #31708f; }
  .content{ margin-top:20px; }
  .adjust1{ float:left; width:100%; margin-bottom:0; }
  .adjust2{ margin:0; }
  .carousel-indicators li{ border :1px solid #ccc; }
  .carousel-control{ color:#31708f; width:5%; }
  .carousel-control:hover, .carousel-control:focus{ color:#31708f; }
  .carousel-control.left, .carousel-control.right { background-image: none; }
  .media-object{ margin:auto; margin-top:15%; }

  @media screen and (max-width: 768px)
  {
    .media-object{ margin-top:0; }
  }
</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<div class="container content">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">

      <?php
      $sr = 1;
      foreach ($show_feedback as $value)
      {
        $star = $value->stars;
        if($sr == 1)
        {
      ?>
      <div class="item active">
        <div class="row">
          <div class="col-xs-12">
            <div class="thumbnail-0 adjust1">
              <div class="col-md-2 col-sm-2 col-xs-12">
                <img src="<?php echo base_url('assets/media/accounts/'.$value->pic);?>" style="width: 0100px;height: 100px;border-radius: 50%;box-sizing: border-box;object-fit: auto; ">
              </div>
              <div class="col-md-10 col-sm-10 col-xs-12">
                <div class="caption">
                  <p class="text-info" style="text-align: left;">
                   <?php echo $value->review;?>
                  </p>
                  <blockquote class="adjust2">
                    <?php
                    if($value->stars >= 5)
                    {
                     for($i=1;$i<=$star;$i++)
                      {
                       echo '<span style="color:yellow;"><i class="fa fa-star" aria-hidden="true"></i><span>';
                      }
                    }
                    ?>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>  <!-- row -->
      </div>  <!-- item -->
      <?php
        } else {
      ?>
      <div class="item">
        <div class="row">
          <div class="col-xs-12">
            <div class="thumbnail-0 adjust1">
              <div class="col-md-2 col-sm-2 col-xs-12">
                <img src="<?php echo base_url('assets/media/accounts/'.$value->pic);?>" style="width: 0100px;height: 100px;border-radius: 50%;box-sizing: border-box;object-fit: auto; ">
              </div>
              <div class="col-md-10 col-sm-10 col-xs-12">
                <div class="caption">
                  <p class="text-info" style="text-align: left;">
                   <?php echo $value->review;?>
                  </p>
                  <blockquote class="adjust2">
                    <?php
                    if($value->stars >= 5)
                    {
                     for($i=1;$i<=$star;$i++)
                      {
                       echo '<span style="color:yellow;"><i class="fa fa-star" aria-hidden="true"></i><span>';
                      }
                    }
                    ?>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>  <!-- row -->
      </div>  <!-- item -->
      <?php
        }
      $sr++;
      }
      ?>
        

      </div>  <!-- carousel-inner-->
    
  <!-- Controls -->

  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

  </div>  <!-- #carousel-example-generic -->
</div>   <!-- container -->

  </div>  <!-- row -->
</div>  <!-- conatainer -->
</div>








  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13458.452069012492!2d74.5184609!3d32.5097708!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x739fe4bd63ea448d!2sGalaxy%20Filling%20Station!5e0!3m2!1sen!2s!4v1583915943381!5m2!1sen!2s" width="100%" height="350px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe>
  </div>
<?php
 include 'footer.php';
?>