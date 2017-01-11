
<html>
<head>
<meta charset="utf-8">
<title>Tip Calculator</title>
<style>
	 .outter_table { border: solid 1px black;
	 }
	 .calc{
	 	background-color: white;
	 }
	 .tip_result{
	 	color: blue;
	 }
	 .total_result{
	 	color: blue;
	 }
	 .inner_table{
	 	width:80%;
	 	margin-left:100px;
	 }
	 .submission{
	 	text-align:center;
	 }
</style>
</head>

<body style="background-color:powderblue;">


<div class="calc">
<form action="" method="POST">
<table class ="outter_table" style="width:100%">
<tr>
<th align="right">Tip Calculator</th>
</tr>
<tr>
	<td>Bill Subtotal: $</td>
	<td>
	<input type="text" name="bill"  value="<?php
	if ($_POST) {
		echo $_POST['bill'];
	}
	?>">
	</td>
</tr>
<tr>
	<td>Tip Percentage: </td>
</tr>


<tr>
<?php
for ($i = 1; $i <= 3; $i++) {
    ?>
        <td><input type="radio" name="percent" value="<?php echo 5*$i; ?>"> <?php echo 5*$i?>%</td>
    <?php
}
?>
</tr>
<td>
	<input id = "submission" type="submit" value="Submit" >
</td>



<tr>
	<td><?php
	if ($_POST) { ?>
		<table style="border: solid 3px blue;" class="inner_table">
		<td class="tip_result">
		Tip:$
		<?php
		echo (0.01*$_POST["percent"]*$_POST["bill"]);
	}
	else {
		echo "";
	}
	?>
	</td>	
</tr>

<tr>
	<td><?php
	if ($_POST)  {?>
		<div class="total_result">
		Total:$
		<?php
		echo (0.01*$_POST["percent"]*$_POST["bill"]+$_POST["bill"]);
	}
	else {
		echo "";
	}
	?>
	</div>
	</td>	
</tr>


</table>
</td>
</div>
</body>
</html>
