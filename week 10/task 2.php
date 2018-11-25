<?php 
	$makerOfCar = $_POST['maker'];
	$modelOfCar = $_POST['model'];
	$yearOfCar = $_POST['year']; 
	$engineOfCar = $_POST['engine'];
	$priceOfCar = $_POST['price'];
	function checkbox_verify($name){
		if(empty($_POST[$name])) return "no";
		return "yes";
	}if(!empty($makerOfCar)){
	print "	<div>You added new item: <strong>$makerOfCar $modelOfCar</strong></div><br>
			<div>Produced in $yearOfCar(" .(2018-$yearOfCar). " years old) with $engineOfCar engine</div><br>
			<div>Tax payed:" .checkbox_verify('a1'). "</div><br>
			<div>Technical check passed:" .checkbox_verify('a2'). "</div><br>
			<div>Does not require investment:" .checkbox_verify('a3'). "</div><br>
			<div>$ $priceOfCar";
}?>
<!doctype html>
<html>
	<head>
		
	</head>
	<body>
		<script defer>
		let car = ["Toyota", "BMW", "Mercedes"];
		let maker = document.getElementById("cars");
		let years = document.getElementById("years");
		let n = car.length;
		for(let i = 0; i < n; ++i) {
			let x = document.createElement("option");
			x.text = car[i];
			maker.add(x);
		}
		for(let i = 2018; i > 1998; --i) {
			let x = document.createElement("option");
			x.text = i;
			years.add(x);}
		</script>
		<form action="task2.php" method="post">
			<table border="1" cellspacing="0">
				<tr>
					<td>
						<div>Maker:</div>
					</td>
					<td>
						<select id="cars" name="maker">
							<option>Select maker of car</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<div>Year:</div>
					</td>
					<td>
						<select id="years" name="year">
							<option>Select year of car</option>	
								
						</select>
					</td>
				</tr>
				<tr>
					<td>Model:</td>
					<td>
						<input type="text" name="model">
					</td>
				</tr>
				<tr>
					<td>
						<div>Engine:</div>
					</td>
					<td>
						<input type="radio" name="engine" value="petroleum">Petroleum
						<input type="radio" name="engine" value="gas">Gas
						<input type="radio" name="engine" value="diesel">Diesel
					</td>
				</tr>
				<tr>
					<td><div>Price:</div></td>
					<td><input type="text" name="price"></td>
				</tr>
				<tr>
					<td>
						<div>Additional:</div>
					</td>
					<td>
						<input type="checkbox" name="a1">tax payed<br>
						<input type="checkbox" name="a2">technical check passed<br>
						<input type="checkbox" name="a3">does not require investemt<br>
					</td>
				</tr>
			</table>
			<input type="submit" name="submit" value="Submit">
		</form>
	</body>
</html>