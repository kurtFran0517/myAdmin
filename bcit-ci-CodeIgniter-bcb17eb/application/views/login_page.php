<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="loginbox">
        <img src="images/logo2.jpg" class ="logo" width="150" >
        <form method="POST" action="<?php echo base_url(); ?>index.php/user/login">
            <fieldset>
                <div class="form-group">
                    <input class="form-control" placeholder="username" type="username" name="username" required>
                </div>
                <div class="form-group1">
                    <input class="form-control" placeholder="password" type="password" name="password" required>
                </div>
                
                <div class ="button">
                    <button type="submit" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                </div>
            </fieldset>

            
            <div class ="remember_checkbox">
                <label><input type="checkbox"/> Remember me</label>
            </div>
            
            <p class="copy">Copyright &copy; 2022</p>
        </form>

        <?php
				if($this->session->flashdata('error')){
					?>
					<div class="alert alert-danger text-center" style="margin-top:20px;">
						<?php echo $this->session->flashdata('error'); ?>
					</div>
					<?php
				}
			?>
    </div>
</body>
</html>