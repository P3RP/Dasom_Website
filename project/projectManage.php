<!-- projectManage.php -->

<!DOCTYPE html>

<html lang="ko">

<head>

	<!-- Title -->
	<title>Project Manage | Dasom</title>

	<!-- Meta Data -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, height=device-height">

	<!-- Import CSS -->
	<link rel="stylesheet" type="text/css" href="./css/project_projectManage.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script>
		//Sidebar Open Close
		function open_nav() {
		    document.getElementById("sidebar").style.width = "20%";
		    document.getElementById("content").style.width = "80%";
		}

		function close_nav() {
		    document.getElementById("sidebar").style.width = "0";
		    document.getElementById("content").style.width = "100%";
		}
	</script>

</head>
<body>

	<!-- Site Header -->
	<div id="header" class="header-setting">
		
		<!-- Project Button -->
		<div class="project-button check-button">
			<a href="" type="button">project</a>
		</div>

		<!-- Plus Button -->
		<div class="plus-button check-button">
			<a href="" type="button">+</a>
		</div>

		<!-- Site Title -->
		<div class="site-title check-button">
			<a href="">title</a>
		</div>

		<!-- Login Info Button -->
		<div class="login-info-button check-button">
			<a href="" type="button">login</a>
		</div>

	</div>

	<!-- Site Content -->
	<div id="content" class="content-setting">

		<!-- Sidebar Menu -->
		<div class="main-content">

			<!-- Manage Console Header -->
			<div class="manage-header">

				<!-- Project Title -->
				<div class="project-title">
					Project Title
				</div>

				<!-- Search -->
				<div class="search">
					Search
				</div>
			
			</div>

			<!-- Manage Console -->
			<div class="manage-console">
				
				<!-- Main Category -->
				<div class="main-category">

					<!-- Sub Category -->
					<div id="sub-category-board" class="sub-category">

						<div class="sub-category-title">
							board
						</div>

						<ul class="sub-category-content">
							
							<li>
								ddsdsdsdsdsd
							</li>

							<li>
								ddsdsdsdsdsd
							</li>

							<li>
								ddsdsdsdsdsd
							</li>

						</ul>
						
					</div>

					<div id="sub-category-overdued" class="sub-category">

						<div class="sub-category-title">
							overdued	
						</div>

						<ul class="sub-category-content">
							
						</ul>
						
					</div>

					<div id="sub-category-unfinished" class="sub-category">

						<div class="sub-category-title">
							unfinished
						</div>

						<ul class="sub-category-content">
							
						</ul>
					
					</div>

					<div id="sub-category-finished" class="sub-category">

						<div class="sub-category-title">
							finished
						</div>

						<ul class="sub-category-content">
							
						</ul>
						
					</div>
					
				</div>

			</div>

			<!-- Sidebar Menu Open Button -->
			<div class="sidemenu-open-button" onclick="open_nav()">
				<span>open</span>
			</div>

		</div>


		<!-- Sidebar Menu Content -->
		<div id="sidebar" class="sidemenu">
			<a href="javascript:void(0)" class="closebtn" onclick="close_nav()">▶</a>
			<a href="#">About</a>
			<a href="#">Services</a>
			<a href="#">Clients</a>
			<a href="#">Contact</a>
		</div>
		
	</div>

</body>
</html>