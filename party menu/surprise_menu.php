<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<style type="text/css">
		#t1
		{
			float: right;
			border-top: 2px solid black;
			border-bottom: 2px solid black;
			border-left:2px solid black;
			border-right:2px solid black;
			box-shadow: 10px 5px 5px black;
			margin-top: -600px;
			height: 500px;
			margin-right: 55px;
			background-color: lightgrey;
		}
		body
		{
			background-image: url(surprise.jpeg);
			background-repeat: no-repeat;
			background-size: cover;
			color: orchid;
		}
		mark
		{
			background-color: black;
			color: white;
			float: right;
			margin-right: 100px;
		}
		h1
		{
			 font-family: 'Great Vibes', cursive;
			 float: left;
			 font-size: 100px;
			 text-shadow: 2px 2px 8px #FFFFFF
		}
		
	</style>
</head>
<body>
	
	<center><h2 style="color: white"><u>Choose from the items below:</u></h2><br>
		<h1>Menu for <br> Surprise Party<br></h1>
	<form>
		<table style="color: rgb(121,221,176);text-shadow: 2px 2px #FF0000; ">
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
			<tr><th>DECORATION	: </th><td><input type="checkbox" name="checkbox">Balloons<br>
			<input type="checkbox" name="checkbox">Flowers<br>
			<input type="checkbox" name="checkbox">Lightings<br>
			<input type="checkbox" name="checkbox">Candle<br>
			<input type="checkbox" name="checkbox">Handcrafts/origami<br>
			<input type="checkbox" name="checkbox">Room Plants<br>
			<input type="checkbox" name="checkbox">Ancient Paintings<br></td></tr>
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
	<h3><mark>Any gift itme / requirements :</mark></h3>
	<table id="t1">
		
		<tr><th>Gift item :</th><td><textarea rows="6" cols="25"></textarea></td></tr>
		<tr><th>Feedback :</th><td><textarea rows="6" cols="25"></textarea></td></tr>

		<tr><td><input type="submit" name="submit"></td></tr>
	</table>
</div>
</form>
</body>
</html>