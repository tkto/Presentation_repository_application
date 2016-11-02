

<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>

<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>

<?php  
$var =  $_POST['search'] ;
$str = strtoupper($var);

$conn =@mysql_connect("localhost","root","") or die("MySQL conncetion error");

mysql_select_db("flip_book",$conn); 

$sql= mysql_query("SELECT * FROM `tbl_images` WHERE `slide_no`  =$str");
$sql2= mysql_query("SELECT * FROM `tbl_images` WHERE `slide_no`  =$str");
?>  



<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Modal Header</h4>
  </div>
  <div class="modal-body">

    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
    <div id="wowslider-container1">
      <div class="ws_images"><ul>

        <?php
        while($row = mysql_fetch_array($sql))  
        {  

          ?> 
          <li><img src="<?php echo $row['image_url']?>" alt="1" title="1" id="wows1_0"/></li>

          <?php }; ?>


        </ul></div>
      
<div class="ws_bullets"><div>
<?php
        while($row = mysql_fetch_array($sql2))  
        {  

          ?>
    <a href="#" title="1"><span><img src="<?php echo $row['tool_tip']?>" alt="1"/>1</span></a>

         <?php } ?>
  </div></div>

        <div class="ws_shadow"></div>
      </div>  


    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>


  
  


