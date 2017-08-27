<!-- projectBoard.php -->

<!DOCTYPE html>

<html lang="ko">

<head>

	<!-- Title -->
	<title>Project Board | Dasom</title>

	<!-- Meta Data -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, height=device-height">

	<!-- Import CSS -->
	<link rel="stylesheet" type="text/css" href="./css/project_projectBoard.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


	<script>

		function dropdown_menu() {
		    document.getElementById("myDropdown").classList.toggle("show");
		}

		// Close the dropdown if the user clicks outside of it
		window.onclick = function(event) {
		  if (!event.target.matches('.dropbtn')) {

		    var dropdowns = document.getElementsByClassName("dropdown-content");
		    var i;
		    for (i = 0; i < dropdowns.length; i++) {
		      var openDropdown = dropdowns[i];
		      if (openDropdown.classList.contains('show')) {
		        openDropdown.classList.remove('show');
		      }
		    }
		  }
		}

	</script>

	<script type="text/javascript">

		function open_title_section() {
			document.getElementById("project-about-write").style.display = "block";
		}

		function close_title_section() {
			document.getElementById("project-about-write").style.display = "none";
			document.getElementById('title-place').value = "";
		}

		function create_project(pos) {
			var date = new Date();

			var year  = date.getFullYear();
			var month = date.getMonth() + 1;
			var day   = date.getDate();

			if (("" + month).length == 1) {
				month = "0" + month;
			}
			if (("" + day).length   == 1) {
				day   = "0" + day;
			}
			
			if(document.getElementById('title-place').value!="") {
				var project_text = "<li><div class='project'><div class='project-title'>";
				project_text += document.getElementById('title-place').value;
				project_text += "</div><div class='project-explain'>";
				project_text += document.getElementById('explain-place').value;
				project_text += "</div><div class='project-date'>";
				project_text += year + "-";
				project_text += month + "-";
				project_text +=	day;

				project_text += "</div></div></li>";

				$(pos).append(project_text);

				document.getElementById("project-about-write").style.display = "none";
				document.getElementById('title-place').value = "";
				document.getElementById('explain-place').value = "";
			}
		}

	</script>


</head>
<body>

	<!-- Mobile Warning -->
	<div class="mobile-warning">
		You can't use it in MOBILE!!!!!
	</div>

	<!-- Site Wrapper -->
	<div class="site-wrapper">
		
		<!-- Slide Menu -->
		<div class="dropdown">
			<button onclick="dropdown_menu()" class="dropbtn">

				<div class="menu-button"></div>
				<div class="menu-button"></div>
				<div class="menu-button"></div>

			</button>

			<div id="myDropdown" class="dropdown-content">
				<a href="javascript:open_title_section()">Create New Project</a>
				<a href="#about">About</a>
				<a href="#contact">Contact</a>
			</div>

		</div>

		<!-- Main Page -->
		<div class="main">

			<!-- Project Board -->
			<div class="project-board">
				
				<!-- Project Board Title -->
				<div class="project-board-title">

					<div>
						<h1>Personal Project</h1>
					</div>

				</div>

				<!-- Project List -->
				<ul class="project-list">

					<li>

						<div class="project-create-button" onclick="open_title_section()">+</div>

						<div class="project-about-style" id="project-about-write">

							<div class="project-about-content">

								<div class="close-button" onclick="close_title_section()">×</div>

								<label for="title-place">Title</label>
								<input type="text" class="title-place-style" id="title-place" placeholder="Title">

								<label for="explain-place">Explain</label>
								<input type="text" class="explain-place-style" id="explain-place" placeholder="Explain">

								<input type="button" onclick="create_project('.project-list')" value="Create" class="create-active-button">

							</div>

						</div>
						
					</li>

				</ul>

			</div>

		</div>

	</div>

</body>
</html>