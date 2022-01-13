<?php
include_once 'header.php';
include_once 'menu.php';
?>
<div class="content-wrapper">   <!-- Content Wrapper. Contains page content -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="offset-5 col-sm-6">
          <h1 class="m-0 text-dark"> Feedback </h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>   <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid"><!--  container-fluid start -->
      <div class="row"><!-- row start -->
        <div class="col-md-6"><!-- col-md-6 start -->
          <div class="feedback-name"><!-- feedback-name -->
            <form method="post" action="<?php echo site_url('user/Feedback_c/insert_feedback');?>">
              <div class="form-group">
                <label for="exampleTextarea"><h3>Review</h3></label>
                <textarea class="form-control" id="exampleTextarea" rows="4"
                                name="review"required=
                                ""></textarea>
              </div>
              <span>Rate it</span>
              <fieldset class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                   <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="1" checked="">
                   <i class="fa fa-star" aria-hidden="true"></i>
                  </label>
                </div>    
                <div class="form-check">
                  <label class="form-check-label">
                   <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="2" checked="">
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                  </label>
                </div>  
                <div class="form-check">
                  <label class="form-check-label">
                   <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option3" checked="">
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                   <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="4" checked="">
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                   <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="5" checked="">
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                  </label>
                </div>
                <input type="submit" name="" class="btn btn-success"value="submit">
              </fieldset>
            </form>
          </div> <!-- div class feedback name!--->
        </div> <!-- col-md-6 closed -->
        <div class="col-md-6"><!-- col-md-6 start -->
          <?php
           
            foreach ($feedback_show as  $value) 
            {
              $id = $value->feedback_id;
              $star=$value->stars;
             // $len = count($star);
              $stars = 0;
              
          ?>
         
            <div class="feedback-paragraph"> <!-- feedback-paragraph start -->
             
             <p style="text-align: center;"> <?php echo $value->review;?></p>
              <div class="row"><!-- row start -->
                <div class="col-md-12"><!-- col-md-6 start -->
                  <h5 style="padding-left: 10px;padding-top:10px;text-align: center; "> <?php echo $value->add_on;?></h5>
                </div><!-- col-md-6 closed -->
                <div class="col-md-12">
                  <div class="feedback-star" style="text-align: center;"><!-- feedback-star starts -->
                    
                   <?php 
                   for($i=1;$i<=$star;$i++)
              {
               
              echo   '<span style="color:red"><i class="fa fa-star" aria-hidden="true"></i><span>';
              }
              ?>
                    
                       
                  </div><!-- feedback-star closed -->
                </div> <!-- div class col-md-6 closed!-->
              </div> <!-- div claass row closed -->
              <a href="<?php echo site_url('user/Feedback_c/delete/'.$id);?>" class
                ="btn btn-danger btn-sm" style="float:right;display: inline-block;">Delete</a>
              <a href="<?php echo site_url('user/Feedback_c/change_feedback/'.$id);?>" class
                ="btn btn-success btn-sm" style="float:right;margin-right: 10px;padding-right: 20px;">Change</a>
              
            </div> <!-- div class feedback-paragraph closed -->
           
           
          
          <?php
         
          }
          ?>
        </div><!-- col-md-6 closed -->
      </div><!-- row closed top -->
    </div><!-- container-fluid top closed -->
  </section> <!-- section class content closed -->
</div><!-- div class content-wrapper closed -->     
<?php include_once 'footer.php';?>