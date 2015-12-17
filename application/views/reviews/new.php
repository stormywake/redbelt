<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Review</title>

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
        <div class="col-md-10">
          <div class="page-header">
            <h1>Add a New Book Title and a Review</h1>
          </div>
        </div>
      </div>
    </div>
      <div class="container">
        <div class="row">
          <div class="col-md-10">
          <form class="form-horizontal" action="<?= base_url('reviews/create')?>" method="post">
            <div class="form-group">
              <label  class="col-sm-3 control-label">Book Title</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="title" placeholder="Book Title">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Choose from the list</label>
              <div class="col-sm-9">
                <select class="form-control">
                  <option value="Select an author" name="author_sel" selected disabled>Select an author</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Or add a new author</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="author" placeholder="Add new author">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Add review</label>
              <div class="col-sm-9">
                <textarea class="form-control" name="review" rows="3"></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Rating</label>
              <div class="col-sm-2">
                <select class="form-control" name="rating">
                  <option value="rate" selected disabled>Rate!</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label></label>
                <input type="submit" class="btn btn-success col-md-3 col-md-offset-9" value="Add new book review">
            </div>
          </form>
        </div>
      </div>
    </div>
 

            
 




 
          
     


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= base_url('js/bootstrap.min.js')?>"></script>
  </body>
</html>