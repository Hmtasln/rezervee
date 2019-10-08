<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title>Db islem</title>
</head>
<body>
	<ul>
		<?

foreach ($karmasiksonuclar as $row ) {?>
		<li>
			[<?=$row->id;?>]<?=$row->title;?>
		</li>
		<?}?>
	</ul>
</body>
</html>