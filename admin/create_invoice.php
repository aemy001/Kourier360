<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery -->
</head>
<body class="">
	
	<div class="container" style="min-height:500px;">
	<div class=''>
	</div>


<title>Create Invoice</title>
<script src="invoice.js"></script>
<link href="css/style.css" rel="stylesheet">

<div class="container content-invoice">
	<form action="" id="invoice-form" method="post" class="invoice-form" role="form" novalidate=""> 
		<div class="load-animate animated fadeInUp">
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<h2 class="title">PHP Invoice System</h2>
				
				</div>		    		
			</div>
			<input id="currency" type="hidden" value="$">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<h3>From,</h3>
                        <p> Admin</p>
                        <p> New Delhi 110096 India.</p>
                        <p>12345678912</p>
                        <p>admin@phpzag.com</p>
						
				</div>      		
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right">
					<h3>To,</h3>
					<div class="form-group">
						<input type="text" class="form-control" name="companyName" id="companyName" placeholder="Company Name" autocomplete="off">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="3" name="address" id="address" placeholder="Your Address"></textarea>
					</div>
					
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-bordered table-hover" id="invoiceItem">	
						<tr>
							<th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
							<th width="15%">Item No</th>
							<th width="38%">Item Name</th>
							<th width="15%">Quantity</th>
							<th width="15%">Price</th>								
							<th width="15%">Total</th>
						</tr>							
						<tr>
							<td><input class="itemRow" type="checkbox"></td>
							<td><input type="text" name="productCode[]" id="productCode_1" class="form-control" autocomplete="off"></td>
							<td><input type="text" name="productName[]" id="productName_1" class="form-control" autocomplete="off"></td>			
							<td><input type="number" name="quantity[]" id="quantity_1" class="form-control quantity" autocomplete="off"></td>
							<td><input type="number" name="price[]" id="price_1" class="form-control price" autocomplete="off"></td>
							<td><input type="number" name="total[]" id="total_1" class="form-control total" autocomplete="off"></td>
						</tr>						
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<button class="btn btn-danger delete" id="removeRows" type="button">- Delete</button>
					<button class="btn btn-success" id="addRows" type="button">+ Add More</button>
				</div>
			</div>
			<div class="row">	
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
					<h3>Notes: </h3>
					<div class="form-group">
						<textarea class="form-control txt" rows="5" name="notes" id="notes" placeholder="Your Notes"></textarea>
					</div>
					<br>
					<div class="form-group">
						<input type="hidden" value="<?php echo $_SESSION['userid']; ?>" class="form-control" name="userId">
						<input data-loading-text="Saving Invoice..." type="submit" name="invoice_btn" value="Save Invoice" class="btn btn-success submit_btn invoice-save-btm">						
					</div>
					
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<span class="form-inline">
						<div class="form-group">
							<label>Subtotal: &nbsp;</label>
							<div class="input-group">
								<div class="input-group-addon currency">$</div>
								<input value="" type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal">
							</div>
						</div>
                        <br><br>
						<div class="form-group">
							<label>Tax Rate: &nbsp;</label>
							<div class="input-group">
								<input value="" type="number" class="form-control" name="taxRate" id="taxRate" placeholder="Tax Rate">
								<div class="input-group-addon">%</div>
							</div>
						</div>
                        <br><br>
						<div class="form-group">
							<label>Tax Amount: &nbsp;</label>
							<div class="input-group">
								<div class="input-group-addon currency">$</div>
								<input value="" type="number" class="form-control" name="taxAmount" id="taxAmount" placeholder="Tax Amount">
							</div>
						</div>	
                        <br><br>						
						<div class="form-group">
							<label>Total: &nbsp;</label>
							<div class="input-group">
								<div class="input-group-addon currency">$</div>
								<input value="" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total">
							</div>
						</div>
                        <br><br>
						<div class="form-group">
							<label>Amount Paid: &nbsp;</label>
							<div class="input-group">
								<div class="input-group-addon currency">$</div>
								<input value="" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Amount Paid">
							</div>
						</div>
                        <br><br>
						<div class="form-group">
							<label>Amount Due: &nbsp;</label>
							<div class="input-group">
								<div class="input-group-addon currency">$</div>
								<input value="" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Amount Due">
							</div>
						</div>
					</span>
				</div>
			</div>
			<div class="clearfix"></div>		      	
		</div>
	</form>			
</div>
</div>	



<div class="insert-post-ads1" style="margin-top:20px;">

</div>
</div>
</body></html>