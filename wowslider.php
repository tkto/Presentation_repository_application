<?php 
function __autoload($classname) {
	$arr_folder = array("control", "model");
	for ($r = 0; $r < count($arr_folder); $r++) {
		if ($arr_folder[$r] == $classname) {
			include $arr_folder[$r] . '/' . $classname . ".php";
		}
	}
}

$control = new control();

$get_image_home= $control->get_image_home_fun();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Responsive slider</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Responsive slider" />
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color:#d7d7d7;margin:auto">
<div class="container">

 <div class="row">
            <h4 class="product_header">Products</h4>
           
            <?php foreach($get_image_home as $v_product){ ?>
            <a href="" id="<?php echo $v_product['id']; ?>" data-toggle="modal" data-target="#myModal">
               <div class="col-xs-6 col-sm-3">
                  <div class=" effect_custom custom_box">
 <div class="img_holder">
                     <img class="img-responsive portfolio-item" src="<?php echo $v_product['home_image_url']; ?>" alt="">
 </div>
                     <div class="fig_css">
                        <h4><?php echo $v_product['title']; ?></h4>
                        <p><?php echo $v_product['description']; ?></p>
                     </div>
                  </div>
            </a>
            </div>
            <?php } ?>
         
         </div>




	<div class="row">
		
 <a href="" id="2" data-toggle="modal" data-target="#myModal" >First</a>
	<script>  
 $(document).ready(function(){  
       $("a[data-toggle=modal]").click(function(){  
            var txt =$(this).attr('id'); //alert(txt) ;
             // $(this).val(); // = 
           if(txt != '')  
           {  
                $.ajax({  
                     url:"fetch.php",  
                     method:"post",  
                     data:{search:txt},  
                     dataType:"text",  
                     success:function(data)  
                     {  
           //alert(data);
                          $('#myModal').html(data);  
                     }  
                });  
           }  
           else  
           {  
                $('#myModal').html('');                 
           }  
      });  
 });  
 </script>

 <div class="modal fade" id="myModal" role="dialog">
         <div class="modal-dialog">

         </div>
      </div>
	</div>

</div>
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
			<!-- End WOWSlider.com BODY section -->
	
		</body>
		</html>