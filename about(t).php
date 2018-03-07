<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<style type="text/css">
	   #bg {
		background: #fff;
		background: -moz-linear-gradient(top, #fff 0%, #eeffe8 95%, #c9dbc3 100%);
		background: -webkit-linear-gradient(top, #fff 0%, #eeffe8 95%, #c9dbc3 100%);
		background: -o-linear-gradient(top, #fff 0%, #eeffe8 95%, #c9dbc3 100%);
		background: linear-gradient(top, #fff 0%, #eeffe8 95%, #c9dbc3 100%);
		background-image: url(images/bg.png);
}
		</style>
	</head>
	<body >
		<div class="container-fluid" id="bg">
			<div class="col-8 mx-auto">
			<div class="row px-3 py-3">
				<h1>Global Store</h1>
				<div class="container-fluid">
					<div class="row py-3" style="background:radial-gradient(#f0fff0,#c1cdc1); box-shadow: 0 0 10px rgba(0,0,0,0.5)">
						<div class="col-3">
							<img src="images\markets\mainLogo.png" href="index.php" style="height: auto; width: auto" class="img-fluid img-thumbnail rounded-circle">
						</div>
						<?php if(empty($_COOKIE['login'])): ?>
						<div class="col-lg-4 ml-md-auto mt-2 col-sm-12">
							<form action="testreg.php" method="post">
								<div class="form-group">
									<input type="login" name="login" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Логин">
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control" id="password" placeholder="Пароль">
								</div>
								<button type="submit" class="btn btn-success">Вход</button>
								<a href="registration.html" class="btn btn-primary text-light">Регистрация</a>
							</form>
						</div>
						<?php else: ?>
						<div class="col-lg-4 ml-md-auto px-0">
							<a href="kabinet.php" class="btn btn-dark text-light">Кабинет</a>
							<a href="exit.php" class="btn btn-dark text-light">Выход</a>
							<form id="urlForm" action="#">
								<input type="text" class="form-control my-2" id="productUrl" placeholder="Url товара">
								<button type="submit" id="sendUrl" class="btn btn-success">Отправить</button>
							</form>
						</div>
						<?php endif ?>
					</div>
				</div>
				<div class="container-fluid">
					<div class="d-flex justify-content-center my-3 bg-warning" style="box-shadow: 0 0 10px rgba(0,0,0,0.5)">
						<nav class=" navbar-expand-lg navbar-light border-bottom">
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav" >
						<li class="nav-item active">
						<h4><a class="nav-link text-primary" href="index.php"><em>НА ГЛАВНУЮ</em><span class="sr-only"></span></a></h4>
						</li>
						<li class="nav-item mx-3">
						<h4><a class="nav-link text-primary" href="#"><em>Обратная связь</em><span class="sr-only"></span></a></h4>
						</li>
						<li class="nav-item">
						<h4><a class="nav-link text-primary" href="#"><em>Контакты</em><span class="sr-only"></span></a></h4>
						</li>
						</ul>
						</div>
						</nav>
					</div>
				</div>
				<div class="container-fluid">
						<div class="row">
						</div>
						<div class="col-lg">
														<div class="row justify-content-center"><h1><mark>Сделав заказ через Easy-Buy!</mark></h1></div>
															<p class="lead"><i>Вы гарантированно обезопасите себя от риска приобрести по высокой цене низкокачественную подделку известного бренда. Компания "International Server Systems, Inc." (США) сотрудничает напрямую с крупнейшими интернет-магазинами и потому такой риск просто-напросто исключен. Единственное, что Вам нужно сделать - это зарегистрироваться на сайте iBazar.uz и начать путешествие в мир шопинга! </i></p>
							<div id="carouselExampleControls " class="carousel slide " data-ride="carousel" style="margin-top: 13px; box-shadow: 0 0 10px rgba(0,0,0,0.5)">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100"  src="images\1.jpg" alt="Первый слайд">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="images\2.jpg" alt="Второй слайд">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="images\3.jpg" alt="Третий слайд">
										<div class="carousel-caption d-none d-md-block">
										<h3><a href="#">заголовок</a></h3>
										<p>параграф</p>
										</div>
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
								<div class="row justify-content-center">
									<div class="col-3"><a href="#"><img src="markets\target.png" class="img-fluid img-thumbnail my-1" style="height: auto; width: auto; box-shadow: 0 0 10px rgba(0,0,0,0.5)"></a></div>
									<div class="col-3"><a href="#"><img src="markets\walmart.jpg" class="img-fluid img-thumbnail my-1" style="height: auto; width: auto; box-shadow: 0 0 10px rgba(0,0,0,0.5)"></a></div>
									<div class="col-3"><a href="#"><img src="markets\costco.jpg" class="img-fluid img-thumbnail my-1" style="height: auto; width: auto; box-shadow: 0 0 10px rgba(0,0,0,0.5)"></a></div>
									<div class="w-100 my-2"></div>
									<div class="col-3"><a href="#"><img src="markets\amazon1.png" class="img-fluid img-thumbnail my-1" style="height: auto; width: auto; box-shadow: 0 0 10px rgba(0,0,0,0.5)"></a></div>
									<div class="col-3"><a href="#"><img src="markets\aliexpress.png" class="img-fluid img-thumbnail my-1" style="height: auto; width: auto; box-shadow: 0 0 10px rgba(0,0,0,0.5)"></a></div>
									<div class="col-3"><a href="#"><img src="markets\overstock.png" class="img-fluid img-thumbnail my-1" style="height: auto; width: auto; box-shadow: 0 0 10px rgba(0,0,0,0.5)"></a></div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 px-0">
					</div>
				</div>
			</div>
		</div>
	</div>
		</div>
		<div class="container-fluid px-0">
		<div class="col-12 " style="background-color: #c9dbc3; box-shadow: 0 0 10px rgba(0,0,0,0.5)"><h1 class="display-1">FOOTER</h1></div>
	</body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript">

	$('.carousel').carousel({
	  interval: 1500
	})




	</script>
</html>
