<!DOCTYPE html>
<html>
<head>
	
	 <link href="<?= base_url("Assets/css/style.css") ?>" rel="stylesheet">
   	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <!--<Import Google Icon Font-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     
</head>
<body>
	
	<header id="nav1">

 

		
<nav class="nav-wraper transparent">
	<div class="container">
		<a href="#" class="brand-logo">IU Quiz</a>

		<a href="#" data-target="mobile-links" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
			<li><a href="">Home</a></li>
			<li><a href="">About</a></li>
			<li><a href="">User Login</a></li>
			<li><a href="">Admin Login</a></li>
		</ul>
	</div>
</nav>

<ul class="sidenav grey lighten-2" id="mobile-links">
	<li><a href="">Home</a></li>
	<li><a href="">About</a></li>
	<li><a href="">Contact</a></li>
	<li><a href="">Login</a></li>
</ul>

   </header>

<!-- photo / grid -->
<section class="container section" id="login_form">
	<div class="row">
	<div class="col s12 l5 offset-l4" style="margin-top: 40px">
		<?php 
			echo "<mark>" . $this->session->flashdata('message') . "</mark>";	
		?>
		<form action="<?php echo site_url('admin/adminregistersubmit');?>" method="GET">
			<div class="input-field">
			<input type="text" name="username">
			<label for="username">Username</label>
			</div>
			<div class="input-field">
			<input type="email" name="email">
			<label for="email">Email</label>
			</div>

			<div class="input-field">
			<input type="text" name="password">
			<label for="password">password</label>
			</div>

			<button input type="submit" class="btn waves-effect waves-dark" style="margin-top: 10px;">Register</button>
			<a href="<?= base_url("admin/adminlogin") ?>" style="margin-top: 10px; margin-left: 30px;">Sign In</a>
		</form>
	</div>
</div>

</section>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>	
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
	 $(document).ready(function(){
	 	$('.sidenav').sidenav({

	 	})
	 })
  
</script>
</body>
</html>