<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Boo Reviews</title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/css/bootstrap.min.css" rel="stylesheet')?>">
    <link href="<?= base_url('assets/css/custom.css" rel="stylesheet')?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?= base_url('/home')?>">Home</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?= base_url('/reviews/new')?>">Add book and Review</a></li>
          <li><a href="<?= base_url('/destroy')?>">logout</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
    	<div class="row">
    		<div class="col-md-4 col-md-offset-4">
				<div>

        
          
          <h1>Login</h1>
          <form method="post" action="/Sessions/create">

          <!-- Display success message -->
          <?php 
            if($this->session->flashdata('success'))
              { ?>
                <div class="alert alert-success" role="alert">
                  <?= $this->session->flashdata('success'); ?>
                </div>
          <?php }
            if($this->session->flashdata('errors'))
              { ?>
                <div class="alert alert-danger" role="alert">
                  <?= $this->session->flashdata('errors'); ?>
                </div>


          <?php } ?>


						<div class="form-group">
							<label></label>
							<input type="text" class="form-control" name="email" placeholder="Email" autofocus>
						</div>

						<div class="form-group">
							<label></label>
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>

						<div class="form-group">
							<label></label>
							<input type="submit" class=" btn btn-success form-control" value="Login">
						</div>
					</form>

					<form action="/users/new" method="post">
						<div class="form-group">
							<label>New User?</label>
							<input type="submit" class=" btn btn-warning form-control" value="Create Account">
						</div>
					</form>

				</div>
    	</div>


    </div><!-- /.container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= base_url('js/bootstrap.min.js')?>"></script>
  </body>
</html>