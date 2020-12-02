<?php session_start(); ?>
<?php include "connection.php";
if (isset($_SESSION['admin'])) {

if(isset($_POST['submit'])) {
	$question =htmlentities(mysqli_real_escape_string($conn , $_POST['question']));
	$choice1 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice1']));
	$choice2 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice2']));
	$choice3 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice3']));
	$choice4 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice4']));
	$correct_answer = mysqli_real_escape_string($conn , $_POST['answer']);


    $checkqsn = "SELECT * FROM questions";
	$runcheck = mysqli_query($conn , $checkqsn) or die(mysqli_error($conn));
	$qno = mysqli_num_rows($runcheck) + 1;

	$query = "INSERT INTO questions(qno, question , ans1, ans2, ans3, ans4, correct_answer) VALUES ('$qno' , '$question' , '$choice1' , '$choice2' , '$choice3' , '$choice4' , '$correct_answer') " ;
	$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
	if (mysqli_affected_rows($conn) > 0 ) {
		echo "<script>alert('Question successfully added'); </script> " ;
	}
	else {
		"<script>alert('error, try again!'); </script> " ;
	}
}

?>


<!DOCTYPE html>
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
	<header>
		<div class="container-fluid">
			<a href="index.php" class="btn btn-outline-dark">Home</a>
			<a href="add.php" class="btn btn-outline-dark">Add Question</a>
			<a href="allquestions.php" class="btn btn-outline-dark">All Questions</a>
			<a href="players.php" class="btn btn-outline-dark">Players</a>
			<a href="exit.php" class="btn btn-outline-dark">Logout</a>

		</div>
	</header>

	<main>
		<div class="container-fluid">
			<h2>Add a question...</h2>
			<br>
			<form method="post" action="">



				<p>
					<label>Question</label>

					<input type="text" name="question" required="">
				</p>
				<p>
					<label>Choice #1</label>
					<input type="text" name="choice1" required="">
				</p>
				<p>
					<label>Choice #2</label>
					<input type="text" name="choice2" required="">
				</p>
				<p>
					<label>Choice #3</label>
					<input type="text" name="choice3" required="">
				</p>
				<p>
					<label>Choice #4</label>
					<input type="text" name="choice4" required="">
				</p>
				<p>
					<label>Correct answer</label>
					<select name="answer">

						<option value="a">Choice #1</option>
						<option value="b">Choice #2</option>
						<option value="c">Choice #3</option>
						<option value="d">Choice #4</option>


					</select>
				</p>
				<p>

					<input type="submit" name="submit" value="Submit">
				</p>
			</form>
		</div>
	</main>



</body>

</html>

<?php } 
else {
	header("location: admin.php");
}
?>
