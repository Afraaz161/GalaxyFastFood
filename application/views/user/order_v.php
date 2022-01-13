<?php
include_once 'header.php';
include_once 'menu.php';
?>
 <div class="content-wrapper"><!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> ORDER </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="Content"><!-- section Content Wrapper -->
      <div class="container-fluid"> <!-- container-fluid -->
      	<div class="row"><!-- row strts -->

          
      		<div class="col-md-12"> <!-- col-md-6 start -->
            <h3>Search</h3>
            <a href="<?php echo site_url("user/Order_c/history/");?>" class="btn 
             btn-success btn-2"style="border-radius: 50px;margin-top: 0px;"> History
            </a>
            
          </div> <!-- div class col-md-6 closed -->
      		
          <div class="col-md-8"> <!-- div class col-md-8 start -->
           <h3>CURRENT ORDER</h3>
           <center>    
             <table class="table table-hover">
               <thead class="bg-info">
                 <tr>
                   <th scope="col">sr</th>
                   <th scope="col">Image</th>
                   <th scope="col">Item</th>
                   <th scope="col">Date</th>
                   <th scope="col">Price</th>
                   <th scope="col">Action</th>
                 </tr>
               </thead>
               <tbody>  
                <?php
                if($incart != 0)
                {
                  $sr = 1;
                  foreach($incart as $incartitem)
                    {
                    $id = $incartitem->order_detail_id;
                  ?>
                   <tr class="table-active">
                     <th> <?php echo $sr;?> </th>
                     <td>
                       <div class="user_item"> <img  src="<?php echo base_url('assets/media/items/'.$incartitem->pic);?>" />
                        </div>
                     </td>
                      <td> <?php echo $incartitem->name;?> </td>
                     <td> <?php echo $incartitem->odaddon;?> </td>
                     <td>
                     
                     <p> <?php echo $incartitem->item_price;?></p>
                     
                      </td>
                     <td>
                        <a href="<?php echo site_url('user/Order_c/item_del/'.$id);?>" class="btn btn-outline-danger btn-sm"> Del 
                       </a>
                     </td>
                   </tr>
                  <?php
                  $sr++;
                  }
                }
                else
                {
                  echo '<tr>
                          <td colspan="5" style="background-color:red; color: white"> Cart in Empty </td>
                        </tr>';
                }
                ?>
               </tbody>
             </table>
           </center>
          </div> <!-- div class col-md-8 closed -->
          <div class="col-md-4"> <!-- col-md-4 starts -->
            <?php 
            if( isset($incart[0]->order_id))
            { 
            ?>
            <a href="<?php echo site_url('user/Order_c/confrim_order/'.$incart[0]->order_id);?>" class="btn 
             btn-success btn-2"style="border-radius: 50px;margin-top: 0px;"> Confirm-order
            </a>
            <a href="<?php echo site_url('user/Order_c/cancel_order/'.$incart[0]->order_id);?>" class="btn  btn-danger btn-2" style="margin-left: 20px;border-radius: 50px;margin-top: 0px;"> Cancel-Order
            </a>
            <?php
            } 
            ?>
          </div><!-- col-md-4 closed -->
        </div> <!-- div class row closed -->
      </div> <!-- div class container-fluid closed!-->
    </section> <!-- section closed!-->
  </div> <!-- div class content-wrapper!-->
<?php
include_once 'footer.php';
?>




















 



<!--  <div class="search-weekly">
              <select>
               <option value="Weekly">Weekly</option>
               <option value="Monday">Monday</option>
               <option value="Thuesday">Tuesday</option>
               <option value="Wensday">Wensday</option>
               <option value="Thusday">Thusday</option>
               <option value="Friday">Friday</option>
               <option value="Saturday">Saturday</option>
               <option value="Sunday">Sunday</option>
             </select>
           </div>
           <div class="search-month">
             <select>
               <option value="Month">Month</option>
               <option value="January">January</option>
               <option value="Febuary">Febuary</option>
               <option value="March">March</option>
               <option value="April">April</option>
               <option value="May">May</option>
               <option value="June">June</option>
               <option value="July">July</option>
               <option value="August">August</option>
               <option value="Spetember">Spetember</option>
               <option value="October">October</option>
               <option value="November">November</option>
               <option value="December">December</option>
             </select>
            </div>
            <div class="search-year">
             <select>
               <option value="2015">Year</option>
               <option value="2015">2015</option>
               <option value="2016">2016</option>
               <option value="2017">2017</option>
               <option value="2018">2018</option>
               <option value="2019">2019</option>
               <option value="2020">2020</option>
               <option value="2021">2021</option>
               <option value="2022">2022</option>
               <option value="2023">2023</option>
               <option value="2024">2024</option>
               <option value="2025">2025</option>
               <option value="2026">2026</option>
              </select>
            </div>
            <div class="search-submit">
              <input type="submit" value="submit" class="btn btn-success btn-sm"style="border-radius: 50px">
            </div>  --> 