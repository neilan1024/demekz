<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/reset.css"> 
	<script src="assets/js/modernizr.js"></script> 
	<title>Сделаем лучше вместе!</title>
	<link rel="icon" href="assets/img/logo.png" type="image/x-icon">
	</head>
	<body>
	<?php
$dbhost = 'localhost';
$dbuser= 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost , $dbuser , $dbpass,"demekz");
if(!$conn){
        die('Could not connect:'.mysqli_error($conn));
}
$sql="CREATE TABLE student(".
        "USN INT NOT NULL,".
        "Name VARCHAR(100) NOT NULL,".
        "Marks VARCHAR(40) NOT NULL);";
mysqli_select_db($conn,'demekz');
?>

	<div class="container">
	<nav>
	<img src="assets/img/logo.png">
	<h1>Cделаем лучше вместе!</h1>
	<h6>Городской портал по приему заявок на устранение проблем в городе</h6>
	</nav>
		<section style="display: flex;" id="slider_bl">
		<div class="wrapper">
		<input checked type=radio name="slider" id="slide1" />
		<input type=radio name="slider" id="slide2" />
		<div class="slider-wrapper">
		<div class=inner>
		<article>
		<img src="assets/img/1.jpg" />
		</article>
		<article>
		<img src="assets/img/2.jpg" />
		</article>
		</div>
		</div>
		<div class="slider-dot-control">
		<label for=slide1></label>
		<label for=slide2></label>
		</div>
		</div>
		</section>

<nav class="main-nav">
<a class="cd-signin" href="#0">
<div class="button">
<button>Авторизоваться</button></a>
<p>Еще не <a class="cd-signup" href="#0">зарегистрированы?</a>  <br> Самое время сделать это!</p>
</div>
</nav>

<div class="cd-user-modal"> 
<div class="cd-user-modal-container"> 
<ul class="cd-switcher">
<li><a href="#0">Авторизоваться</a></li>
<li><a href="#0">Зарегистрироваться</a></li>
</ul>
<div id="cd-login"> 
<form class="cd-form">
<p class="fieldset">
<label class="image-replace cd-email" for="signin-email">E-mail</label>
<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
<span class="cd-error-message">Ошибка</span>
</p>
<p class="fieldset">
<label class="image-replace cd-password" for="signin-password">Пароль</label>
<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Пароль">
<a href="#0" class="hide-password">Скрыть</a>
<span class="cd-error-message">Ошибка</span>
</p>

<p class="fieldset">
<input type="checkbox" id="remember-me" checked>
<label for="remember-me">Запомнить меня</label>
</p>
<p class="fieldset">
<input class="full-width" type="submit" value="Войти">
</p>
</form>
<p class="cd-form-bottom-message"><a href="#0">Забыли пароль?</a></p>
</div> 
<div id="cd-signup"> 
<form class="cd-form">


<p class="fieldset">
<label class="image-replace cd-username" for="signup-username">ФИО</label>
<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="ФИО">

<p class="fieldset">
<label class="image-replace cd-username" for="signup-username">Логин</label>
<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Логин">
<span class="cd-error-message">Ошибка</span>
</p>
<p class="fieldset">
<label class="image-replace cd-email" for="signup-email">E-mail</label>
<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
<span class="cd-error-message">Ошибка</span>
</p>
<p class="fieldset">
<label class="image-replace cd-password" for="signup-password">Пароль</label>
		<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Пароль">
		<a href="#0" class="hide-password">Скрыть</a>
<span class="cd-error-message">Ошибка</span>
</p>
<p class="fieldset">
<label class="image-replace cd-password" for="signin-password">Повтор пароля</label>
<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Повтор пароля">
<a href="#0" class="hide-password">Скрыть</a>
<span class="cd-error-message">Ошибка</span>
</p>
<p class="fieldset">
<input type="checkbox" id="remember-me" checked>
<label for="remember-me">Согласие на обработку персональных данных</label>
</p>
<p class="fieldset">
<input class="full-width has-padding" type="submit" value="Создать аккаунт">
</p>
</form>
</div>
<div id="cd-reset-password"> 
<p class="cd-form-message">Забыли пароль? Пожалуйста, введите свой адрес электронной почты. Вы получите ссылку для создания нового пароля.</p>
<form class="cd-form">
<p class="fieldset">
<label class="image-replace cd-email" for="reset-email">E-mail</label>
<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
<span class="cd-error-message">Ошибка</span>
</p>
<p class="fieldset">
<input class="full-width has-padding" type="submit"value="Восстановить пароль">
</p>
</form>
<p class="cd-form-bottom-message"><a href="#0">Вернуться к входу в систему</a></p>
</div> <!-- cd-reset-password -->
<a href="#0" class="cd-close-form">Закрыть</a>
</div> 
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="assets/js/main.js"></script> 


	<div class="content">
	<h1 class="solved-problem">Решенные проблемы</h1>
	<div class="grid1">
	<div class="solved-problem__container">
	<img src="assets/img/3.png" class="solved-problem__image">
	<div class="solved_problem__overlay">
	<img src="assets/img/7.png" class="solved-problem__image">
	</div>
	</div>
		<div class="text">
		<h2>Ремонт детских площадок</h2>
		<p>31.08.2017</p>
		<p>Реконструировние детской площадки</p>
		</div>
		</div>
		<div class="grid2">
		<div class="text">
		<h2>Дорожные работы</h2>
		<p>14.09.2017</p>
		<p>Ремонт дороги</p>
		</div>
<div class="solved-problem__container">
<img src="assets/img/4.png" class="solved-problem__image">
<div class="solved_problem__overlay">
<img src="assets/img/8.png" class="solved-problem__image">
</div>
</div>
</div>
<div class="grid1">
<div class="solved-problem__container">
<img src="assets/img/5.png" class="solved-problem__image">
<div class="solved_problem__overlay">
<img src="assets/img/9.png" class="solved-problem__image">
</div>
</div>
		<div class="text">
		<h2>Дорожные работы </h2>
		<p>23.04.2017</p>
		<p>Ремонт дороги</p>
		</div>
		</div>
		<div class="grid2">
		<div class="text">
		<h2>Благоустройство города</h2>
		<p>09.06.2017</p>
		<p>Возведение сквера</p>
		</div>

<div class="solved-problem__container">
<img src="assets/img/6.png" class="solved-problem__image">
<div class="solved_problem__overlay">
<img src="assets/img/10.png" class="solved-problem__image">
</div>
</div>
</div>
</div>
<footer style="margin-top: 40px;">
<img src="assets/img/logo.png">
</footer>	
</div>
</body>
</html>