<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<style type="text/css">
			#bg2 {
			background: rgb(25,25,112);
			background: -moz-linear-gradient(top, rgb(25,25,112) 0%, #eeffe8 100%);
			background: -webkit-linear-gradient(top, rgb(25,25,112) 0%, #eeffe8 100%);
			background: -o-linear-gradient(top, rgb(25,25,112) 0%, #eeffe8 100%);
			background: linear-gradient(top, rgb(25,25,112) 0%, #eeffe8 100%);
			}
			#header {
			background: rgb(25,25,112);
			background: -moz-linear-gradient(to right, #8b7765 0%, #eeffe8 100%);
			background: -webkit-linear-gradient(top, #8b7765 0%, #eeffe8 100%);
			background: -o-linear-gradient(top, #8b7765 0%, #eeffe8 100%);
			background: linear-gradient(top, #8b7765 0%, #eeffe8 100%);	
			}
		</style>
	</head>
	<body>
		<div class="container-fluid" id="bg">
			<div class="row px-3 py-3" id="header">
				<div class="col-1 mr-md-auto mb-3">
					<img src="images\Asian.png" style="height: auto; width: auto;" class="img-fluid rounded">
				</div>
				<?php session_start(); if(!isset($_SESSION['id'])): ?>
				<div class="col-md-auto">
					<form action="testreg.php" method="post">
						<div class="row form-group">
							<input type="login" name="login" class="form-control w-sm-75 h-25" id="text" aria-describedby="emailHelp" placeholder="Логин">
						</div>
						<div class="row form-group">
							<input type="password" name="password" class="form-control w-sm-75 h-25" id="password" placeholder="Пароль">
						</div>
						<div class="row form-group">
							<button type="submit" class="btn btn-sm btn-success">Вход</button>
							<a href="registration.html" class="btn btn-sm btn-primary mx-2 text-light">Регистрация</a>
							<a href="recover-mail-form.html" class="btn btn-sm btn-warning">Забыли пароль?</a>
						</div>
					</form>
				</div>
				<?php else: ?>
				<div class="col-lg-4">
					<div class="row">
					<div class="col px-0">
						<a href="cabinet.php" class="btn btn-light ">Личный кабинет</a>
						<a href="exit.php" class="btn btn-light">Выход</a>
					</div>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<div class="row justify-content-center" style="background: #eeffe8">
				<ul class="nav">
					<a class="nav-link active my-2 bg-white text-dark text-center rounded" href="#v-pills-home"><h5>Как заказать товар</h5></a>
					<a class="nav-link active my-2 bg-white text-dark text-center rounded" href="#v-pills-home"><h5>Cпособ оплаты</h5></a>
					<a class="nav-link active my-2 bg-white text-dark text-center rounded" href="#v-pills-home"><h5>Доставка товара</h5></a>
					<a class="nav-link active my-2 bg-white text-dark text-center rounded" href="#v-pills-home"><h5>Оформить заказ</h5></a>

				</ul>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-2 px-0">
					<div class="nav flex-column py-2 px-2 rounded" aria-orientation="vertical" style="box-shadow: 0 0 10px rgba(0,0,0,1)">
						<a class="nav-link active my-2 text-dark text-center rounded bg-white" href="https://www.calvinklein.ru/"
						style="box-shadow: 0 0 10px rgba(0,0,0,0.5)"><img style="height:50px" src="images\Calvin klein.png" class="img-fluid"></a>
						<a class="nav-link active my-2 text-dark text-center rounded bg-white" href="https://www.gucci.com/int/en/"
						style="box-shadow: 0 0 10px rgba(0,0,0,0.5)"><img style="height:50px" src="images\gucci1.png" class="img-fluid"></a>
						<a class="nav-link active my-2 text-dark text-center rounded bg-white" href="#"
						style="box-shadow: 0 0 10px rgba(0,0,0,0.5)"><img style="height:50px" src="images\mexx.png" class="img-fluid"></a>
						<a class="nav-link active my-2 text-dark text-center rounded bg-white" href="https://www.nike.com/ru/ru_ru/"
						style="box-shadow: 0 0 10px rgba(0,0,0,0.5)"><img style="height:50px" src="images\Nike.png" class="img-fluid"></a>
						<a class="nav-link active my-2 text-dark text-center rounded bg-white" href="https://www.zara.com/"
						style="box-shadow: 0 0 10px rgba(0,0,0,0.5)"><img style="height:50px" src="images\zara2.png" class="img-fluid"></a>
						<a class="nav-link active my-2 text-dark text-center rounded bg-white" href="http://www.adidas.ru/"
						style="box-shadow: 0 0 10px rgba(0,0,0,0.5)"><img style="height:50px" src="images\adidas1.png" class="img-fluid"></a>
						<a class="nav-link active my-2 text-dark text-center rounded bg-white" href="https://www.versace.ru/ru/"
						style="box-shadow: 0 0 10px rgba(0,0,0,0.5)"><img style="height:50px" src="images\Versace.png" class="img-fluid"></a>
					</div>
				</div>
				<div class="col-lg-6">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100"  src="images/11.jpg">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="images/22.jpg">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="images/33.jpg">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="images/44.jpg">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="images/55.jpg">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="images/66.jpg">
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-md-12 px-0 my-3">
						<div class="row">
							<div class="col-4"><a href="#"><img src="markets\aliexpress.png" class="img-fluid img-thumbnail" style="height: auto; width: auto;"></a></div>
							<div class="col-4"><a href="#"><img src="markets\amazon1.png" class="img-fluid img-thumbnail" style="height: auto; width: auto;"></a></div>
							<div class="col-4"><a href="#"><img src="markets\costco1.jpg" class="img-fluid img-thumbnail" style="height: auto; width: auto;"></a></div>
						</div>
					</div>
				</div>
				<div class="col-lg-2 px-0">
					<div class="nav flex-column py-2 px-2 rounded" aria-orientation="vertical" style="box-shadow: 0 0 10px rgba(0,0,0,1)">
						<li class="nav-item">
							<a class="nav-link active " href="about"><h5>о нас</h5></a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#"><h5>обратная связь</h5></a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#"><h5>контакты</h5></a>
						</li>
					</div>
				</div>
			</div>
			<div class="row" >footer</div>
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>