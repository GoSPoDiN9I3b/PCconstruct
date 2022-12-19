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
	
	<?php 
	if($_COOKIE['user'] == ''):
	 ?>


   	<div class="container mt-5">
    	<h3>Наши товары</h3>
    	<div class="d-flex flex-wrap">
			<?php 
			for($i = 0; $i < 6;$i++):
			?>
				<div class="col">
		        <div class="card mb-4 rounded-3 shadow-sm">
		          <div class="card-header py-3">
		            <h4 class="my-0 fw-normal">ВЫГОДНО!</h4>
		          </div>
		          <div class="card-body">
		          	<img src="img/<?php echo ($i+1) ?>.jpg" class="img-thumbnail">
		          		<div class="Text-body">
			            <h1 class="card-title pricing-card-title" ><small class="text-muted fw-light">Успей купить</small></h1>
			            <ul class="list-unstyled mt-3 mb-4">
			              <li>Спецпредложение действительно до 25 декабря</li>
			            </ul>
			            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
			        	</div>
		          </div>
		        </div>
		      </div>
		      
		      <?php endfor; ?>
      </div>
    </div>
<?php else: ?>
		<p class="container">Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="exit.php">ЗДЕСЬ</a> </p>
<?php endif ?>


<?php require "blocks/footer.php" ?>

</body>
