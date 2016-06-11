<!-- 
 Site : http:www.somrat.info
 -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="jquery autocomplete invoice, jquery autocomplete invoice module, invoice using jqueryautocomplete, jquery invoice module  autocomplete, invoice using jquery autocomplete">
    <meta name="keywords" content="jquery autocomplete invoice, jquery autocomplete invoice module, invoice using jqueryautocomplete, jquery invoice module  autocomplete, invoice using jquery autocomplete">
    <meta name="author" content="muni">
    <link rel="icon" href="../../favicon.ico">

    <title>Turst One Hospital</title>

   
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Noto+Serif:400,700"> 
    <!-- Bootstrap core CSS -->
    <link href="css/jquery-ui.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>


    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Smart Invoice</a>
        </div>
        <!-- <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"> <a href=""><i class="fa fa-home"></i>Home</a> </li>
            <li><a href=""> <i class="fa fa-book"></i> Demo </a></li>
            <li><a href=""> <i class="fa fa-bank"></i> Blog </a></li>
            <li><a href=""> <i class="fa fa-file"></i> Forum </a></li>
          </ul>
        </div><!--/.nav-collapse --> 
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container content">
    	<div class='row'>
    		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
    			<h1 class="text-center title">Trust One Hospital</h1>
    		</div>
    	</div>

      <div class='row'>
        <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
          
        </div>
      </div>

      	<!-- <h2>From,</h2>
    	<div class='row'>
      		<div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>
      			<div class="form-group">
					<input type="email" class="form-control" id="companyName" placeholder="Company Name">
				</div>
				<div class="form-group">
					<textarea class="form-control" rows='3' id="companyAddress" placeholder="Your Address"></textarea>
				</div>
      		</div>
      	</div> -->
      	<!-- <h2>To,</h2> -->
        <?php 
        $a =0 ;
        $a = $a+1; 
        ?>
      	<div class='row'>     		
        	<div class="col-md-5 pull-left">
             <div class="form-group">
               <input type="number" class="form-control" id="invoiceNo" placeholder="Invoice No" value="<?php echo $a; ?>">
           </div> 
          </div>
  				<div class="col-md-5 pull-right">
            <div class="form-group">
            <input type="date" class="form-control" id="invoiceDate" placeholder="Invoice Date">
            </div>    
          </div>
      		
      	</div>
      	<!-- <h2>&nbsp;</h2> -->
      	<div class='row'>
      		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
          <form class="" method="post" action="invoice_save.php">
      			<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="2%"><input id="check_all" class="formcontrol" type="checkbox"/></th>
							<th width="15%">Item No</th>
							<th width="38%">Item Name</th>
							<th width="15%">Price</th>
							<th width="15%">Quantity</th>
							<th width="15%">Total</th>
						</tr>
					</thead>
					<tbody>
          
						<tr>
							<td><input class="case" type="checkbox"/></td>
							<td><input type="text" data-type="productCode" name="itemNo[]" id="itemNo_1" class="form-control autocomplete_txt" autocomplete="off"></td>
							<td><input type="text" data-type="productName" name="itemName[]" id="itemName_1" class="form-control autocomplete_txt" autocomplete="off"></td>
							<td><input type="number" name="price[]" id="price_1" class="form-control changesNo" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
							<td><input type="number" name="quantity[]" id="quantity_1" class="form-control changesNo" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
							<td><input type="number" name="total[]" id="total_1" class="form-control totalLinePrice" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
						</tr>
					</tbody>
				</table>
      		</div>
      	</div>
      	<div class='row'>
      		<div class='col-xs-12 col-sm-3 col-md-3 col-lg-3'>
      			<button class="btn btn-danger delete" type="button">- Delete</button>
      			<button class="btn btn-success addmore" type="button">+ Add More</button>
      		</div>
          
      		<div class='col-xs-12 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 col-sm-5 col-md-5 col-lg-5'>
				
					<div class="form-group">
						<label>Subtotal: &nbsp;</label>
						<div class="input-group">
							<div class="input-group-addon">Tk.</div>
							<input type="number" class="form-control" id="subTotal" placeholder="Subtotal" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
						</div>
					</div>
					<div class="form-group">
						<label>Percentage: &nbsp;</label>
						<div class="input-group">
							<div class="input-group-addon">Tk.</div>
							<input type="number" class="form-control" id="tax" placeholder="Percentage" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
               <div class="input-group-addon">%</div>
						</div>
					</div>
					<div class="form-group">
						<label>% Amount: &nbsp;</label>
						<div class="input-group">
							<input type="number" class="form-control" id="taxAmount" placeholder="Percentage" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">					
						</div>
					</div>

					<div class="form-group">
						<label>Without %: &nbsp;</label>
						<div class="input-group">
							<div class="input-group-addon">Tk.</div>
							<input type="number" class="form-control" id="totalAftertax" placeholder="Without Percentage" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
						</div>
					</div>
					<div class="form-group">
						<label>Discount Amount: &nbsp;</label>
						<div class="input-group">
							<div class="input-group-addon">Tk.</div>
							<input type="number" class="form-control" id="amountPaid" placeholder="Discount Amount" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
						</div>
					</div>
					<div class="form-group">
						<label>Total : &nbsp;</label>
						<div class="input-group">
							<div class="input-group-addon">Tk.</div>
							<input type="number" class="form-control amountDue" id="amountDue" placeholder="Total" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
						</div>
					</div>

          <div class="form-group col-md-6">
              <input type=submit name="submitbuttonname" value="submit" >
 
          </div>


				</form>
			</div>
      	</div>

      	<!-- <h2>Notes: </h2>
      	<div class='row'>
      		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
      			<div class="form-group">
					<textarea class="form-control" rows='5' id="notes" placeholder="Your Notes"></textarea>
				</div>
      		</div>
      	</div>	 -->	
    </div>
	<h2>&nbsp;</h2>
    <footer class="footer">
      <div class="container">
        <p class="text-muted text-center" style="color:#fff">Copyright By <a href="http://www.somrat.info/" target="_blank" style="color:#bdc3c7">www.somrat.info</a>.</p>
      </div>
    </footer>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/auto.js"></script>

  </body>
</html>




