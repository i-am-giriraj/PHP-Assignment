<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#t1
		{
			float: right;
			border-top: 2px solid black;
			border-bottom: 2px solid black;
			border-left:2px solid black;
			border-right:2px solid black;
			box-shadow: 10px 5px 5px black;
			margin-top: -558px;
			height: 500px;
			margin-right: 55px;
			background-color: lightgrey;
		}
		body
		{
			background-image: url(birthday.jpeg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		mark
		{
			background-color: black;
			color: white;
			float: right;
			margin-right: 100px;
		}
		
	</style>
</head>
<body>
	<center><h2><u>Choose from the items below:</u></h2><br>
	<form>
		<table>
		<tr><th>CAKE : </th><td><input type="checkbox" name="checkbox">Chocolate<br>
			<input type="checkbox" name="checkbox">Red Velvet<br>
			<input type="checkbox" name="checkbox">Vanilla<br>
			<input type="checkbox" name="checkbox">Blueberry<br>
			<input type="checkbox" name="checkbox">Black Forest<br>
			<input type="checkbox" name="checkbox">Choco Delight<br>
			<input type="checkbox" name="checkbox">Fruit Cake<br>
			<input type="checkbox" name="checkbox">Marble<br></td></tr>
			<tr><td><hr></td></tr>
		<tr><th>DRINK: </th><td><input type="checkbox" name="checkbox">Juice<br>
			<input type="checkbox" name="checkbox">Squash<br>
			<input type="checkbox" name="checkbox">Shakes<br>
			<input type="checkbox" name="checkbox">Coffee<br>
			<input type="checkbox" name="checkbox">Hot Choclate<br>
			<input type="checkbox" name="checkbox">Cold drinks<br>
			<input type="checkbox" name="checkbox">Alcohol<br>
			<input type="checkbox" name="checkbox">Mocktails<br></td></tr>
			<tr><td><hr></td></tr>
		<tr><th>SNACKS :</th><td><input type="checkbox" name="checkbox">French Toast<br>
			<input type="checkbox" name="checkbox">Fried Rice<br>
			<input type="checkbox" name="checkbox">Pancake<br>
			<input type="checkbox" name="checkbox">Fries<br>
			<input type="checkbox" name="checkbox">Potato Chips<br>
			<input type="checkbox" name="checkbox">Sausage Rolls<br>
			<input type="checkbox" name="checkbox">Pizzas<br>
			<input type="checkbox" name="checkbox">Sandwiches<br>

		</td></tr>

		<tr><td></td><td><input type="submit" name="submit"></td></tr>

	</form>
</center>
<form>
<div >
	<h3><mark>Any other viewpoint :</mark></h3>
	<table id="t1">
		
		<tr><th>Cake :</th><td> <input type="text" name="text" placeholder="Any other option you would like to order!"></td></tr>/<br>
		<tr><th>Drink : </th><td><input type="text" name="driink" placeholder="Any other"></td></tr><br>
		<tr><th>Snacks : </th><td><input type="text" name="snacks"><br></td></tr>
		<tr><th>Feedback :</th><td><textarea rows="6" cols="25"></textarea></td></tr>

		<tr><td><input type="submit" name="submit"></td></tr>
	</table>
</div>
</form>
</body>
</html>