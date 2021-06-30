<html>
<head>
<style>
		body
		{
			height: 700px;
			width: 490px;
			border: 5px solid black;
			
		}
		th, tr, td
		{
			color:black;
			width: 300px;
			height: 50px;
			font-family:consolas;
			
		}
	
		
	</style>
</head>
<body>

	<?php
	$tablen = $_POST['tableno'];
	$itemname =$_POST['items'];
	$itemprice =$_POST['prices'];
	$quantity = $_POST['quantity'];
	
	if( empty($tablen) || empty($itemname)|| empty($itemprice)||  empty($quantity))
	{
	die(" Please fill all the fields ");
	}
	
	$items = explode("-",$itemname);
	$price = explode("-",$itemprice);
	$quantity = explode("-",$quantity);
	
	
	$item_count = count($items); 
	$price_count = count($price);
	$quan_count = count($quantity);
 
 
 
	if(($item_count!= $price_count) || ($price_count != $quan_count) || ($item_count!= $quan_count ))
	{
	die("The number of items, price and quantity should match ");
	}
	?>
 
 
	<table align=center ><br>
 
	<tr><th colspan= 2><h2>ESTIMATE</h2>MANGALURU <br>PH-no:254655 <br><h3>CASH BILL</h3></th></tr>
    <th style="width:200px;margin: left 10px;" align=left> <br> Date : <?php echo date("d-m-Y"); ?> 
	<?php date_default_timezone_set("Asia/Calcutta");
	
	echo date("h:i:s a"); ?> </p></th>
	
	<th style="width:0px;margin: top 10px;"align=right>BIL No:  <?php echo $tablen; ?>
	 </td>
	
	</table>
	
	<table>
	<tr style="height:10px;">
	</tr>
	
	<tr style="height:50px;"><th style=" border-bottom: 3px dashed black; border-top:3px dashed black;">  ITEM </th>
 
	<th style=" border-bottom: 3px dashed black; border-top:3px dashed black;"> QTY </th>
	
	<th style=" border-bottom: 3px dashed black; border-top:3px dashed black;text-align:left;"> PRICE </th>
 
 
	<th style=" border-bottom: 3px dashed black; border-top:3px dashed black;"> AMOUNT </th>
	</tr>
	
	<?php 
	for($i=0; $i<$item_count ;$i++)
	{	
	echo "<tr><td> &emsp; &nbsp; ".$items[$i]." </td>
	<td align=center>" .$quantity[$i]."kg</td> 
	<td>".$price[$i]."</td><td align=center>" .($quantity[$i]*$price[$i]). "</td>
	</tr>";
	}
	echo "</table>";
	echo "<table>";
	$tamount=0;
	for($i=0; $i<$item_count ;$i++)
	{
		$amount[$i]=$quantity[$i]*$price[$i];
		$tamount=$tamount+$amount[$i];
	}
	
	
	echo "<tr><th align=left> &emsp; SUB TOTAL</th><th align=center> &emsp; &emsp; &emsp; &emsp; &emsp; &nbsp;" .$tamount;"</th></tr>";
	?>
	
	<tr> <th style="border-top:3px dashed black; text-align:left; font-size:24px;" > &nbsp; GRAND TOTAL</th>  </th> <th style="font-size:20px;  border-top:3px dashed black; "> &emsp; &emsp; &emsp; &emsp;  &nbsp;  <?php echo "₹ ".$tamount; ?></th>
	</tr>
	<th style="border-top:3px dashed black; text-align:left; font-size:24px;" >
	<th style="border-top:3px dashed black; text-align:left; font-size:24px;" >
	
	</table>
	
	<h3 style="font-family:consolas; text-align:center;color:black; "> THANK YOU VISIT AGAIN!!!! </h3> 

</body>
</html>