<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/Exam.php');
	$exm = new Exam();
?>
<?php 
	if(isset($_GET['delque'])){
		$quesNo = (int)$_GET['delque'];
		 $delQue = $exm->delQuestion($quesNo);
	}
?>
<style>
	.main h1{
	background: #008CBA none repeat scroll 0 0;
     font-family: "Times New Roman", Times, serif;
     box-shadow: 2px 2px 0 1px #999;
     color: #010002;
     margin: 10px auto 25px;
     padding: 4px;
     text-align: center;
     width: 450px;
	}
	table.tblone th {
     background-color: #008CBA;
     border: 1px solid #999;
 }
</style>
<div class="main">
	<h1>Admin Dashboard - Question List</h1>
	<?php 
		if(isset($delQue)){
			echo $delQue;
		}
	?>
		<div class = "quelist">
			<table class = "tblone">
			<tr>
				<th width = "10%">No</th>
				<th width = " 70%">Questions</th>
				<th width = "20%">Action</th>
			</tr>
	<?php 
	
	$getData = $exm->getQueByOrder();
	 
	if($getData){
		$i = 0;
		while($result = $getData->fetch_assoc()){
			$i++;
	?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $result['ques']; ?></td>
				<td>
					<a onclick = "return confirm('Are you sure to Remove')" href = "?delque=<?php echo $result['quesNo']; ?>">Remove</a>
				</td>
			</tr>
	<?php } } ?>
			</table>
		<div/>
</div>