<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hencework.com/theme/splasher/demo-1/flot-chart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Nov 2018 20:25:50 GMT -->
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>IoTM</title>
	<meta name="description" content="Splasher is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Splasher Admin, Splasheradmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Morris Charts CSS -->
    <link href="../../vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>
	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	
</head>

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
    <div class="wrapper theme-2-active navbar-top-light horizontal-nav">
		<!-- Top Menu Items -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="nav-wrap">
				<div class="mobile-only-brand pull-left">
					<div class="nav-header pull-left">
						<div class="logo-wrap">
							<a href="index.html">
								<img width="50" height="50" class="brand-img" src="http://www.uao.edu.co/sites/default/files/uao_logo5-02.png" alt="brand"/>
								<span class="brand-text"><img width="50" height="50" src="http://www.uao.edu.co/sites/default/files/uao_logo5-02.png" alt="brand"/></span>
							</a>
						</div>
					</div>	
					<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
					<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
					<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
					<form id="search_form" role="search" class="top-nav-search collapse pull-left">
						<div class="input-group">
							<input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
							<span class="input-group-btn">
							<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
							</span>
						</div>
					</form>
				</div>
				<div id="mobile_only_nav" class="mobile-only-nav pull-right">
					<ul class="nav navbar-right top-nav pull-right">
						
						
						<li class="dropdown alert-drp">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-notifications top-nav-icon"></i><span class="top-nav-icon-badge"></span></a>
							<ul  class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
								<li>
									<div class="notification-box-head-wrap">
										<span class="notification-box-head pull-left inline-block">notifications</span>
										<a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)"> clear all </a>
										<div class="clearfix"></div>
										<hr class="light-grey-hr ma-0"/>
									</div>
								</li>
								<li>
									<div class="streamline message-nicescroll-bar">
										<div class="sl-item">
											<a href="javascript:void(0)">
												<div class="icon bg-green">
													<i class="ti-briefcase "></i>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font  pull-left truncate head-notifications">
													New subscription created</span>
													<span class="inline-block font-11  pull-right notifications-time">2pm</span>
													<div class="clearfix"></div>
													<p class="truncate">Your customer subscribed for the basic plan. The customer will pay $25 per month.</p>
												</div>
											</a>	
										</div>
										<hr class="light-grey-hr ma-0"/>
										<div class="sl-item">
											<a href="javascript:void(0)">
												<div class="icon bg-yellow">
													<i class="zmdi zmdi-trending-down"></i>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Server #2 not responding</span>
													<span class="inline-block font-11 pull-right notifications-time">1pm</span>
													<div class="clearfix"></div>
													<p class="truncate">Some technical error occurred needs to be resolved.</p>
												</div>
											</a>	
										</div>
										<hr class="light-grey-hr ma-0"/>
										<div class="sl-item">
											<a href="javascript:void(0)">
												<div class="icon bg-blue">
													<i class="zmdi zmdi-email"></i>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font  pull-left truncate head-notifications">2 new messages</span>
													<span class="inline-block font-11  pull-right notifications-time">4pm</span>
													<div class="clearfix"></div>
													<p class="truncate"> The last payment for your G Suite Basic subscription failed.</p>
												</div>
											</a>	
										</div>
										<hr class="light-grey-hr ma-0"/>
										<div class="sl-item">
											<a href="javascript:void(0)">
												<div class="sl-avatar">
													<img class="img-responsive" src="../img/avatar.jpg" alt="avatar"/>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font  pull-left truncate head-notifications">Sandy Doe</span>
													<span class="inline-block font-11  pull-right notifications-time">1pm</span>
													<div class="clearfix"></div>
													<p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</a>	
										</div>
										<hr class="light-grey-hr ma-0"/>
										<div class="sl-item">
											<a href="javascript:void(0)">
												<div class="icon bg-red">
													<i class="zmdi zmdi-storage"></i>
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99% server space occupied.</span>
													<span class="inline-block font-11  pull-right notifications-time">1pm</span>
													<div class="clearfix"></div>
													<p class="truncate">consectetur, adipisci velit.</p>
												</div>
											</a>	
										</div>
									</div>
								</li>
								<li>
									<div class="notification-box-bottom-wrap">
										<hr class="light-grey-hr ma-0"/>
										<a class="block text-center read-all" href="javascript:void(0)"> read all </a>
										<div class="clearfix"></div>
									</div>
								</li>
							</ul>
						</li>
						<li>
							<a id="open_right_sidebar" href="#"><i class="zmdi zmdi-settings  top-nav-icon"></i></a>
						</li>
						<li class="dropdown auth-drp">
							<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="../img/user1.png" alt="user_auth" class="user-auth-img img-circle"/>
								<span class="user-online-status"></span><span class="user-auth-name inline-block">Administrador <span class="ti-angle-down"></span></span></a>
							<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
								<li>
									<a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
								</li>
								<li>
									<a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
								</li>
								<li>
									<a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
								</li>
								<li>
									<a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
								</li>
								<li class="divider"></li>
								<li class="sub-menu show-on-hover">
									<a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
									<ul class="dropdown-menu open-left-side">
										<li>
											<a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
										</li>
										<li>
											<a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
										</li>
										<li>
											<a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
										</li>
									</ul>	
								</li>
								<li class="divider"></li>
								<li>
									<a href="#"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
								</li>
							</ul>
						</li>
					</ul>
				</div>	
				</div>
			</nav>
			<!-- /Top Menu Items -->
			
			<!-- Left Sidebar Menu -->
		
			<!-- /Left Sidebar Menu -->
			
			<!-- Right Sidebar Menu -->
			
			<!-- /Right Sidebar Menu -->
				
			<!-- Right Setting Menu -->
			
			<!-- /Right Setting Menu -->

		<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container">
				<!-- Title -->					
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">IoT Data</h5>
					  
					</div>
					
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#">IoT</a></li>
						<li class="active"><span>Bomba de agua</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
					
				</div>
				<!-- /Title -->
				
				<div class="row">
					<div class="col-md-8 col-sm-6">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="panel panel-default card-view">
									<div class="panel-heading">
										<div class="pull-left">
											<h6 class="panel-title txt-dark">Temperatura: CELSIUS</h6>
										</div>
									
										<div class="clearfix"></div>
									</div>
									<div class="panel-wrapper collapse in">
										<div class="panel-body">
											<div id="chart_1" class="" style="height:418px;"></div>											
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-sm-12 col-xs-12">
								<div class="panel panel-default border-panel card-view">
									<div class="panel-heading">
										<div class="pull-left">
											<h6 class="panel-title txt-dark">Temperatura: Fahrenheit</h6>
										</div>
										<div class="pull-right">
											<a href="#" class="pull-left inline-block mr-15">
												<i class="zmdi zmdi-download"></i>
											</a>
											<a href="#" class="pull-left inline-block close-panel" data-effect="fadeOut">
												<i class="zmdi zmdi-close"></i>
											</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="panel-wrapper collapse in">
										<div class="panel-body row pa-0">
												<div id="chart_2" class="" style="height:418px;"></div>
										</div>	
									</div>
								</div>
							</div>
					
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="panel panel-default border-panel card-view panel-refresh">
									<div class="refresh-container">
										<div class="la-anim-1"></div>
									</div>
									<div class="panel-heading">
										<div class="pull-left" style="margin-right: 61px;">
											<h6 class="panel-title txt-dark">Estado del tanque</h6>
										</div>
										<div class="pull-rigth">
										<button id="start" class="btn btn-primary btn-rounded btn-icon left-icon" onclick="ajaxSetStartSystem(1)"> <i class="fa fa-arrow-circle-up"></i> <span>Start Tanque</span></button>
										<button id="stop"  class="btn btn-danger btn-rounded btn-icon left-icon" onclick="ajaxSetStartSystem(2)"> <i class="fa fa-arrow-circle-up"></i> <span>Stop Tanque</span></button>
										</div>
									</div>
									<div class="panel-wrapper collapse in">
										<div class="panel-body row">
											<div class="col-sm-6 pa-0">
												<div id="flot_bar_chart" style="height:418px;"></div>
											</div>
																					
										</div>	
									</div>
								</div>
							</div>	
							
					
						</div>
					</div>
				</div>
			
			</div>
			
			<!-- Footer -->
			<footer class="footer pl-30 pr-30">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<p>2018 &copy; Splasher. Pampered by Hencework</p>
						</div>
						<div class="col-sm-6 text-right">
							<p>Follow Us</p>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
				
		</div>
		<!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="../../vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../vendors/bower_components/raphael/raphael.min.js"></script>
    <script src="../../vendors/bower_components/morris.js/morris.min.js"></script>

	<!-- Flot Charts JavaScript -->
	<script src="../../vendors/bower_components/Flot/excanvas.min.js"></script>
	<script src="../../vendors/bower_components/Flot/jquery.flot.js"></script>
	<script src="../../vendors/bower_components/Flot/jquery.flot.pie.js"></script>
	<script src="../../vendors/bower_components/Flot/jquery.flot.resize.js"></script>
	<script src="../../vendors/bower_components/Flot/jquery.flot.time.js"></script>
	<script src="../../vendors/bower_components/Flot/jquery.flot.stack.js"></script>
	<script src="../../vendors/bower_components/Flot/jquery.flot.crosshair.js"></script>
	<script src="../../vendors/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
	<!-- <script src="dist/js/flot-data.js"></script>-->

		<!-- EChartJS JavaScript -->
	<script src="../../vendors/bower_components/echarts/dist/echarts-en.min.js"></script>
	<script src="../../vendors/echarts-liquidfill.min.js"></script>
	
	<!--Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>
	<script>


ajaxGetDataTemperatura();
			
function ajaxGetDataTemperatura(){

	$.ajax({
        type:"POST",
        url:'ajaxGetTemperatura.php',	
        dataType:"html",
        data: {
	      format: 'json'
	   },
        beforeSend:function(){
            //imagenesCarga();
        },
        error: function(response, quepaso, otroobj){
            console.log("ERROR AJAX Temperatura");
        },
        success:function(response){
          	var obj = JSON.parse(response);
          console.log(obj.far);
          console.log(obj.cel);
           drawChartFar(obj.far);
           drawChartCel(obj.cel);
        }
    });

}

function ajaxSetStartSystem(start_stop){

	$.ajax({
        type:"POST",
        url:'ajaxSetStart.php?start_stop='+start_stop,	
        dataType:"html",
        data: {
	      format: 'json'
	   },
        beforeSend:function(){
            //imagenesCarga();
        },
        error: function(response, quepaso, otroobj){
            console.log("ERROR AJAX Temperatura");
        },
        success:function(response){

          	if(start_stop == 1){
          		$("#start").hide();
          		$("#stop").show();
          	} else if(start_stop == 2){
          		$("#start").show();
          		$("#stop").hide();
          	}
        }
    });

}

ajaxSetStadoButton(); // Muestras el botton Start_Stop Segun el estado de la DB
function ajaxSetStadoButton(){

	$.ajax({
        type:"POST",
        url:'ajaxGetStart.php',	
        dataType:"html",
        data: {
	      format: 'json'
	   },
        beforeSend:function(){ },
        error: function(response, quepaso, otroobj){ },
        success:function(response){
        	alert(response);
          	if(response == 1){
          		$("#start").hide();
          		$("#stop").show();
          	} else if(response == 2){
          		$("#start").show();
          		$("#stop").hide();
          	}
        }
    });

}	

function drawChartCel(data){
	$('#chart_1').empty();
	if($('#chart_1').length > 0) {
		// Line Chart
	
		var lineChart = Morris.Area({
			element: 'chart_1',
			data: data,
			xkey: 'x',
			ykeys: ['y'],
			labels: ['Temp'],
			pointSize: 4,
			lineWidth: 2,
			pointStrokeColors:['#ffffff'],
			pointFillColors:['#0092ee'],
			behaveLikeLine: true,
			gridLineColor: 'rgba(33,33,33,0.1)',
			smooth: false,
			hideHover: 'auto',
			lineColors: ['#0092ee'],
			resize: true,
			gridTextColor:'#878787',
			gridTextFamily:"Roboto",
			parseTime: false,
			fillOpacity:.1
		});	
	}	
}

function drawChartFar(data){
	$('#chart_2').empty();
	if($('#chart_2').length > 0) {
		// Line Chart
	
		var lineChart = Morris.Area({
			element: 'chart_2',
			data: data,
			xkey: 'x',
			ykeys: ['y'],
			labels: ['Temp'],
			pointSize: 4,
			lineWidth: 2,
			pointStrokeColors:['#ffffff'],
			pointFillColors:['#0092ee'],
			behaveLikeLine: true,
			gridLineColor: 'rgba(33,33,33,0.1)',
			smooth: false,
			hideHover: 'auto',
			lineColors: ['#0092ee'],
			resize: true,
			gridTextColor:'#878787',
			gridTextFamily:"Roboto",
			parseTime: false,
			fillOpacity:.1
		});	
	}	
}

//LLENADO DE TANQUE
getEstadoTanque();
function getEstadoTanque(){

	$.ajax({
        type:"POST",
        url:'ajaxGetEstadoTanque.php',	
        dataType:"html",
        data: {
	      format: 'json'
	   },
        beforeSend:function(){
            //imagenesCarga();
        },
        error: function(response, quepaso, otroobj){
            console.log("ERROR AJAX Temperatura");
        },
        success:function(response){
        	console.log("Est:"+response);
          	drawEstadoTanque(response);
        }
    });
}



function drawEstadoTanque(estado){
		$('#flot_bar_chart').empty();
		if( $('#flot_bar_chart').length > 0 ){    
		/*Defining Option*/
		var estados = [];
		estados[0] = "#f83f37"; //Vacio
		estados[1] = "#22af47"; //Lleno
		estados[2] = "#0092ee"; //Encima
		var dataEstado = 0;
		var colorEstado = "#f83f37";
		if(estado == "1"){ dataEstado = 100; colorEstado = estados[1]; } 
		if(estado == "2"){ dataEstado = 120; colorEstado = estados[2]; } 

		var barOptions = {
			series: {
				bars: {
					show: true,
					fill : 1,
					barWidth: 73200000
				}
			},
			yaxis: {
				font : {
					color : '#878787'
				}
			},
			xaxis: {
				mode: "time",
				timeformat: "%m/%d",
				minTickSize: [2, "day"],
				font : {
					color : '#878787'
				}
			},
			
			legend: {
				show: false
			},
			grid: {
					color: "rgba(0,0,0,0)",
					hoverable: true,
					borderWidth: 0,
					backgroundColor: 'transparent'
				},
			tooltip: true,
			tooltipOpts: {
				content: "y: %y"
			}
		};
	   
		/*Defining Data*/
		var barData = {
			label: "bar",
			color: colorEstado,
			data: [
				
				[0, dataEstado]
			]
		};
		
		/*Plot*/
		$.plot($("#flot_bar_chart"), [barData], barOptions);	
	}
}
	//setTimeout(ajaxGetDataTemperatura, 500);
	var myVar = setInterval(ajaxGetDataTemperatura, 100);
	var estadoT = setInterval(getEstadoTanque, 100);

	</script>
	
</body>


<!-- Mirrored from hencework.com/theme/splasher/demo-1/flot-chart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Nov 2018 20:25:50 GMT -->
</html>
