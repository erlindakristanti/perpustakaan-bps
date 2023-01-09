<!doctype html>
<html>
<head>
	<title>Perpustakaan Flip Book</title>
	<style type="text/css">
		body{
			overflow: hidden;
			background: url('hero-bg2.jpg');
			background-size: 100% 100%;
		}
		#album{
			width: 600px;
			height: 500px;
			margin: 5% auto;
		}
	</style>
</head>
<body>

<div id="album">
	<div style="background: url('01.jpg'); background-size: 100% 100%;"></div>
	<div style="background: url('02.jpg'); background-size: cover;"></div>
	<div style="background: url('03.jpg'); background-size: cover;"></div>
	<div style="background: url('04.jpg'); background-size: cover;"></div>
	<div style="background: url('05.jpg'); background-size: cover;"></div>
	<div style="background: url('06.jpg'); background-size: cover;"></div>
</div>


<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="
sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>">

<script src="turn.js"></script>
<script>
	$('#album').turn({gradients: true, acceleration: true});
</script>

</body>
</html>
