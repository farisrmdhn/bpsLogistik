<!DOCTYPE html>
<html>
<head>
	<title>BPS Logistik - Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="text-align: center;">
				<img src="http://www.bpslogistik.co.id/assets/images/logo_warna.png" style="width: 25em; margin-top: 5em">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12" style="text-align: center; margin-top: 2em;">
				<h3>Admin Login</h3>
			</div>
			<div class="col-lg-6 offset-lg-3">
				<?php echo form_open('admin/login'); ?>
					<div class="form-group">
					      <label>username</label>
					      <input type="text" class="form-control" name="username" placeholder="username">
					    </div>
					    <div class="form-group">
					      <label>password</label>
					      <input type="password" class="form-control" name="password" placeholder="password">
					    </div>
					    <button type="submit" class="btn btn-primary float-right">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>