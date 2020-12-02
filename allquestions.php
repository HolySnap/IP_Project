<?php session_start(); ?>
<?php include "connection.php";
if (isset($_SESSION['admin'])) {
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

	<div class="container-fluid">
		<h1> All Questions</h1>
		<table class="data-table">
			<caption class="title">All questions</caption>
			<thead>
				<tr>
					<th>Q.NO</th>
					<th>Question</th>
					<th>Option1</th>
					<th>Option2</th>
					<th>Option3</th>
					<th>Option4</th>
					<th>Correct Answer </th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>

				<?php 
            
            $query = "SELECT * FROM questions ORDER BY qno DESC";
            $select_questions = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if (mysqli_num_rows($select_questions) > 0 ) {
            while ($row = mysqli_fetch_array($select_questions)) {
                $qno = $row['qno'];
                $question = $row['question'];
                $option1 = $row['ans1'];
                $option2 = $row['ans2'];
                $option3 = $row['ans3'];
                $option4 = $row['ans4'];
                $Answer = $row['correct_answer'];
                echo "<tr>";
                echo "<td>$qno</td>";
                echo "<td>$question</td>";
                echo "<td>$option1</td>";
                echo "<td>$option2</td>";
                echo "<td>$option3</td>";
                echo "<td>$option4</td>";
                echo "<td>$Answer</td>";
                echo "<td> <a href='editquestion.php?qno=$qno'> Edit </a></td>";
              
                echo "</tr>";
             }
         }
        ?>

			</tbody>

		</table>
	</div>
</body>

</html>

<?php } 
else {
	header("location: admin.php");
}
?>
