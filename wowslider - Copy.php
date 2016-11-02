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

	<div class="row">
		<div class="col-sm-4"><button type="button" class="btn btn-info btn-lg" id="myBtn">Open Modal</button></div>

		<div class="col-sm-4"><button type="button" class="btn btn-info btn-lg" id="secondBtn">Open Modal</button></div>

		<div class="col-sm-4"><button type="button" class="btn btn-info btn-lg" id="thirdBtn">Open Modal</button></div>

	</div>




	<?php

	$all_images= $control->getAllImages();   
	$all_tool_tip= $control->getAllToolTip();
//print_r($all_images);

	$wowslider_container1= "wowslider-container1";
	$ws_images ="ws_images";
	$ws_bullets="ws_bullets";
	?>






	




	<!-- Modal1 start -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">

					<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
					<div id="<?php echo $wowslider_container1;?>">
						<div class="<?php echo $ws_images;?>">


							<ul>
								<?php
								foreach ($all_images as $value) {

									?>


									<li><img src="<?php echo $value['image_url']?>" /></li>

									<?php } ?>


								</ul>



							</div>
							<div class="<?php echo $ws_bullets;?>"><div>
								<?php
								foreach ($all_tool_tip as $value) {

									?>
									<a href="#" title="1"><span><img src="<?php echo $value['tool_tip']?>" alt="1"/>1</span></a>

									<?php } ?>

								</div></div>
								<div class="ws_shadow"></div>
							</div>


						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>

				</div>
			</div>


			<!-- Modal1 end -->




			<script type="text/javascript" src="engine1/wowslider.js"></script>
			<script type="text/javascript" src="engine1/script.js"></script>
			<!-- End WOWSlider.com BODY section -->
			<script>
				$(document).ready(function(){
					$("#myBtn").click(function(){
						$("#myModal").modal();
					});
					$("#secondBtn").click(function(){
						$("#secondModal").modal();
					});

					$("#thirdBtn").click(function(){
						$("#thirdModal").modal();
					});

				});
			</script>
		</body>
		</html>