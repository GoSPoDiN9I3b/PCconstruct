<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<title>Интернет магазин</title>
</head>
<body>
	<?php require "blocks/header.php" ?>
	<div class="container mt-5">
		<div class="row">
			<div class="col ">
				<form action="">
					<h4>Процессор&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
					&ensp;<select name="processor" id="sel"> 
							<option value="1">Intel</option>
							<option value="2">AMD</option>
						</select>
					</h4>
				
					<h4>Материнская плата&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
						<select name="motherboard" id="sel">
							<option value="1">Acer</option>
							<option value="2">MSI</option>
						</select>
					</h4>
					<h4>Видеокарта&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;
						<select name="gpu" id="sel">
							<option value="1">RX-Серия</option>
							<option value="2">RTX-Серия</option>
						</select>
					</h4>
					<h4>Охлаждение&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;
						<select name="cooler" id="sel">
							<option value="1">Водяное</option>
							<option value="2">Воздушное</option>
						</select>
					</h4>
					<h4>Оперативная память&ensp;&ensp;&ensp;&ensp;&ensp;
						<select name="ozy" id="sel">
							<option value="1">DDR3</option>
							<option value="2">DDR4</option>
						</select>
					</h4>
					<h4>Встроенная память&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;
						<select name="drive" id="sel">
							<option value="1">HDD</option>
							<option value="2">SSD</option>
						</select>
					</h4>
					<h4>Блок питания&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;&nbsp;
						
						<select name="b_p" id="sel">
							<option value="1">От 500 Вт</option>
							<option value="2">От 600 Вт</option>
							<option value="3">От 700 Вт</option>
							<option value="4">От 800 Вт</option>
						</select>
					</h4>
				</form>
			</div>
		<div class="col">
		<form action="">
		<button class="btn btn-success" type="submit">Проверить на совместимость</button>
		<button class="btn btn-success" type="submit">Оптимизировать</button>
		<button class="btn btn-success" type="submit">Сохранить</button>
		<button class="btn btn-success" type="submit">Собрать</button>
		<h4>Выберите распределяемый бюджет&ensp;&ensp;&ensp;&ensp;&nbsp;&nbsp;
		<input class="mt-5" type="range" min="0" max="300000" step="1000" value="0"> 
		</h4>
		</form>
	</div>

	</div>

	

<?php require "blocks/footer.php" ?>

</body>