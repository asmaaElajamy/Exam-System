<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
		include_once ($filepath.'/../classes/Exam.php');
	$exm = new Exam();
?>
<style>
	.adminpanel{width:480px;color:#999;margin:20px auto 0;padding:10px;border:1px solid #ddd;}
</style>
<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$addQue = $exm->addQuestions($_POST);
	}
	$total = $exm->getTotalRows();
	$next = $total+1;
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
     width: 450px;
 }
 .button1 { 
  background-color: #008CBA; /* blue */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  width:120px;
  height: 30px;
  }
</style>
<div class="main">
<h1>Admin Dashboard - Add Question</h1>
<?php 
	if(isset($addQue)){
		echo $addQue;
	}
?>
	<div class = "adminpanel">
		<form action = "" method = "post">
		<table> 
			<tr>
				<td>Question No</td>
				<td>:</td>
				<td><input type = "number" value="<?php 
						if(isset($next)){
							echo $next;
						}
					?>" name ="quesNo" /></td>
			</tr>
			
			<tr>
				<td>Question</td>
				<td>:</td>
				<td><input type = "text" name ="ques" placeholder = "Enter Question...." required/></td>
			</tr>
			
			<tr>
				<td>Choice One</td>
				<td>:</td>
				<td><input type = "text" name ="ans1" placeholder = "Enter Choice One...." required/></td>
			</tr>
			
			<tr>
				<td>Choice Two</td>
				<td>:</td>
				<td><input type = "text" name ="ans2" placeholder = "Enter Choice Two...." required/></td>
			</tr>
			<tr>
				<td>Choice Three</td>
				<td>:</td>
				<td><input type = "text" name ="ans3" placeholder = "Enter Choice Three...." required/></td>
			</tr>
			<tr>
				<td>Choice Four</td>
				<td>:</td>
				<td><input type = "text" name ="ans4" placeholder = "Enter Choice Four...." required/></td>
			</tr>
			
			<tr>
				<td>Correct No.</td>
				<td>:</td>
				<td><input type = "number" name ="rightAns" required/></td>
			</tr>
			
			<tr>
				<td colspan = "3" align = "center" >
					<input class="button1" type = "submit" value = "Add Question"/>
			   </td>
			</tr>
		</table>
		</form>
	</div>
</div>