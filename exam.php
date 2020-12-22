<?php include 'inc/header.php'; ?>
<?php 
	Session::checkSession();
?>
<style>
.segment{
height: 150px;
margin-left: 265px;
padding-top: 20px;
width: 350px;
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
</style>
<div class="main">
<h1>Welcome to Online System</h1>
	<div class="segment">
	<h2>Start Test From Here</h2>
	<ul>
		<li><a href="starttest.php">Start Now...</a></li>
	</ul>
	</div>
	
  </div>