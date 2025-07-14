<?php
session_start();
if(isset($_POST['signin']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql ="SELECT EmailId,Password FROM tblusers WHERE EmailId=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['login']=$_POST['email'];
echo "<script type='text/javascript'> document.location = 'package-list.php'; </script>";
} else{
	
	echo "<script>alert('Invalid Details');</script>";

}

}

?>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
										<div class="login-left">
												<ul>
													<li><a class="fb" href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwit79qG8tKBAxVpI4MDHR2ZD8AYABAAGgJzZg&gclid=Cj0KCQjwjt-oBhDKARIsABVRB0ynysn7dNCveUDimIjvA4rrtAl0uiLv2seoEN1WCrANOwMoNxwIeLMaAroKEALw_wcB&ohost=www.google.com&cid=CAESVeD2cAay8V5CaYz0b21nCGSMfGSpDIThrOs947o93PY5bHDHT1DNb9STXkYOZDxNCBWs8qt6Eh2iLz7wgG3hYMu7Ez20SqopKbW9RjzOmR2bsAS5raE&sig=AOD64_1AZpofs6_XlgRba9ZWXauwD8Gmyw&q&adurl&ved=2ahUKEwjNz9SG8tKBAxVmyDgGHc_eDPQQ0Qx6BAgJEAE"><i></i>Facebook</a></li>
													<li><a class="goog" href="#"><i></i>Google</a></li>
													
												</ul>
											</div>
									<div class="login-right">
										<form method="post">
											<h3>Signin with your account </h3>
	<input type="text" name="email" id="email" placeholder="Enter your Email"  required="">	
	<input type="password" name="password" id="password" placeholder="Password" value="" required="">	
											<h4><a href="forgot-password.php">Forgot password</a></h4>
											
											<input type="submit" name="signin" value="SIGNIN">
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <a href="page.php?type=terms">Terms and Conditions</a> and <a href="page.php?type=privacy">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>