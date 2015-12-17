<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Success</title>

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
          <li><a href="<?= base_url('/trips/new')?>">Add a new trip</a></li>
          <li><a href="<?= base_url('/destroy')?>">logout</a></li>
        </ul>
      </div>
    </nav>


<div class="container">
  <div class="row">
    <div class="col-md-10 text-center">
      <div class="page-header">
        <h1><?= ucwords($this->session->userdata('name')); ?><small> Welcome!</small></h1>
      </div><!-- end header --> 
    </div><!-- end col -->
  </div><!-- end row -->
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <table class="table table-striped">
        <h3>Your Trip scheduals</h3>
        <thead>
          <tr>
            <th>Destination</th>
            <th>Travel Start Date</th>
            <th>Travel End Date</th>
            <th>Plan</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($trips as $value) {?>
                <tr>
                  <td><a href="<?= base_url('trips/info/'.$trips["id"]);?>"><?php echo $trips['destination']; ?></a></td>
                  <td><?php echo $trips['travel_date_from']; ?></td>
                  <td><?php echo $trips['travel_date_to']; ?></td>
                  <td><?php echo $trips['description']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div><!-- end row -->

    <div class="col-md-10 col-md-offset-1">
      <table class="table table-striped">
        <h3>Other Users Travel PLans</h3>
        <thead>
          <tr>
            <th>Name</th>
            <th>Destination</th>
            <th>Travel Start Date</th>
            <th>Travel End Date</th>
            <th>Want to join?</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($others_trips as $others_values) {?>
                <tr>
                  <td><?php echo $trips['author_name']; ?></td>
                  <td><a href=""><?php echo $trips['destination']; ?></a></td>
                  <td><?php echo $trips['travel_date_from']; ?></td>
                  <td><?php echo $trips['travel_date_to']; ?></td>
                  <td><button href="<?= base_url('trip/join')?>" class="btn btn-success">Join</button></td>
                </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
</div><!--  end of container -->

          
     


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= base_url('js/bootstrap.min.js')?>"></script>
  </body>
</html>