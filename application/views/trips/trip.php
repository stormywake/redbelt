<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Trip Planner New Trip</title>

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
          <li><a href="<?= base_url('/reviews/new')?>">Add a new trip!</a></li>
          <li><a href="<?= base_url('/destroy')?>">logout</a></li>
        </ul>
      </div>
    </nav>
    
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h2 class="page-header"><?php echo $trip_info['destination'] ?></h2>
          <ul class="list-group">
            <li class="list-group-item"><?php echo $trip_info['name'];?></li>
            <li class="list-group-item"><?php echo $trip_info['description'];?></li>
            <li class="list-group-item"><?php echo $trip_info['travel_date_from'];?></li>
            <li class="list-group-item"><?php echo $trip_info['travel_date_to'];?></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h2>Other Users Joining the trip</h2>
        </div>
      </div>
    </div>
            
 




 
          
     


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= base_url('js/bootstrap.min.js')?>"></script>
  </body>
</html>