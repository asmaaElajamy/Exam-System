<?php include 'inc/header.php'; ?>
<?php
	Session::checkSession();
	$question = $exm->getQuestion();
	$total = $exm->getTotalRows();
?>
<style>
.starttest p{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 23px;
		color:#008CBA;
}
.starttest ul{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 23px;
		color:#008CBA;
}
.starttest h2{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 25px;
		color:#008CBA;
}
.starttest h3{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 23px;
		color:red;
}
.main h1 {
     background: #008CBA none repeat scroll 0 0;
     font-family: "Times New Roman", Times, serif;
     box-shadow: 2px 2px 0 1px #999;
     color: #010002;
     margin: 10px auto 25px;
     padding: 4px;
     text-align: center;
     width: 400px;
 }
 .main a{
	background: #008CBA none repeat scroll 0 0;
     font-family: "Times New Roman", Times, serif;
     box-shadow: 2px 2px 0 1px #999;
     color: #010002;
     margin: 10px auto 25px;
     padding: 4px;
     text-align: center;
     width: 100px;
 }
</style>
<div class="main">
<h1>Welcome to Online System</h1>
	<div class="starttest">
	<h2>Test your knowledge</h2>
	<p>This is multiple system choice Exam to test your knowledge</p>
	<ul>
		<li><strong>Number of Questions : </strong> <?php echo $total; ?></li>
		<li><strong>Question Type : </strong> Multiple Choices</li>
	</ul>
	<h3>You will get only 60 seconds for each question.</h3>
	<a href="test.php?q=<?php echo $question['quesNo']; ?>">Start Test</a>
	</div>
  </div>
