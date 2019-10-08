<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>İnsert İşlemi</title>
</head>
<body>
	<form action="<?php echo base_url("dbislem/update") ?>" method="post">

		<ul>
			<?php foreach($gkayitlar as $kayitlar){?>

	
			<li><?=$kayitlar->title?> <input type="radio" name="gid" value="<?=$kayitlar->id?>">

			<?print_r($kayitlar)?>

			 </li>
			<?}?>
		</ul>
		<input type="text" name="title" id=""> <br>
		<select name="detail" id="">
			<option value="Yok">Yok</option>
			<option value="Var">Var</option>
		</select> <br>
		<button type="submit">Gönder</button>
	</form>
</body>
</html>