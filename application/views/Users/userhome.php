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
			<li><a href="">Profile</a></li>
			<li><a href="">WT</a></li>
			<li><a href="<?= base_url("admin/userjava") ?>">Java</a></li>

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
<section class="container section" id="dynamic_tab">
	 <?php 
			echo "<mark>" . $this->session->userdata('id') . "</mark>";	
		?>
	<div class="row">
    <div class="col s12 l6">
    	<h2 class="indigo-text text-darken-4">Quiz</h2>
    	  <ul class="tabs">
        <li class="tab col s3" ><a href="#test1" class="indigo-text text-darken-4">Test 1</a></li>
        <li class="tab col s3"><a href="#test2" class="indigo-text text-darken-4">Profile</a></li>
        <li class="tab col s3"><a href="#test3" class="indigo-text text-darken-4">Test 3</a></li>
        <li class="tab col s3"><a href="#test4" class="indigo-text text-darken-4">Test 4</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12" class="indigo-text text-darken-4">Test 1</div>
    <div id="test2" class="col s12" class="indigo-text text-darken-4">
<table>
        <thead>
          <tr>
              <th>id</th>
              <th>username</th>
              <th>email</th>
          </tr>
        </thead>

        <tbody>

        	<?php 
        		foreach($user_data as $data)
        		{ ?>

          <tr>
            <td><?php echo $data->id;?></td>
            <td><?php echo $data->username;?></td>
            <td><?php echo $data->email;?></td>
          </tr>
          
         <?php }?>
          
        </tbody>
      </table>
    </div>
    <div id="test3" class="col s12" class="indigo-text text-darken-4">Test 3</div>
    <div id="test4" class="col s12" class="indigo-text text-darken-4">Test 4</div>
  </div>

</section>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>	
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
	 $(document).ready(function(){
	 	$('.sidenav').sidenav();
	 	$('.tabs').tabs();
});
</script>
</body>
</html>