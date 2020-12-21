 <?php include 'inc/header.php'; ?>
<?php 
	Session::checkSession();
	$total = $exm->getTotalRows(); 
?>
<style>
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
     width: 150px;
 }
</style>
<div class="main">
<h1>Total Questions & Ans : <?php echo $total; ?></h1>
	<div class="viewans">
		<table> 
		<?php
			$getQues = $exm->getQueByOrder();
			if($getQues){
				while($question = $getQues->fetch_assoc()){
			
		?>
			<tr>
				<td colspan="2">
				 <h3>Que <?php echo $question['quesNo']; ?>: <?php echo $question['ques']; ?></h3>
				</td>
			</tr>
			<?php 
				$number = $question['quesNo'];
				$answer = $exm->getAnswer($number);   
				if($answer){
					while($result = $answer->fetch_assoc()){
			?>
			<tr>
				<td>
				 <input type="radio"/>
				 <?php 
						if($result['rightAns'] == '1'){
							echo "<span style='color:blue'>".$result['ans']."</span>";
						}else{
							echo $result['ans'];
						}
					?>
				</td>
			</tr>
				<?php } } ?>
			<?php } } ?>
		</table>
		<a href="starttest.php">Again Start Exam ?</a>
</div>
 </div>