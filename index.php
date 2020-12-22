<?php include 'inc/header.php'; ?>
<?php
	Session::checkLogin();
?>
<style>
.segment{
height: 150px;
margin-left: 260px;
padding-top: 20px;
width: 350px;
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
<h1>User Login</h1>
	<div class="segment">
	<form action="" method="post">
		<table class="tbl">    
			 <tr>
			   <td>Email :</td>
			   <td><input name="email" type="text" id = "email"></td>
			 </tr>
			 <tr>
			   <td>Password :</td>
			   <td><input name="password" type="password" id = "password"></td>
			 </tr>
			 
			  <tr>
			  <td></td>
			   <td  style="text-align: center;font-size: 25px;"><input class="button1" type="submit" id="loginsubmit" value="LogIn">
			   </td>
			 </tr>
       </table>
	   </form>
	   <p>New User ? <a href="register.php">Signup</a>For Free</p>
		<span class="empty" style ="display:none">Field Must Not be Empty !</span>
		<span class="error" style ="display:none">Email or Password not Matched !</span>
		<span class="disable" style ="display:none">User ID Disable !</span>
	</div>	
</div>