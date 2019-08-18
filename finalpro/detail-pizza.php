<!DOCTYPE html>
<html lang="en">
<head>
  <title>landing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="detail-pizza">
</head>
<body>
<div class="Container-fluid">
      <div class="image">
            <img src="jumbo-pizza.jpg" width="100%" height="200px">
      </div>
</div>
<div class="container">
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-lg-2" for="email">Size of the pizza</label>
      <div class="col-sm-6">
        <select class="form-control">
             <option>Small</option>
             <option>Large</option>
             <option>Extra Large</option>
          </select>
      </div>
    </div><br>
    <div class="form-group">
      <label class="control-label col-lg-2">Toppings</label>
      <div class="col-sm-6">          
        <select class="form-control">
             <option>1</option>
             <option>2</option>
             <option>3</option>
          </select>
      </div>
      </div><br>
    <div class="form-group">  
    <label class="control-label col-lg-2">How many pizza</label>      
      <div class="col-sm-offset-2 col-sm-6">
      
        <select class="form-control" id="exampleFormControlSelect1" style="float:left">
             <option>1</option>
             <option>2</option>
             <option>3</option>
             <option>4</option>
             <option>5</option>
             <option>6</option>
          </select>
      </div><br><br>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <a href="#" style="height:15px;
	width:20px;
	color:#c03f22;
	border: solid 1px #c03f22;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:15px;
	padding-right:15px;
	border-radius:5px;
	margin="30px"">BUY</a>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <a href="#" style="height:15px;
  width:20px;
  color:#c03f22;
  border: solid 1px #c03f22;
  padding-top:10px;
  padding-bottom:10px;
  padding-left:15px;
  padding-right:15px;
  border-radius:5px;
  margin="30px";">CANCEL</a>
      </div>
  </form>
</div>
</body>