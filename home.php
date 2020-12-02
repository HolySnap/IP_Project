<?php 
session_start();
include "connection.php";
if (isset($_SESSION['id'])) {
$query = "SELECT * FROM questions";
$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
$total = mysqli_num_rows($run);
?>

<html>

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- google fonts -->

	<!--  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;700&display=swap" rel="stylesheet">-->
	<!--  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;700&display=swap" rel="stylesheet">-->
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;700&family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Arvo:400,700&display=swap" rel="stylesheet">
	<!--FontAwesome -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/FortAwesome/Font-Awesome@5.13.0/css/all.css">

	<!-- Bootstrap CSS -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- custom css -->

	<link rel="stylesheet" href="css/styles.css">



	<title>IP Quiz</title>
</head>

<body>
	<div class="wrapper">
		<div class="container-fluid white-section">
			<header>
				<div class="jumbotron" style="background-color: #f0f0f0;">
					<h1 class="display-4">Welcome to IP QUIZ</h1>
					<p class="lead">This is just a simple quiz game to test your knowledge!</p>
					<hr class="my-4">
					<ul>
						<li><strong>Number of questions: </strong><?php echo $total; ?></li>
						<li><strong>Type: </strong>Multiple Choice</li>
						<li><strong>Estimated time for each question: </strong><?php echo $total * 0.05 * 60; ?> seconds</li>
						<li><strong>Score: </strong> &nbsp; +1 point for each correct answer</li>
					</ul>
					<br>
					<a class="btn btn-outline-dark" href="question.php?n=1" role="button"><b>Start Quiz</b></a>
					<a class="btn btn-outline-dark" href="exit.php" role="button"><b>Exit</b></a>
				</div>

			</header>
		</div>

		<footer>
			<div class="container-fluid">
				Copyright @ Dishant,Urvesh,Aditya,Aksh
			</div>
		</footer>
	</div>

</body>

</html>
<?php unset($_SESSION['score']); ?>
<?php }
else {
	header("location: index.php");
}
?>
