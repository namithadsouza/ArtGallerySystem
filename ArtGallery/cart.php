<?php
	$page="cart";
	$title="Cart";
	require_once('header.php');
	
?>
	  
      <div class="container-fluid cart-container">
				<div class="panel panel-default">
				  <div class="panel-heading">Cart</div>
				  <div class="panel-body">
					<table class="table cart_table" align="center">
					  <tr style="font-weight:bolder">
						<td></td>
						<td></td>
						<td>Product</td>
						<td>Price</td>
						<td>Quantity</td>
						<td>Total</td>
					  </tr>
					  <tr>
						<td>	
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
							<div class="input-group q_item_group">
							  <div class="input-group-addon add" onclick="btnClick('+')">+</div>
								<center><lable id="q_item" value="1">1</lable></center>
							  <div class="input-group-addon remove" onclick="btnClick('-')">-</div>
							</div>
						</td>
						<td>
						</td>
					  </tr>
					  <tr>
						<td colspan="4"></td>
						<td><button >Update Cart</button></td>
						<td><button>Proceed to Checkout</button></td>
					  </tr>
					</table>
						
				  </div>
				</div>	
      </div>
			
		 
		  

	<script type="text/javascript">
		
		function btnClick(x)
		{
			if(x=='+')
			{
				var a=document.getElementById("q_item").innerHTML;
				document.getElementById("q_item").innerHTML=parseInt(a)+1;
			}
			else
			{
				document.getElementById("q_item").innerHTML-=1;
			}
		}
	</script>
<?php
	require('footer.php');
?>