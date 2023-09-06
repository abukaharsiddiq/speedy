<?php
session_start();
// print_r($_SESSION);
include 'header_login.php';
$loginUserId = $_SESSION['ptc_user_id'];

$customer_type = getCustomerInfo($loginUserId,'customer_type');
if($customer_type){
    $color_img = "style='width:100px;height:100px;border-color:green;'";
    $tbl_color = 'green';
}
else{
    $color_img = "style='width:100px;height:100px;border-color:gray;'";
    $tbl_color = '#ddd';
}





if($_SESSION['welcomeBox']){
 ?>
 <script type="text/javascript">
     function close_box(){
        $('.welcomeBox').hide();
     }
 </script>
<div class="container-fluid welcomeBox" onclick="close_box()" style="background: rgba(0,0,0,.5);position:fixed; width: 100%;z-index: 1; top: 0px;height: 100%;">
    <div  class="col-md-6 col-md-offset-3" style="background: green;border:1px solid #fff;margin-top: 15%;padding: 10px;border-radius: 10px;">
    <i class='fa fa-times' onclick="close_box()"></i>
        <center>
            
            <h2 style="color: white;">
                Welcome To <?php 
                if($_SESSION['ptc_user_type'] == 2){
                             echo 'product_admin'; 
                            }else if($_SESSION['ptc_user_type'] == 3){
                             echo 'support_admin'; 
                            }
                            else{
                             echo getCustomerInfo($loginUserId,'full_name'); 
                            }
                 ?>
            </h2>
        </center>
    </div>
</div>
<?php $_SESSION['welcomeBox'] = 0; } ?>



<div class="">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-title">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1 top-title">
           &nbsp;
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 admin-containarea">

            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="panel panel-info">
                   
                   <div class="col-md-12 padding">
                       <img src="img/profile_banner.jpg" class="img img-responsive" style="width: 100%;margin-bottom: 20px;">
                   </div>


<br>



<style type="text/css">
                  input.hidden {
    position: absolute;
    left: -9999px;
}

#profile-image1 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
    border:2px solid #03b1ce ;}
    .tital{ font-size:16px; font-weight:500;}
     .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}

     .table > tbody > tr > td{
        border-top: 1px solid #eee;
     }
     .color-green{
        color: green;
     }
</style>



<div class="container">
    <div class="row">
        
        
        
       <div class="col-md-8 ">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 > User Profile</h4></div>
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center">
                      <img alt="User Pic" src="<?php echo getPp($loginUserId); ?>" id="profile-image1" class="img-circle img-responsive" <?php 
                      echo $color_img; ?>
                      > 
                
           
              
   
                
                
                     
                     
                     </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 class="color-green">
             <?php echo getCustomerInfo($loginUserId,'user_name') ;?> </h4></span>
              <span><p>
                <?php 
                $customer_type = getCustomerInfo($loginUserId,'customer_type');
                                            if($customer_type){ echo "Reguler";} else{ echo 'Registered';} 
                 ?> Customer
              </p></span>            
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
           <table class="table table-responsive col-md-9 col-lg-9 col-sm-12 col-xs-12">
                                    <tbody>
                                        <tr style="color:<?php echo $tbl_color; ?>">
                                            <td>Registation Status:</td>
                                            <td><strong><?php if(getCustomerInfo($loginUserId,'customer_type')){ echo 'Registed ';}else{ echo 'Free';} ?></strong></td>
                                        </tr>
                                        <tr>
                                            <td>Customer User Id </td>
                                            <td><?php 
                                            if($_SESSION['ptc_user_type'] == 2){
                             echo 'product_admin'; 
                            }else if($_SESSION['ptc_user_type'] == 3){
                             echo 'support_admin'; 
                            }
                            else{
                             echo getCustomerInfo($loginUserId,'user_name'); 
                            }
                             ?></td>
                                        </tr>
                                        <tr>
                                            <td> Customer Reference</td>
                                            <td><?php echo getCustomerInfo(getCustomerInfo($loginUserId,'refared_by'),'user_name'); ?></td>
                                        </tr>

                                        <tr>
                                            <td> Customer Full Name</td>
                                            <td><?php echo getCustomerInfo($loginUserId,'full_name'); ?></td>
                                        </tr>
                                        <tr>
                                            <td> Email</td>
                                            <td><?php echo getCustomerInfo($loginUserId,'email'); ?></td>
                                        </tr>
                                        <tr>
                                            <td> Mobile</td>
                                            <td><?php echo getCustomerInfo($loginUserId,'mobile'); ?></td>
                                        </tr>
                                        
                                        <tr style="color:<?php echo $tbl_color; ?>">
                                            <td> Status </td>
                                            <td><?php 
                                            $customer_type = getCustomerInfo($loginUserId,'customer_type');
                                            if($customer_type){ echo "Reguler";} else{ echo 'Registered';} 
                                             //echo activeUserPlug(); ?></td>
                                        </tr>
                                        <tr>
                                            <td> Customer Position </td>
                                            <td><?php 
                                            $designation = getCustomerBonusAchive($loginUserId);
                                            if(!empty($designation)){
                                                echo $designation;
                                            }else{
                                                echo "-----";
                                            }
                                            ?></td>
                                        </tr>
                                        <tr><td> Registation Date</td>
                                            <td> <strong><?php echo (getCustomerInfo($loginUserId,'date1')); ?></strong></td>

                                        </tr> 







                                        <?php 
                                        // if(getCustomerInfo($loginUserId,'customer_id') == 1){ 
                                        if(1){ 
                                            ?>
                                        <tr style="color:green">
                                            <td> Total Customer </td>
                                            <td><?php echo mysql_num_rows(mysql_query("SELECT * FROM customer_information WHERE upline_id LIKE '%($loginUserId)%'")); ?></td>
                                        </tr>
                                        <tr style="color:green">
                                            <td> Total Registered Customer </td>
                                            <td><?php echo mysql_num_rows(mysql_query("SELECT * FROM customer_information WHERE upline_id LIKE '%($loginUserId)%' &&  customer_type = '0'")); ?></td>
                                        </tr>
                                        <tr style="color:green">
                                            <td> Total Reguler Customer </td>
                                            <td><?php echo mysql_num_rows(mysql_query("SELECT * FROM customer_information WHERE upline_id LIKE '%($loginUserId)%' && customer_type = '1'")); ?></td>
                                        </tr>
                                        <tr style="color:green">
                                            <td> Total Bonus Customer </td>
                                            <td><?php echo 0; ?></td>
                                        </tr>
                                        <?php } ?>









                                         <tr>
                                            <td colspan="2">
                                            
                                                <a href="updateProfile.aspx" class="btn btn-primary pull-right" style="background-color:green"> Update Your Profile </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>  

   </div>
</div>



                </div>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 right_menu padding">

                <?php include './right_menu.php'; ?>

            </div>

        </div>
    </div>

</div>

<?php include './footer.php'; ?>