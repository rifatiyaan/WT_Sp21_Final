<?php include 'main_header.php';?>


<!--sign up starts -->
<div class="center-login">
	<h1 class="text text-center">Sign Up</h1>
	<form class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name</h4> 
			<input type="text" name="name" value="<?php echo $name;?>" class="form-control">
            <span><?php echo err_name;?> </span>
		</div>
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" name="username" class="form-control">
            
		</div>
		<div class="form-group">
			<h4 class="text">Email</h4> 
			<input type="text" name="email" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name="password" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" value="Sign Up" class="form-control">
		</div>
    </form>
</div>

<!--sign up ends -->
<?php include 'main_footer.php';?>