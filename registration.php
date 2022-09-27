<!DOCTYPE html>
<html lang="ru">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="css/styles.css">
	<title>Регистрация</title>
</head>

<body>
		<div class="registration">
			<div class="registration__content">
				<div class="registration__prev">
					<div class="registration__logo">

					</div>
					<div class="registration__img">
						<img src="img/excursion/preview.jpg" alt="" class="registration__img">
							<div class="registration__logo">
								<div class="header_logo">
									<img src="img/logo/logo.PNG" alt="">
								</div>
								<div class="registration__tittle">
									<h2>Andromeda</h2>
								</div>
							</div>
					</div>
				
				</div>
				<div class="registration__body">
					<h2>Заполните форму, чтобы зарегистрироваться</h2>
					<form action="" class="registration__form" method="POST">
						<div class="registration__info" class="registration__form" method="POST">
                        <form method="post">
				
                    <input type="text" name="First_name" placeholder="Имя">
                    <input type="text" name="Second_name" placeholder="Фамилия">
                    <input type="text" name="Phone" placeholder="Номер телефона">
                    <p><input type="submit" value="Добавить"></p>
                    
                </form>
                    
                    
                    
						
					</form>
				</div>
                <form action="../index.html" class="">
                        <button class="btn btn-dark rounded" type="submit">Выйти</button>
                    </form>
			</div>
		</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src='https://thecode.media/wp-content/uploads/2019/06/jqueryhighlight.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
	crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="js/script.min.js"></script></body>

</html>
<?php

$par1_ip = "localhost";
$par2_name = "root";
$par3_p = "";
$par4_db = "zxc";

$connect = mysqli_connect($par1_ip,$par2_name,$par3_p,$par4_db);

if ($connect == false)
{
    echo "Ошибка подключения!";
}

mysqli_query($connect, "SET NAMES utf8");
// @$id_zapchasti = $_POST['id_zapchasti'];
// @$order_id = $_POST['order_id'];
@$First_name = $_POST['First_name'];
@$Second_name = $_POST['Second_name'];
@$Phone = $_POST['Phone'];



if ( !$First_name || !$Second_name || !$Phone) {
    echo 'Вы ввели не все данные.';
    exit();
}
$query = "INSERT INTO orders (First_name, Second_name, Phone, Datetime)
    values ('$First_name', '$Second_name', '$Phone', now())";
$result = mysqli_query($connect, $query);
if ($result) {
    
    printf("Регистрация прошла успешно. Ваш уникальный код: %d.\n", mysqli_insert_id($connect));
}

?>