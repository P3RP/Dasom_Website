<!-- index.php -->

<!DOCTYPE html>

<html lang="ko">

<head>
	<link rel="import" href="./menu/menu.php">


	<!-- Meta Data -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, height=device-height">

	<!-- Title -->
	<title>DASOM</title>

	<!-- Import CSS -->
	<link rel="stylesheet" href="./style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- JavaScript -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script>
		// Scroll Function
	    function fnMove(pos){
	        var offset = $(pos).offset();
	        $('html, body').animate({scrollTop : offset.top}, 500);
	    }

	    // Sidebar Menu Functions
		function open_nav() {
		    document.getElementById('nav-button').style.width = "250px";
		}

		function close_nav() {
		    document.getElementById('nav-button').style.width = "0";
		}

	</script>

	<script type="text/javascript">
		//Top Button
		$(document).ready(function() {
			$(window).scroll(function() {
				var scrollPercent=(($(window).scrollTop()/ ($(document).height()-$(window).height()) * 100));
				if(scrollPercent != 0) {
					$("#top").removeClass("top-button-hide");
				} else {
					$("#top").addClass("top-button-hide");
				}
			});
		});

		function gotoTop(){
	        $('html, body').animate({scrollTop : 0}, 500);
	    }
	</script>

		<!-- Image Rolling -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://malsup.github.com/jquery.cycle2.js"></script>

</head>

<body>

	<!-- Top Button -->
	<div id="top" class="top-button top-button-hide">
		<a href="javascript:gotoTop()" type="button" class="btn btn-info">▲</a>
	</div>

	<!-- Dropdown Trigger -->
	<div class="menu-position">
		<!-- dropdown 버튼-->
		<a class='dropdown-button' href='#dropdown' data-activates='dropdown'>
			<i class="medium material-icons" style = "color: #f44336 ;">favorite</i>
		</a>

		<!-- Dropdown 메뉴들 -->
		<ul id='dropdown' class='dropdown-content'>
			<li><a style = "color:#000000;"><i class="material-icons" style = "color: #ffb300  ;">fingerprint</i>login</a></li>
			<li><a style = "color:#000000;"><i class="material-icons" style = "color: #80deea ;">usb</i>social</a></li>
			<li><a style = "color:#000000;"><i class="material-icons" style = "color: #03a9f4 ;">content_paste</i>project</a></li>
		</ul>
	</div>

	<!-- Nav Overlay for Mobile -->
	<div id="nav-button" class="sidenav">

		<!-- Button for Closing Overlay -->
		<a href="javascript:void(0)" class="closebtn" onclick="close_nav()">
			<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		</a>

		<div class="nav-contents">
			<a href="javascript:fnMove('#introduce')">About</a>
			<a href="javascript:fnMove('#picture')">Picture</a>
		</div>

	</div>


	<!-- Sections Wrapper -->
	<div class="section-wrapper">

		<!-- Menu Button Open -->
		<span class="overlay-button" onclick="open_nav()"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></span>

		<!-- Main Section -->
		<section id="main" class="full-page background-color-black">

			<div class="full-page vertical-container">

				<!-- Center Title -->
				<div class="drawsvg">
					<svg version="1.1" viewBox="0 0 700 300">
						<symbol id="fade-text">
							<text x="45%" y="40%" text-anchor="middle">
								DASOM
							</text>
							<text x="55%" y="62%" text-anchor="middle">
								♡♡♡♡
							</text>
						</symbol>
						<g>
							<use class="stroke" xlink:href="#fade-text"/>
							<use class="fill" xlink:href="#fade-text"/>
						</g>
					</svg>
				</div>

				<!-- Navigation Tag (For DeskTop) -->
				<div class="navigation-tag-position show-desktop">
					<a href="javascript:fnMove('#introduce')" class="navigation-style">About</a>
					<span class="navigation-style"> / </span>

					<a href="javascript:fnMove('#picture')" class="navigation-style">Picture</a>
				</div>

			</div>

		</section>

		<!-- Introduce Section -->
		<section id="introduce" class="full-page">
			<div class="introduce-title background-color-blue">
				<div class="introduce-title-content">
					title
				</div>
			</div>

			<div class="introduce-content background-color-green">
				<div class="introduce-content-text">
					fasdfasdfasdfadfsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
					dddddddddddddddddddddddddddddddddddd
					dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
					ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
					ddddddddddddddddddddddddddddddddddddddddddddddd
					dddddddddddddddddddddddddddddddd
					ddddddddddddddddddd
					dddddddddddddddddddddddddddd
					ddddddddddddddddddddddddddddddddddddddddddddddddddd
					ddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
					dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
					dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
					ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
					ddddddddddddddddddddddddddddddd
					ddddddddddddddddddddddddddddddddddddddd
					dddddddddddddddd
				</div>
			</div>
		</section>

		<!-- Picture Section -->
		<section id="picture" class="full-page background-color-yellow">

		<div class="vertical-container">

			<!-- Picture Slide -->
			<div class="cycle-slideshow" data-cycle-fx="scrollHorz"
			data-cycle-pause-on-hover="true" data-cycle-speed="200"
			data-cycle-prev="#prev" data-cycle-next="#next">

				<!-- Pictures -->
			    <img src="http://cfs.tistory.com/custom/blog/183/1835674/skin/images/1.jpg">
			    <img src="http://cfs.tistory.com/custom/blog/183/1835674/skin/images/2.jpg">
			    <img src="http://cfs.tistory.com/custom/blog/183/1835674/skin/images/3.jpg">
			    <img src="http://cfs.tistory.com/custom/blog/183/1835674/skin/images/4.jpg">
			    <img src="http://cfs.tistory.com/custom/blog/183/1835674/skin/images/5.jpg">
			    <img src="http://cfs.tistory.com/custom/blog/183/1835674/skin/images/6.jpg">

			</div>

			<!-- Picture Move Button -->
			<div class="picture-button picture-button-position">
				<a href=# type="button" id="prev" class="btn btn-primary btn-lg">Prev</a>
				<a href=# type="button" id="next" class="btn btn-primary btn-lg">Next</a>
			</div>

		</div>

		</section>

	</div>


</body>

</html>