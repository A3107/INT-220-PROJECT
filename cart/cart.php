<!DOCTYPE html>
<html>
<title>Online Order</title>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href="stylec.css" type="text/css" rel="stylesheet" />

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 style="text-align:center;color:red;background-color:green;">Special Menu</h1>	
		</div>
	</div>	
</div>
	
	<div class=row">
		<div class="col-lg-6" style="border:1px solid #bbb;">
			<div id="product-grid" >
			<div class="txt-heading">Products</div>
			<?php
			$product_array = $db_handle->runQuery("SELECT * FROM tblitems ORDER BY id ASC");
			if (!empty($product_array)) { 
				foreach($product_array as $key => $value){
			?>
					<div class="product-item">
					<form method="post" action="indexcart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
					<div style="box-shadow:1px 1px 12x black;"><strong ><?php echo $product_array[$key]["name"]; ?></strong></div>
					<div class="product-price"><?php echo "Rs ".$product_array[$key]["price"]; ?></div>
					<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
					</form>
					</div>
			<?php
					}
			}
			?>
			</div>
		</div>
		<div class="col-lg-6"style="border:1px solid #bbb;">
			<div id="shopping-cart">
			<div class="txt-heading">Add Menu items <a id="btnEmpty" href="indexcart.php?action=empty">Empty Cart</a></div>
			<?php
			if(isset($_SESSION["cart_item"])){
				$item_total = 0;
			?>	
			<table cellpadding="10" cellspacing="1">
			<tbody>
			<tr>
			<th style="text-align:left;"><strong>Name</strong></th>
			<th style="text-align:left;"><strong>Code</strong></th>
			<th style="text-align:right;"><strong>Quantity</strong></th>
			<th style="text-align:right;"><strong>Price</strong></th>
			<th style="text-align:center;"><strong>Action</strong></th>
			</tr>	
			<?php		
				foreach ($_SESSION["cart_item"] as $item){
					
					?>
							<tr>
								<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td>
							<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["code"]; ?></td>
							<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
							<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "Rs ".$item["price"]; ?></td>
							<td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><a href="indexcart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">Remove Item</a></td>
							</tr>
							<?php
					$item_total += ($item["price"]*$item["quantity"]);
					}
					?>

					<tr>
					<td colspan="5" align=right><strong>Total:</strong> <?php echo "Rs.= ".$item_total; ?></td>
					</tr>
					</tbody>
					</table>		
					  <?php
					}
					?>
			</div>
		</div>
	</div>
</div>
</BODY>
</HTML>	