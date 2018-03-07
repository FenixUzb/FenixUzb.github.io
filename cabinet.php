<?php
session_start();
if (isset($_SESSION['id'])) {

$user = require_once('account.php');
} else {header('location: index.php');}?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<style type="text/css">
		a {
			color: black;
		}
		</style>
	</head>
	<body>
		<div class="conatiner-fluid">
			<div class="row px-3 py-3" style="background:radial-gradient(#f0fff0,#c1cdc1)">
				<div class="col-1 mr-md-auto mb-3">
					<img src="images\Asian.png" style="height: auto; width: auto" class="img-fluid rounded d-sm-block d-none">
				</div>
				<div class="col-lg-4">
					<div>
						<a href="index.php" class="btn btn-dark text-light ml-auto">Главная</a>
						<a href="exit.php" class="btn btn-dark text-light">Выход</a>
					</div>
				</div>
			</div>
			<div class="row justify-content-center border-bottom mb-3">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link active" href="about">о нас</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">обратная связь</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">контакты</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="nav flex-column nav-pills col-md-auto offset-md-2 text-sm-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link active" id="v-pills-cabinet-tab" data-toggle="pill" href="#v-pills-cabinet" role="tab" aria-controls="v-pills-cabinet" aria-selected="true">Личный кабинет</a>
					<a class="nav-link" id="v-pills-add-tab" data-toggle="pill" href="#v-pills-add" role="tab" aria-controls="v-pills-add" aria-selected="false">Добавить товары</a>
					<a class="nav-link" id="v-pills-order-tab" data-toggle="pill" href="#v-pills-order" role="tab" aria-controls="v-pills-order" aria-selected="false">Заказать товары</a>
					<a class="nav-link" id="v-pills-history-tab" data-toggle="pill" href="#v-pills-history" role="tab" aria-controls="v-pills-history" aria-selected="false">История</a>
				</div>
				<div class="tab-content col-md-6 ml-md-4 mx-sm-2" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-cabinet" role="tabpanel" aria-labelledby="v-pills-cabinet-tab">
						<div class="border-bottom">
							<div class="d-inline">User-ID:</div>
							<div class="d-inline"><?= $user['profile']['id'] ?></div>
						</div>
						<div class="border-bottom">
							<div class="d-inline">Логин:</div>
							<div class="d-inline"><?= $user['profile']['login'] ?></div>
						</div>
						<div class="border-bottom">
							<div class="d-inline">Email:</div>
							<div class="d-inline"><?= $user['profile']['email'] ?></div>
						</div>
						<div class="border-bottom">
							<div class="d-inline">День рождения:</div>
							<div class="d-inline"><?= $user['profile']['birthDay'] ?></div>
						</div>
						<div class="border-bottom">
							<div class="d-inline">Контактный телефон (домашний):</div>
							<div class="d-inline"><?= $user['profile']['homePhone'] ?></div>
						</div>
						<div class="border-bottom">
							<div class="d-inline">Контактный телефон (мобильный):</div>
							<div class="d-inline"><?= $user['profile']['mobilePhone'] ?></div>
						</div>
						<div class="border-bottom">
							<a href="edit-profile.php">Редактировать профиль</a>
						</div>
					</div>
					<div class="tab-pane fade show" id="v-pills-add" role="tabpanel" aria-labelledby="v-pills-add-tab">
						<form action="#" id="goods">
							<div class="form-group">
								<div>Адрес товара:</div>
								<input class="form-control" type="text">
								<div class="w-100"></div>
								<label >Количество:</label>
								<input type="number" class="form-control">
								<div class="w-100"></div>
								<label>Описание:</label>
								<textarea rows="3" class="form-control"></textarea>
								<div class="btn btn-sm btn-danger remove">
									удалить поле
								</div>
								<div class="w-100"></div>
							</div>
							<div class="btn btn-sm btn-info" id="addFormGroup">
								добавить поле
							</div>
							<div class="btn btn-sm btn-primary" id="addItems">
								добавить в корзину
							</div>
						</form>
					</div>
					<div class="tab-pane fade show" id="v-pills-order" role="tabpanel" aria-labbeledby="v-pills-order-tab">
						<table class="table">
							<thead class="thead-light">
								<tr>
									<th>#</th>
									<th>Адрес товара</th>
									<th>Количество</th>
									<th>Дата добавления</th>
								</tr>
							</thead>
							<tbody id="list-of-added">
								<?php if (count($user['added']) > 0): ?>
								<?php foreach($user['added'] as $product):?>
								<tr>
									<td><input type="checkbox" id=<?= '"'.$product['productId'].'"' ?>></td>
									<td><a href=<?= '"'.$product['url'].'"' ?>>link</a></td>
									<td><?= $product['amount'] ?></td>
									<td><?= $product['added'] ?></td>
								</tr>
								<?php endforeach; ?>
								<?php endif;?>
							</tbody>
						</table>
						<div class="btn-group" id="added">
							<button class="btn prev" disabled>&lt;</button>
							<button class="btn page">1</button>
							<button class="btn next" <?php if ($user['addedRows'] <= 5) echo 'disabled'; ?>>&gt;</button>
						</div>
						<button class="btn btn-submit" id="order">Заказать</button>

					</div>
					<div class="tab-pane fade show" id="v-pills-history" role="tabpanel" aria-labbeledby="v-pills-history-tab">
						<table class="table">
							<thead class="thead-light">
								<tr>
									<th>Адрес товара</th>
									<th>Количество</th>
									<th>Дата заказа</th>
								</tr>
							</thead>
								<tbody id="list-of-ordered">
								<?php if (count($user['ordered']) > 0): ?>
								<?php foreach($user['ordered'] as $product):?>
								<tr>
								<td><a href=<?= '"'.$product['url'].'"' ?>>link</a></td>
								<td><?= $product['amount'] ?></td>
								<td><?= $product['ordered'] ?></td>
								</tr>
								<?php endforeach; ?>
								<?php endif;?>
							</tbody>
						</table>
						<div class="btn-group" id="ordered">
							<button class="btn prev" disabled>&lt;</button>
							<button class="btn page">1</button>
							<button class="btn next" <?php if ($user['orderedRows'] <= 5) echo 'disabled'; ?>>&gt;</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src="jquery/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		var goods = [],
		affected,
		formGroup = '<div class="form-group">' + $('.form-group').html() + '</div>',
		test = '2',
		success = '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Успех! </strong>Ваши товары успешно добавлены<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

		$(document).on('click', '.remove', function () {
			$(this).parent().fadeOut({
			complete: function () {
				$(this).detach();
			}
			})
		});

		$('#v-pills-order-tab').click(function () {
			$('#added > .next').click();
		});
		$('#v-pills-history-tab').click(function () {
			$('#ordered > .next').click();
		});
		$(document).on('change', 'input[type="checkbox"]', function() {
		    $(this).toggleClass('checked');
		});
		$(document).on('blur', '.form-group input', function () {
			$(this).val() == '' ? $(this).addClass('is-invalid') :  $(this).removeClass('is-invalid');
		});
		$('#addFormGroup').click(function () {
			var group = $('.form-group'),
			parent = $('#goods');
			group.length < 1 ? parent.prepend(formGroup) : group.last().after(formGroup);
		});
		$('#addItems').click(function () {
			var items = '';
			$('.form-group > input, textarea').each( function (i) {
				items += $(this).val()+',';
			})
			items = items.slice(0, -1);
			$.ajax({
				method: 'POST',
				url: 'products.php',
				data: 'mode=add&items='+items,
				success: function(msg) {
					$('#goods > .form-group').fadeOut({
						complete: function () {
							$(this).detach();
						}
					});
				}
			});
		});
		$('#order').on('click', function () {
			var order = '',
			success = 0;
			$('input.checked').each(function () {
				order += this.id+',';
			}).parent().parent().fadeOut({
				success: function () {
					$(this).detach();
				}
			});
			order = order.slice(0, -1);
			$.ajax({
				method: 'POST',
				url: 'products.php',
				data: 'mode=order&items='+order,
				success: function (msg) {
					success = msg; 
				}
			})
			if (success == 1) {$(this).after(success);}
		});
		$('.prev, .next').click(function (e) {
			var btn = $(this),
			parent = btn.parent(),
			type = parent.attr('id'),
			page = parent.children('.page'),
			currentPage = +page.text();

			if (btn.attr('disabled') === 'disabled') { return;}

			parent.children('.prev, .next').removeAttr('disabled');
			if (e.originalEvent !== undefined) {
				(btn.hasClass('next')) ? currentPage++ : currentPage--;
			}
			page.text(currentPage);

			$('#list-of-' + type + ' > tr').detach();
			$.ajax({
				method: 'POST',
				url: 'products.php',
				data: 'mode=pagination&page=' + currentPage + '&type=' + type,
				success: function (msg) {
						var json = JSON.parse(msg),
						affected = json[0],
						tr,
						link ,
						check = '',
						url,
						amount,
						date;
						for (var i = 1, j = json.length; i < j; i++) {
							var product = json[i];
							if (type === 'added')
								check = $('<td>').append($('<input>').attr({'type': 'checkbox','id': product['productId']}));

							link = $('<a>').text(product['url']).attr('href', product['url']);
							url = $('<td>').append(link);
							amount = $('<td>').text(product['amount']);
							date = $('<td>').text(product[type]);
							tr = $('<tr>').addClass('tr').append(check, url, amount, date);
							$('#list-of-'+type).append(tr);
							}
						if (currentPage == 1) parent.children('.prev').attr('disabled', 'disabled');
						if ((affected - (5 * currentPage)) <= 0) parent.children('.next').attr('disabled', 'disabled');
					}
				});
			});
	</script>
</html>