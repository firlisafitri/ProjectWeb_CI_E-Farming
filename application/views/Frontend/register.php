		<div class="row">
			<div class="col-sm-12">
				<h2 class="title text-center"><strong>Create your account</strong></h2>
			</div>
		</div>
	</div>
		<div class="container">


					<div class="login-form"><!--login form-->
						<form method="POST" action="<?php echo base_url(). 'index.php/Frontend/register_action' ?>">
							<label>Nama Lengkap : </label>
							<input type="text" name="nm_customer" placeholder="Input Your Name" />
							<label>Username : </label>
							<input type="text" name="username" placeholder="Input Your Username" />
							<label>Password : </label>
							<input type="Password" name="password" placeholder="Input Your Password" />
							<label>Email : </label>
							<input type="text" name="email" placeholder="Input Your Email" />
							<label>No Handphone : </label>
							<input type="text" name="nohp" placeholder="Input Your Handphone Number" />
							<label>Alamat Lengkap: </label>
							<input type="text" name="alamat" placeholder="Input Your Address" />
							<button type="submit" class="btn btn-default">Register</button>
						</form>
					</div><!--/login form-->
				</div>
				<p>&nbsp;</p>