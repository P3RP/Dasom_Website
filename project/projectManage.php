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
		    document.getElementById("sidebar").style.width = "0%";
		    document.getElementById("content").style.width = "98%";
		}
	</script>

	<script type="text/javascript">
		
		$(document).ready(function(){
			$(".main-category-title").click(function(){
				$(this).next("ul").slideToggle();
			});
		});

		$(document).ready(function(){
			$(".sub-category-title").click(function(){
				$(this).next("ul").slideToggle();
			});
		});

		$(document).ready(function(){
			$(".project-button").click(function(){
				$(".project-button-content").slideToggle();
				$(".plus-button-content").slideUp();
			});
		});

		$(document).ready(function(){
			$(".plus-button").click(function(){
				$(".project-button-content").slideUp();
				$(".plus-button-content").slideToggle();
			});
		});

		$(document).ready(function(){
			$(".login-info-button").click(function(){
				$(".login-info-button-content").slideToggle();
			});
		});

	</script>

</head>
<body>

	<!-- Site Header -->
	<div id="header" class="header-setting">
		
		<!-- Project Button -->
		<div class="project-button">
			<a href="javascript:void(0)" type="button" class="header-text-style">Project</a>
		</div>

		<!-- Project Content -->
		<div class="project-button-content">
			
			<ul class="project-list">
				<li>Project Title 1</li>
				<li>Project Title 2</li>
				<li>Project Title 3</li>
				<li>Project Title 4</li>
			</ul>

		</div>

		<!-- Plus Button -->
		<div class="plus-button">
			<a href="javascript:void(0)" type="button" class="header-text-style">+</a>
		</div>

		<!-- Plus Button Content -->
		<div class="plus-button-content">
			
			<ul class="plus-list">
				<li>New Category</li>
				<li>New Board</li>
				<li>New Work</li>
			</ul>

		</div>

		<!-- Site Title -->
		<div class="site-title">
			<p class="header-text-style">Project Manage</p>
		</div>

		<!-- Login Info Button -->
		<div class="login-info-button">
			<a href="javascript:void(0)" type="button" class="header-text-style">L</a>
		</div>

		<!-- Login Info Button Content -->
		<div class="login-info-button-content">
			
			<ul class="login-info-list">
				<li>Log Out</li>
				<li>Go To Main</li>
				<li>Go To Community</li>
			</ul>

		</div>

	</div>

	<!-- Site Content -->
	<div id="content" class="content-setting">

		<div class="main-content">

			<!-- Manage Console -->
			<div class="manage-console">

				<!-- Project Title -->
				<div class="project-title">
					Project Title
				</div>

				<!-- Search -->
				<input type="text" name="search" value="" class="search-style" placeholder="Search">

				<!-- Search Button -->
				<button class="search-style">
					<span class="glyphicon glyphicon-search btn-style"></span>
				</button>
				
				<!-- Main Category -->
				<div class="main-category-title">
					Category Title
				</div>

				<ul class="main-category">

					<!-- Sub Category -->
					<li id="sub-category-board" class="sub-category">

						<div class="sub-category-title">
							board
						</div>

						<ul class="sub-category-content">
							
							<li>
								
								<div class="board-title">
									Title
								</div>

								<div class="board-content">
									Content ddddddddddddddddddddddddddd dddddddddddddddddddddd
								</div>

								<div class="board-info">
									
									<div class="board-date">
										Date
									</div>

									<div class="board-comment">
										Comment
									</div>

								</div>

							</li>

							<li>
								
								<div class="board-title">
									Title
								</div>

								<div class="board-content">
									Content ddddddddddddddddddddddddddd dddddddddddddddddddddd
								</div>

								<div class="board-info">
									
									<div class="board-date">
										Date
									</div>

									<div class="board-comment">
										Comment
									</div>

								</div>

							</li>

							<li>
								
								<div class="board-title">
									Title
								</div>

								<div class="board-content">
									Content ddddddddddddddddddddddddddd dddddddddddddddddddddd
								</div>

								<div class="board-info">
									
									<div class="board-date">
										Date
									</div>

									<div class="board-comment">
										Comment
									</div>

								</div>

							</li>

							<li>
								
								<div class="board-title">
									Title
								</div>

								<div class="board-content">
									Content ddddddddddddddddddddddddddd dddddddddddddddddddddd
								</div>

								<div class="board-info">
									
									<div class="board-date">
										Date
									</div>

									<div class="board-comment">
										Comment
									</div>

								</div>

							</li>

							<li>
								
								<div class="board-title">
									Title
								</div>

								<div class="board-content">
									Content ddddddddddddddddddddddddddd dddddddddddddddddddddd
								</div>

								<div class="board-info">
									
									<div class="board-date">
										Date
									</div>

									<div class="board-comment">
										Comment
									</div>

								</div>

							</li>

						</ul>
						
					</li>

					<li id="sub-category-overdued" class="sub-category">

						<div class="sub-category-title">
							overdued	
						</div>

						<ul class="sub-category-content">
							
							<li>
								
								<div class="work-title">
									Title
								</div>

								<div class="work-content">
									Content ddddddddddddddddddddddddddd dddddddddddddddddddddd
								</div>

								<div class="work-info">
									
									<div class="work-success">
										Success Percentage
									</div>

									<div class="work-date">
										Date
									</div>

									<div class="work-member">
										Comment
									</div>

								</div>

							</li>

							<li>
								
								<div class="work-title">
									Title
								</div>

								<div class="work-content">
									Content ddddddddddddddddddddddddddd dddddddddddddddddddddd
								</div>

								<div class="work-info">
									
									<div class="work-success">
										Success Percentage
									</div>

									<div class="work-date">
										Date
									</div>

									<div class="work-member">
										Comment
									</div>

								</div>

							</li>

							<li>
								
								<div class="work-title">
									Title
								</div>

								<div class="work-content">
									Content ddddddddddddddddddddddddddd dddddddddddddddddddddd
								</div>

								<div class="work-info">
									
									<div class="work-success">
										Success Percentage
									</div>

									<div class="work-date">
										Date
									</div>

									<div class="work-member">
										Comment
									</div>

								</div>

							</li>

							<li>
								
								<div class="work-title">
									Title
								</div>

								<div class="work-content">
									Content ddddddddddddddddddddddddddd dddddddddddddddddddddd
								</div>

								<div class="work-info">
									
									<div class="work-success">
										Success Percentage
									</div>

									<div class="work-date">
										Date
									</div>

									<div class="work-member">
										Comment
									</div>

								</div>

							</li>

							<li>
								
								<div class="work-title">
									Title
								</div>

								<div class="work-content">
									Content ddddddddddddddddddddddddddd dddddddddddddddddddddd
								</div>

								<div class="work-info">
									
									<div class="work-success">
										Success Percentage
									</div>

									<div class="work-date">
										Date
									</div>

									<div class="work-member">
										Comment
									</div>

								</div>

							</li>

						</ul>
						
					</li>

					<li id="sub-category-unfinished" class="sub-category">

						<div class="sub-category-title">
							unfinished
						</div>

						<ul class="sub-category-content">
							
							<li>
								
								<div class="work-title">
									Title
								</div>

								<div class="work-content">
									Content ddddddddddddddddddddddddddd dddddddddddddddddddddd
								</div>

								<div class="work-info">
									
									<div class="work-success">
										Success Percentage
									</div>

									<div class="work-date">
										Date
									</div>

									<div class="work-member">
										Comment
									</div>

								</div>

							</li>

						</ul>
					
					</li>

					<li id="sub-category-finished" class="sub-category">

						<div class="sub-category-title">
							finished
						</div>

						<ul class="sub-category-content">
							
							<li>
								
								<div class="work-title">
									Title
								</div>

								<div class="work-content">
									Content ddddddddddddddddddddddddddd dddddddddddddddddddddd
								</div>

								<div class="work-info">
									
									<div class="work-success">
										Success Percentage
									</div>

									<div class="work-date">
										Date
									</div>

									<div class="work-member">
										Comment
									</div>

								</div>

							</li>

						</ul>
						
					</li>
					
				</ul>

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