<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/loginheader.php');
	include_once ($filepath.'/../classes/Admin.php');
	$ad = new Admin();
?>
<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$adminData = $ad->getAdminData($_POST);
	}
?>
<style>
.adminlogin{
	font-family: "Times New Roman", Georgia, Serif;
		font-size: 20px;
		color:#040303;
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
  width:100px;
  height: 30px;
  }
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
</style>
<div class="main">
<h1>Admin Login</h1>
<div class="adminlogin">
	<form action="" method="post">
		<table>
			<tr> 
				<td>Username :</td>
				<td><input type="text" name="adminUser" required/></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="adminPass" required/></td>
			</tr>
			<tr>
				<td style="text-align: center;font-size: 25px;"><input class="button1" type="submit" name="login" value="Login Now"/></td>
			</tr>
			<tr>
				<td colspan="2">
				<?php
				if(isset($adminData)){
					echo $adminData;
				}
				?>
				</td>
			</tr>
		</table>
	</from>
</div>
</div>