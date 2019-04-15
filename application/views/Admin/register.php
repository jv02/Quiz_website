<!DOCTYPE html>
<html>
<head>
	
	 <link href="<?= base_url("Assets/css/style.css") ?>" rel="stylesheet">
   	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <!--<Import Google Icon Font-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     
</head>
<body>
	
	<header id="header1">

 

		
<nav class="nav-wraper transparent">
	<div class="container">
		<a href="#" class="brand-logo">IU Quiz</a>

		<a href="#" data-target="mobile-links" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
			<li><a href="">Home</a></li>
			<li><a href="">About</a></li>
			<li><a href="<?= base_url("admin/userlogin") ?>">User Login</a></li>
			<li><a href="<?= base_url("admin/adminlogin") ?>">Admin Login</a></li>
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
<section class="container section" id="">
	

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