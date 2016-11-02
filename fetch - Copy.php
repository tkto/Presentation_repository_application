

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

mysql_select_db("flip_book",$conn); 





   $sql= mysql_query("SELECT * FROM `tbl_images` WHERE `slide_no`  =$str");
  



 ?>  

<div class="modal-content">
                      <div class="row">  


<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Flik</h4>
        </div>

 </div>
                    
 <div class="modal-body product_display_padd_top">
        
    <?php
              while($row = mysql_fetch_array($sql))  
      {  
             
          ?> 
<div id="wowslider-container1">
<div class="ws_images">
            <ul>
        <li><img src="<?php echo $row['image_url']?>" /></li>
  </ul>

 </div>

 </div>
  <div class="ws_bullets"><div>
    <a href="#" title="1"><span><img src="data1/tooltips/1.jpg" alt="1"/>1</span></a>
    <a href="#" title="2"><span><img src="data1/tooltips/2.jpg" alt="2"/>2</span></a>
    <a href="#" title="3"><span><img src="data1/tooltips/3.jpg" alt="3"/>3</span></a>
 
  </div></div>
    <?php } ?>


        </div>
       


         </div>
          <div class="modal-footer">
         
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
     
      </div> 




