		<div class="row">
			<div class="col-sm-12">
				<h2 class="title text-center"><strong>Login to your account</strong></h2>
			</div>
		</div>
	</div>
		<div class="container">

			<?php echo $this->session->flashdata('msg'); ?>

					<div class="login-form"><!--login form-->
						<form method="POST" action="<?php echo base_url(). 'index.php/Login/auth' ?>">
							<label>Username : </label>
							<input type="text" name="username" placeholder="Input Your Username" />
							<label>Password : </label>
							<input type="Password" name="password" placeholder="Input Your Password" />
							<button type="submit" class="btn btn-default">Sign In</button>
							<p>don't have an account? <a href="<?php echo base_url().'index.php/Frontend/register'?>">Register Now</a></p>
						</form>
					</div><!--/login form-->
				</div>
				<p>&nbsp;</p>