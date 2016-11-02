

<script> 
$(document).ready(function(){
$(".flip").click(function(){
$(".panel").toggle();
});
});
</script>
<style type="text/css"> 
div.panel,p.flip
{
    line-height: 30px;
    margin: auto;
    font-size: 16px;
    padding: 5px;
    text-align: center;
    /* background: #555; */
    border: solid 1px #46b0d6;
    color: #333;
    border-radius: 3px;
    width: 60%;
        margin-bottom: 14px;
}
div.panel
{
height:560px;
    width: 64%;
display:none;
}
p.flip
{
      margin-top: 10px;
cursor:pointer;
}
.form_width{width: 80%;}
</style>




<?php  
 $var =  $_POST['search'] ;
$str = strtoupper($var);

$conn =@mysql_connect("localhost","root","") or die("MySQL conncetion error");

mysql_select_db("a2zgloba_adba",$conn); 




$query_for_counter = "SELECT `counter` FROM `tbl_single_product_hit_counter` where product_id = $str";
   $counter_val= mysql_query($query_for_counter);
    $row = mysql_fetch_row($counter_val);
    $counter= $row[0];
    $counter++;
       // $counter;
      //  echo $counter;
   // echo "UPDATE `tbl_product_hit_counter` set `counter`='$counter' where id = $id";
        $query_count = "UPDATE `tbl_single_product_hit_counter` set `counter`='$counter' where product_id = $str";
        mysql_query($query_count);










   $sql= mysql_query("select * from tbl_product_a2z where id =$str");
	



 if(mysql_num_rows($sql) > 0)  
 {  
    
      while($row = mysql_fetch_array($sql))  
      {  
   $output= '';
           $output .= '<div class="modal-content">
                      <div class="row">  


<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">'.$row["product_name"].'</h4>
        </div>




                      <div class="col-sm-6">




          
          <div class="img_holder1 effect_custom "><img class="img-responsive portfolio-item" src="AdminT/'.$row["image_url"].'" alt="">




        </div>
   






                       </div>
                      <div class="col-sm-6">
 <div class="modal-body product_display_padd_top">
        

           
 <p><span class="label_modal">Availability:</span>In Stock</p>
    <p><span class="label_modal">Model Number:</span>'.$row["model_number"].'</p>
 <p><span class="label_modal">Description:</span>'.$row["description"].'</p>



<p><span class="label_modal">PDF:</span><a href="AdminT/all_download_file/pdf_server.php?file='.$row['pdf_file_path'].'">Click here to download</a></p>

        </div>
       
   </div>

         </div>
          <div class="modal-footer">
           <p class="flip">Please Write Us</p>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        <div class="row">


<div class="panel">
<form class="form-horizontal "  action="" name="login-form"  method="post" enctype="multipart/form-data"  >
   <div class="col-sm-12 form_width">
      <h4 class="widget-title">Have questions?</h4>
      <input id="product_id" name="product_id" type="hidden" value="'.$row['id'].'" class="form-control input-md" >
      <div class="form-group a   animated  fadeInUp">
         <label class="col-sm-4 control-label pad_bottom" for="textinput">Name:
         </label>
         <div class="col-sm-8 pad_bottom">
            <input id="name_of_cus" name="name_of_cus" type="text" placeholder="Name:" class="form-control input-md" >
         </div>
      </div>
      <div class="form-group a animated  fadeInUp">
         <label class="col-sm-4 control-label pad_bottom" for="textinput">Address:</label>
         <div class="col-sm-8 pad_bottom">
            <input id="address_here" name="address_here" type="text" placeholder="Address:" class="form-control input-md" >
         </div>
      </div>
      <div class="form-group a animated  fadeInUp">
         <label class="col-sm-4 control-label pad_bottom" for="textinput">Email ID:</label>
         <div class="col-sm-8 pad_bottom">
            <input id="emailId" name="emailId" type="text" placeholder="Email ID:" class="form-control input-md" >
         </div>
      </div>
      <div class="form-group a animated  fadeInUp">
         <label class="col-sm-4 control-label pad_bottom" for="textinput">Phone:</label>
         <div class="col-sm-8 pad_bottom">
            <input id="phoneNum" name="phoneNum" type="text" placeholder="Phone:" class="form-control input-md">
         </div>
      </div>
      <div class="form-group a animated  fadeInUp">
         <label class="col-sm-4 control-label pad_bottom" for="textinput">Subject:</label>
         <div class="col-sm-8 pad_bottom">
            <input id="subject_for_message" name="subject_for_message" type="text" placeholder="Subject:" class="form-control input-md">
         </div>
      </div>
      <div class="form-group c animated  fadeInUp">
         <label class="col-sm-4 control-label pad_bottom" for="textarea"></label>
         <div class="col-sm-8 pad_bottom">
            <textarea class="form-control" id="reason_description" name="reason_description" rows="4"></textarea>
         </div>
      </div>
      <div class="col-sm-offset-4 col-sm-8 b animated  fadeInUp">
         <button type="submit" name="submit_form_for_new_insert" class="btn btn-default btn_style">Submit</button>
      </div>
      <div class="clearfix"></div>
   </div>
</form>    
</div>

        </div>
      </div>    
';  
  echo $output;  
	  
      }  
    
	 
 }  
 else  
 {  
      echo 'Data Not Found';  
 }



 ?>  