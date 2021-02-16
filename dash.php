<?php
session_start();
if(!isset($_SESSION['user_name'])){
    // header("Location: home?security=nice_try");
}
$suggested_viands = $_SESSION['suggested_viands'];

?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Aloha CC — Dashboard</title>
		<link rel="icon" href="index_files/AlohaCC-icon.png">
		<!-- CSS FILES -->
		<link rel="stylesheet" type="text/css" href="index_files/uikit.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<style>
			.news-slide > li > .uk-card {
				box-shadow: none;
				border:  1px solid rgba(0,0,0,0.075);
			}
			h1, h2, h3, h4, h5, h6 {
				font-weight: 700;
			}
			.uk-logo > img {
				height: 58px;
			}
			#header.uk-sticky-below {
				box-shadow: 0 2px 14px 0 rgba(0,0,0,0.07);
			}
		</style>
	<script>try {
                        Object.defineProperty(screen, "availTop", { value: 0 });
                    } catch (e) {}
                    try {
                        Object.defineProperty(screen, "availLeft", { value: 0 });
                    } catch (e) {}
                    try {
                        Object.defineProperty(screen, "availWidth", { value: 1525 });
                    } catch (e) {}
                    try {
                        Object.defineProperty(screen, "availHeight", { value: 858 });
                    } catch (e) {}
                    try {
                        Object.defineProperty(screen, "colorDepth", { value: 24 });
                    } catch (e) {}
                    try {
                        Object.defineProperty(screen, "pixelDepth", { value: 24 });
                    } catch (e) {}
                    try {
                        Object.defineProperty(navigator, "hardwareConcurrency", { value: 8 });
                    } catch (e) {}
                    try {
                        Object.defineProperty(navigator, "appVersion", { value: "5.0 (Windows)" });
                    } catch (e) {}
                    try {
                        Object.defineProperty(navigator, "doNotTrack", { value: "unspecified" });
                    } catch (e) {}
                    
            try {
                window.screenY = 849
            } catch (e) { }
        
            try {
                window.screenTop = 849
            } catch (e) { }
        
            try {
                window.top.window.outerHeight = window.screen.height
            } catch (e) { }
        
            try {
                window.screenX = 1516
            } catch (e) { }
        
            try {
                window.screenLeft = 1516
            } catch (e) { }
        
            try {
                window.top.window.outerWidth = window.screen.width
            } catch (e) { }
        </script></head>
	<script>
	$(document).ready(function(){
		$("#viandSearch").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("#viandList li").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
	});
	</script>
	<body>
		<!--HEADER-->
		<header id="header" style="background-color: #151515;" data-uk-sticky="show-on-up: true; animation: uk-animation-fade; media: @l" class="uk-sticky">
			<div class="uk-container">
				<nav id="navbar" data-uk-navbar="mode: click;" class="uk-navbar">
					<div class="uk-navbar-left nav-overlay uk-visible@m">
						<ul class="uk-navbar-nav">
							<li>
								<a href="#" style="color:white" title="home">Home</a>
							</li>
							<li>
								<a href="#" style="color:white" title="devs">Know the Developers</a>
							</li>
						</ul>
					</div>
					<div class="uk-navbar-center nav-overlay">
						<a class="uk-navbar-item uk-logo" href="#" title="Logo"><img src="index_files/AlohaCC.png" alt="Logo"></a>
					</div>
					<div class="uk-navbar-right nav-overlay">
						<!-- <a class="uk-navbar-toggle uk-visible@m uk-icon uk-search-icon" style="color: white;"
						data-uk-search-icon="" data-uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="search-icon"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9" cy="9" r="7"></circle><path fill="none" stroke="#000" stroke-width="1.1" d="M14,14 L18,18 L14,14 Z"></path></svg></a> -->
						<div class="uk-navbar-item">
							<a class="uk-visible@s uk-icon" style="margin-right: 4px; color: white" href="#" data-uk-icon="facebook"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="facebook"><path d="M11,10h2.6l0.4-3H11V5.3c0-0.9,0.2-1.5,1.5-1.5H14V1.1c-0.3,0-1-0.1-2.1-0.1C9.6,1,8,2.4,8,5v2H5.5v3H8v8h3V10z"></path></svg></a>
							<a class="uk-visible@s uk-icon" style="margin-right: 4px; color: white" href="#" data-uk-icon="twitter"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="twitter"><path d="M19,4.74 C18.339,5.029 17.626,5.229 16.881,5.32 C17.644,4.86 18.227,4.139 18.503,3.28 C17.79,3.7 17.001,4.009 16.159,4.17 C15.485,3.45 14.526,3 13.464,3 C11.423,3 9.771,4.66 9.771,6.7 C9.771,6.99 9.804,7.269 9.868,7.539 C6.795,7.38 4.076,5.919 2.254,3.679 C1.936,4.219 1.754,4.86 1.754,5.539 C1.754,6.82 2.405,7.95 3.397,8.61 C2.79,8.589 2.22,8.429 1.723,8.149 L1.723,8.189 C1.723,9.978 2.997,11.478 4.686,11.82 C4.376,11.899 4.049,11.939 3.713,11.939 C3.475,11.939 3.245,11.919 3.018,11.88 C3.49,13.349 4.852,14.419 6.469,14.449 C5.205,15.429 3.612,16.019 1.882,16.019 C1.583,16.019 1.29,16.009 1,15.969 C2.635,17.019 4.576,17.629 6.662,17.629 C13.454,17.629 17.17,12 17.17,7.129 C17.17,6.969 17.166,6.809 17.157,6.649 C17.879,6.129 18.504,5.478 19,4.74"></path></svg></a>							
							<a href="logout.php" style="color:white" class="uk-visible@s uk-icon-link" uk-icon="sign-out"></a>
							<a class="uk-navbar-toggle uk-hidden@m uk-icon uk-navbar-toggle-icon" style="color:white" data-uk-toggle="" data-uk-navbar-toggle-icon="" href="#offcanvas-nav"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="navbar-toggle-icon"><rect y="9" width="20" height="2"></rect><rect y="3" width="20" height="2"></rect><rect y="15" width="20" height="2"></rect></svg></a>
						</div>
					</div>
					<!-- <div class="nav-overlay uk-navbar-left uk-flex-1" hidden="">
						<div class="uk-navbar-item uk-width-expand">
							<form class="uk-search uk-search-navbar uk-width-1-1">
								<input id="navSearch" class="uk-search-input" type="search" placeholder="Search...">
							</form>
						</div>
						<a class="uk-navbar-toggle uk-icon uk-close" data-uk-close="" data-uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"><svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" data-svg="close-icon"><line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line><line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line></svg></a>
					</div> -->
				</nav>
			</div>
		</header><div class="uk-sticky-placeholder" style="height: 80px; margin: 0px;" hidden=""></div>
		<!--/HEADER-->
		<!-- FEATURED -->
		<div class="uk-container uk-margin-medium-top">
			<h4 class="uk-heading-line uk-text-bold"><span>Suggested Food Viands <a href="search.php" uk-tooltip="Refresh suggested food" class="uk-icon-link" uk-icon="refresh"></a></span></h4>
			<div data-uk-slider="velocity: 5" class="uk-slider">
				<div class="uk-position-relative">
					<div class="uk-slider-container">
					<!-- SUGGEST FOOD -->
						<ul class="uk-slider-items uk-child-width-1-2@m uk-grid uk-grid-medium news-slide" style="transform: translate3d(0px, 0px, 0px);">
							<?php
								$host = "localhost";
								$db_user = "root";
								$db_password = "";
								$db_name = "mydb";
								$db_connection = mysqli_connect($host, $db_user, $db_password, $db_name);
								
								
								if ($db_connection === false) {
									die("Error: Cannot connect to the database");
								}
								$counter = 0;
								foreach($suggested_viands as $viands_id){
								if($counter == 4)break;
								//filter username
								$sql = "SELECT * FROM `viand` WHERE viand_id='".$viands_id."'";
								$result = mysqli_query($db_connection, $sql);
								$record = mysqli_fetch_array($result);
								$sugg_name = $record['viand_name'];
								$sugg_img = $record['viand_image'];
								$sugg_desc = $record['viand_description'];
								$sugg_tag = $record['viand_recommendation'];
								$sugg_cc = $record['viand_cc'];
								// for($x = 0; $x < 4; $x++){
							?>
							<li tabindex="-1" class="uk-active">
								<div class="uk-card uk-card-default uk-card-body uk-card-small uk-flex uk-flex-middle uk-card-default uk-border-rounded">
									<div class="uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid="">
										<div class="uk-width-1-3@s uk-width-2-5@m uk-height-1-1 uk-first-column">
											<img src="viand/<?php echo $sugg_img ?>" style="width: 400px; height: 200px; object-fit: cover;"alt="">
										</div>
										<div class="uk-width-2-3@s uk-width-3-5@m">
											<span class="uk-label uk-label-success" style="font-size: 0.75rem"><?php echo $sugg_tag ?></span>
											<h3 class="uk-card-title uk-margin-small-top uk-margin-remove-bottom">
											<a class="uk-link-reset" href="#"><?php echo $sugg_name ?></a>
											</h3>
											<span class="uk-article-meta">Consider eating one!	|	<?php echo $sugg_cc ?> per serving.</span>
											<p class="uk-margin-small"><?php echo $sugg_desc ?></p>
										</div>
									</div>
								</div>
							</li>
							<?php $counter++;}
							?>
						</ul>
					<!-- END OF SUGGEST FOOD -->
					</div>
					<div class="uk-hidden@l uk-light">
						<a class="uk-position-center-left uk-position-small uk-icon uk-slidenav-previous uk-slidenav" href="#" data-uk-slidenav-previous="" data-uk-slider-item="previous"><svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-previous"><polyline fill="none" stroke="#000" stroke-width="1.4" points="12.775,1 1.225,12 12.775,23 "></polyline></svg></a>
						<a class="uk-position-center-right uk-position-small uk-icon uk-slidenav-next uk-slidenav" href="#" data-uk-slidenav-next="" data-uk-slider-item="next"><svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-next"><polyline fill="none" stroke="#000" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 "></polyline></svg></a>
					</div>
					<div class="uk-visible@l">
						<a class="uk-position-center-left-out uk-position-small uk-icon uk-slidenav-previous uk-slidenav" href="#" data-uk-slidenav-previous="" data-uk-slider-item="previous"><svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-previous"><polyline fill="none" stroke="#000" stroke-width="1.4" points="12.775,1 1.225,12 12.775,23 "></polyline></svg></a>
						<a class="uk-position-center-right-out uk-position-small uk-icon uk-slidenav-next uk-slidenav" href="#" data-uk-slidenav-next="" data-uk-slider-item="next"><svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-next"><polyline fill="none" stroke="#000" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 "></polyline></svg></a>
					</div>
				</div>
				<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"><li uk-slider-item="0" class="uk-active"><a href=""></a></li><li uk-slider-item="1"><a href=""></a></li><li uk-slider-item="2"><a href=""></a></li><li uk-slider-item="3"><a href=""></a></li></ul>
			</div>
		</div>
		<!-- /FEATURED -->
		<!--CONTENT-->
		<div class="uk-section uk-section-default">
			<div class="uk-container">
				<div class="uk-grid" data-ukgrid="">
					<div class="uk-width-2-3@m">
						<h4 class="uk-heading-line uk-text-bold"><span>Today's Calorie Intake</span></h4>
						<article class="uk-section uk-section-small uk-padding-remove-top">
							<header>
								<img style="display:block;margin-left:auto;margin-right:auto;" src="index_files/calorie_intake.jpg" width="500px"/>
								<h2 class="uk-margin-remove-adjacent uk-text-bold uk-margin-small-bottom" 
								style="text-align: center; margin-top: 0px;">
									<a style="font-size: 50px"title="Calorie Intake" class="uk-link-reset" href="#">
										2,800
									</a><span style="font-weight:normal">calories</span>
								</h2>
								<div style="text-align:center">
									<button uk-toggle="target: #add-food" class="uk-button uk-button-primary" 
									style="border-radius: 50px; text-transform: inherit; text-align: center">
										I have consumed food with calories&nbsp;&nbsp;&nbsp;<span uk-icon="icon: plus-circle"></span>
									</button>
									<div id="add-food" uk-modal>
										<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-border-rounded">
											<h2 class="uk-modal-title" style="text-align: center;">Choose the food you ate</h2>
											<div class="uk-margin" style="text-align: center">
												<span class="uk-search uk-search-default">
													<span class="uk-search-icon-flip" uk-search-icon></span>
													<input class="uk-search-input" id="viandSearch" type="search" placeholder="Search...">
												</span>
											</div>
											<form action="diary.php" method="post">
												<div class="uk-panel uk-panel-scrollable" style="height: 300px">
													<!-- VIAND LIST -->
													<ul class="uk-list" id="viandList">
														<?php 
															$host = "localhost";
															$db_user = "root";
															$db_password = "";
															$db_name = "mydb";
															$db_connection = mysqli_connect($host, $db_user, $db_password, $db_name);
															
															
															if ($db_connection === false) {
																die("Error: Cannot connect to the database");
															}
															//filter username
															$sql = "SELECT * FROM `viand`";
															$result = mysqli_query($db_connection, $sql);
														?>
														<?php  while($row = mysqli_fetch_assoc($result)) { ?>
														<li tabindex="-1" class="uk-active">
															<div class="uk-card uk-card-default uk-card-body uk-card-small uk-flex uk-flex-middle uk-card-default uk-border-rounded">
																<div class="uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid="">
																	<div class="uk-width-1-3@s uk-width-2-5@m uk-height-1-1 uk-first-column">
																		<img src="viand/<?php echo $row['viand_image']?>" style="width: 150px; height: 150px; object-fit: cover;"alt="">
																	</div>
																	<div class="uk-width-2-3@s uk-width-3-5@m">
																		<span class="uk-label uk-label-warning" style="font-size: 0.75rem"><?php echo $row['viand_recommendation']?></span>
																		<label><input style="margin-left: 150px" class="uk-checkbox uk-card-badge" id="viand_check" 
																		name="viand_food[]" value="<?php echo $row['viand_id']?>" type="checkbox"></label>
																		<h3 class="uk-card-title uk-margin-small-top uk-margin-remove-bottom">
																		<a class="uk-link-reset" href="#"><?php echo $row['viand_name']?></a>
																		</h3>
																		<span class="uk-article-meta">Average number of calories per serving</span>
																		<p style="margin-top: 0px"><?php echo $row['viand_cc']?> calories</p>
																	</div>
																</div>
															</div>
														</li>
														<?php 
															}?>
													</ul>
												<!-- END OF VIAND LIST -->

												</div>
												<div style="text-align: center;">
													<input class="uk-margin-top uk-button uk-button-primary uk-border-pill" 
													style="background-color: #32d296" id="viand_submit" name="submit" value="Submit" type="submit"></br>
													<button class="uk-margin-top uk-button uk-modal-close uk-button-text" id="viandClose" type="button">Close</button>
												</div>
											</form>
										</div>
									</div>
								<div class="uk-child-width-expand@s uk-text-center uk-margin-top" uk-grid>
									<div>
										<div class="uk-card uk-card-default uk-card-body"  style="background-color:#32d296">
											<a style="font-size: 40px;color:white;" title="Food added">
												<?php
													//counting the number of food added today
													$sql = "SELECT * FROM `user` WHERE user_name='".$_SESSION['user_name']."'";
													$result = mysqli_query($db_connection, $sql);
													$record = mysqli_fetch_array($result);
													$user_id = $record['user_id'];
													$sql = "SELECT * FROM `food_diary` WHERE DATE(`fd_date`) = CURDATE() AND
													user_id='".$user_id."'";
													$result = mysqli_query($db_connection, $sql);
													$count = mysqli_num_rows($result);
													echo $count;
												?>
											</a></br><span style="font-weight:normal; color: whitesmoke">Food added today</span>
										</div>
									</div>
									<div>
										<?php
											//calculating the total calorie intake today
											$sql = "SELECT `viand_id` FROM `food_diary` WHERE DATE(`fd_date`) = CURDATE() AND
												user_id='".$user_id."'";
											$result = mysqli_query($db_connection, $sql);
											$today_cc_sum = array();
											while($row = mysqli_fetch_assoc($result)) {
												$sql = "SELECT * FROM `viand` WHERE viand_id='".$row['viand_id']."'";
												$cc_result = mysqli_query($db_connection, $sql);
												while($cc_row = mysqli_fetch_assoc($cc_result)) {
													array_push($today_cc_sum, $cc_row['viand_cc']);
												}
											}
										if(array_sum($today_cc_sum) < 2800){
										?>
										<div class="uk-card uk-card-default uk-card-body"  style="background-color:#32d296">
											<a style="font-size: 40px;color:white;" title="Calorie intake today">
											<?php echo array_sum($today_cc_sum)?>
											</a></br><span style="font-weight:normal; color: whitesmoke">Calories intake today</span>
										</div>
										<?php }else{?>
											<div class="uk-card uk-card-default uk-card-body"  style="background-color:#f0506e">
												<a style="font-size: 40px;color:white;" title="Calorie intake today">
												<?php echo array_sum($today_cc_sum)?>
												</a></br><span style="font-weight:normal; color: whitesmoke">You have reached the calorie limit!</span>
											</div>
										<?php }?>
									</div>
									<div>
										<div class="uk-card uk-card-default uk-card-body"  style="background-color:#32d296">
											<a style="font-size: 40px;color:white;" title="Food added">
											<!-- PRINT NUMBER OF FOOD ARCHIVE -->
												<?php
													$sql = "SELECT * FROM `food_diary` WHERE user_id='".$user_id."'";
													$result = mysqli_query($db_connection, $sql);
													$count = mysqli_num_rows($result);
													echo $count;
												?>
											</a></br><span style="font-weight:normal; color: whitesmoke">Food archive diaries</span>
										</div>
									</div>
								</div>
							<hr>
						</article>
					</div>
					<div class="uk-width-1-3@m">
						<h4 class="uk-heading-line uk-text-bold"><span>Food Diary 
						<a uk-tooltip ="Arrange by Ascending" href="?ascending" class="uk-icon-link" uk-icon="arrow-up"></a>
						<a uk-tooltip ="Arrange by Descending" href="?descending" class="uk-icon-link" uk-icon="arrow-down"></a></span></h4>
						<div class="uk-panel uk-panel-scrollable"  style="height: 300px">
							<ul class="uk-list">
							<?php 
								function merge_sort($my_array){
									if(count($my_array) == 1 ) return $my_array;
									$mid = count($my_array) / 2;
									$left = array_slice($my_array, 0, $mid);
									$right = array_slice($my_array, $mid);
									$left = merge_sort($left);
									$right = merge_sort($right);
									return merge($left, $right);
								}
								function merge($left, $right){
									$res = array();
									while (count($left) > 0 && count($right) > 0){
										if(isset($_GET['descending'])){
											if($left[0] < $right[0]){
												$res[] = $right[0];
												$right = array_slice($right , 1);
											}else{
												$res[] = $left[0];
												$left = array_slice($left, 1);
											}
										}else if(isset($_GET['ascending'])){
											if($left[0] > $right[0]){
												$res[] = $right[0];
												$right = array_slice($right , 1);
											}else{
												$res[] = $left[0];
												$left = array_slice($left, 1);
											}  
										}else{
											if($left[0] < $right[0]){
												$res[] = $right[0];
												$right = array_slice($right , 1);
											}else{
												$res[] = $left[0];
												$left = array_slice($left, 1);
											}
										}
									}
									while (count($left) > 0){
										$res[] = $left[0];
										$left = array_slice($left, 1);
									}
									while (count($right) > 0){
										$res[] = $right[0];
										$right = array_slice($right, 1);
									}
									return $res;
								}
								$sql = "SELECT DISTINCT * FROM `food_diary` WHERE user_id='".$user_id."'";
								$result = mysqli_query($db_connection, $sql);
								$count = mysqli_num_rows($result);
								if($count > 0){
									$d_array = array(); //for the whole items in table
									$merge_Sorted_arr = array(); //containing the sorted array
									while($fd_row = mysqli_fetch_assoc($result)){
										// add each row returned into an array
										$d_array[] = $fd_row['fd_date']; 
									}
									foreach(merge_sort($d_array) as $temp_sorted){
										$merge_Sorted_arr[] = $temp_sorted;
									}
									$merge_Sorted_arr = array_unique($merge_Sorted_arr);
									foreach($merge_Sorted_arr as $d_sorted){
										$sql = "SELECT DISTINCT `viand_id` FROM `food_diary` WHERE fd_date ='".$d_sorted."' AND
											user_id='".$user_id."'";
										$result = mysqli_query($db_connection, $sql);
										$count = mysqli_num_rows($result);

										while($row = mysqli_fetch_assoc($result)) {
											$sql = "SELECT * FROM `viand` WHERE viand_id='".$row['viand_id']."'";
											$fd_sorted_result = mysqli_query($db_connection, $sql);
											while($fd_sorted_row = mysqli_fetch_assoc($fd_sorted_result)) {
								?>
								<li tabindex="-1" class="uk-active">
									<div class="uk-card uk-card-default uk-card-body uk-card-small uk-card-default">
										<div class="uk-grid uk-grid-medium" data-uk-grid="">
											<div class="uk-width-1-3@s uk-width-2-5@m uk-height-1-1 uk-first-column">
												<img src="viand/<?php echo $fd_sorted_row['viand_image']?>" 
												style="width: 400px; height: 100px; object-fit: cover;" alt="">
											</div>
											<div class="uk-width-2-3@s uk-width-3-5@m">
												<h3 class="uk-card-title uk-margin-remove-bottom">
												<a class="uk-link-reset" href="#"><?php  echo $fd_sorted_row['viand_name'] ?></a>
												</h3>
												<span class="uk-label uk-label-secondary" style="font-size: 0.75rem; text-transform: capitalize;"><?php echo $d_sorted ?></span>
												<p style="margin-top: 5px; margin-left: 5px" class="uk-text-small">You gained <?php  echo $fd_sorted_row['viand_cc'] ?> calories for this viand.</p>
											</div>
										</div>
									</div>
								</li>
								<?php 
											}
										}
									}
								}else{
									echo "<img class='uk-height-1-2' src='index_files/no-data.jpg' />\n
									<p style='text-align:center'>You have no food diary, add now!</p>";
								}?>
							</ul>
						</div>
						<h4 class="uk-heading-line uk-text-bold"><span>About Us</span></h4>
						<div class="uk-tile uk-tile-small uk-tile-muted uk-border-rounded">
							This is a test about us.
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/CONTENT-->
		
		
		<!--FOOTER-->
		<footer class="uk-section uk-section-small uk-section-muted">
			<div class="uk-container">
				<p class="uk-text-small uk-text-center">Design Algorithm, BSCS—SS191</a> | <img src="index_files/AlohaCC.png" width="20px" /> Aloha 2020</p>
			</div>
		</footer>
		<!--/FOOTER-->
		<!-- OFFCANVAS -->
		<div id="offcanvas-nav" data-uk-offcanvas="flip: true; overlay: true" class="uk-offcanvas">
			<div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
				<button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close=""><svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" data-svg="close-icon"><line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line><line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line></svg></button>
				<ul class="uk-nav uk-nav-default">
					<li class="uk-active"><a href="#">Active</a></li>
					<li class="uk-parent">
						<a href="#">Parent</a>
						<ul class="uk-nav-sub">
							<li><a href="#">Sub item</a></li>
							<li><a href="#">Sub item</a></li>
						</ul>
					</li>
					<li class="uk-nav-header">Header</li>
					<li><a href="#js-options"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: table"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="table"><rect x="1" y="3" width="18" height="1"></rect><rect x="1" y="7" width="18" height="1"></rect><rect x="1" y="11" width="18" height="1"></rect><rect x="1" y="15" width="18" height="1"></rect></svg></span> Item</a></li>
					<li><a href="#"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: thumbnails"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="thumbnails"><rect fill="none" stroke="#000" x="3.5" y="3.5" width="5" height="5"></rect><rect fill="none" stroke="#000" x="11.5" y="3.5" width="5" height="5"></rect><rect fill="none" stroke="#000" x="11.5" y="11.5" width="5" height="5"></rect><rect fill="none" stroke="#000" x="3.5" y="11.5" width="5" height="5"></rect></svg></span> Item</a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="#"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: trash"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="trash"><polyline fill="none" stroke="#000" points="6.5 3 6.5 1.5 13.5 1.5 13.5 3"></polyline><polyline fill="none" stroke="#000" points="4.5 4 4.5 18.5 15.5 18.5 15.5 4"></polyline><rect x="8" y="7" width="1" height="9"></rect><rect x="11" y="7" width="1" height="9"></rect><rect x="2" y="3" width="16" height="1"></rect></svg></span> Item</a></li>
				</ul>
				<h3>Title</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat.</p>
			</div>
		</div>
		<!-- /OFFCANVAS -->
		<!-- JS FILES -->
		<script src="index_files/uikit.js"></script>
		<script src="index_files/uikit-icons.js"></script>
		<script 
    		src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
			crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script>
		$('#viandClose').click(function(){
			$('input:checkbox').attr('checked',false);
		})
    	</script>
	</body>
</html>