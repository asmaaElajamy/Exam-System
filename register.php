<?php
	include 'inc/header.php';
?>
<style>
.segment{
height: 150px;
margin-left: 250px;
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
<h1>User Registration</h1>
	<div class="segment">
	<form action="" method="post">
		<table>
		<tr>
           <td>Name :</td>
           <td><input type="text" name="name" id = "name" required></td>
         </tr>
		<tr>
           <td>Username :</td>
           <td><input name="username" type="text" id="username" required></td>
         </tr>
         <tr>
           <td>Password :</td>
           <td><input type="password" name="password" id = "password" required></td>
         </tr>
         
         <tr>
           <td>E-mail :</td>
           <td><input name="email" type="text" id = "email" required></td>
         </tr>
         <tr>
           <td></td>
           <td style="text-align: center;font-size: 25px;"><input class="button1" type="submit" id="regsubmit" value="Signup"></td>
         </tr>
       </table>
	   </form>
	   <p>Already Registered ? <a href="index.php">Login</a> Here</p>
	   <span id = "state"></span>
	</div>
</div>