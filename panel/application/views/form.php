<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<form action="<?php echo base_url(); ?>/formislemleri/kaydet" method="post">
		<input type="text" name="isim" placeholder="İsim Giriniz" id=""> <br>
		<input type="email" name="mail" placeholder="Mail Giriniz" id=""> <br>
		<button type="submit">Gönder</button>
	</form>
</body>
</html>