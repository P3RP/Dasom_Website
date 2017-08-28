<!-- index.php -->

<!DOCTYPE html>
<html lang="ko">
<head>

	<!-- Title -->
	<title>Project | Dasom</title>

	<!-- Meta Data -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, height=device-height">

	<!-- Import CSS -->
	<link rel="stylesheet" type="text/css" href="./css/project_index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

	<!-- Site Wrapper -->
	<div class="site-wrapper">

		<!-- Nav -->
		<div class="nav">
			<a href="http://khuphj.iwinv.net/main/">Main</a>
			<a href="http://khuphj.iwinv.net/wp/">Community</a>
		</div>

		<!-- Main Page -->
		<div class="main">
			
			<!-- Title -->
			<div class="title title-text">
				<p>Title</p>
			</div>

			<!-- Login Section -->
			<section class="login-section">

				<form action="../wp/wp-login.php" method="post">

					<div class="input-wrapper">
						<input type="text" name="log" class="login-section-content" placeholder="Username" required>
					</div>

					<div class="input-wrapper">
						<input type="password" name="pwd" class="login-section-content" placeholder="Password" spellcheck="false" autocomplete="off" required>
					</div>

					<div class="submit-wrapper">
						<input type="submit" name="wp-submit" value="로그인" class="login-btn">
					</div>

				</form>

			</section>

		</div>

	</div>

</body>
</html>