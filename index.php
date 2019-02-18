<?php
	require '/Session.php';
	// При заходе на index.php спросите с помощью формы страну пользователя, запишите ее в сессию.
	if (!empty($_REQUEST['countryValue'])) {
		$session = new Session;
	    $session->set('country', $_REQUEST['countryValue']);

	// Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.
		$session->set('currentTime', mktime());
	// Спросите у пользователя email с помощью формы. Затем сделайте так, чтобы в другой форме (поля: имя, фамилия, пароль, email) при ее открытии поле email было автоматически заполнено.
		if (!empty($_REQUEST['email'])) {
		$session->set('email', $_REQUEST['email']);
		}
		else {
		$session->set('email', '');
		}
	// Сделайте счетчик обновления страницы пользователем. Данные храните в сессии. Скрипт должен выводить на экран количество обновлений. При первом заходе на страницу он должен вывести сообщение о том, что вы еще не обновляли страницу.
		$session->set('counter', 0);
	// При заходе на index.php спросите с помощью формы город и возраст пользователя. На form.php сделайте форму с полями 'Имя', 'Возраст', 'Город'. При заходе на form.php сделайте так, чтобы поля 'Возраст' и 'Город' уже были заполнены.
		if (!empty($_REQUEST['cityValue']) && !empty($_REQUEST['ageValue'])) {
		$session = new Session;
	    $session->set('city', $_REQUEST['cityValue']);
	    $session->set('age', $_REQUEST['ageValue']);
	}
		}

	else {
		$session = new Session;
		$session->destroy();
	}

?>

<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<form action="" method="GET">
	<input type="text" name="countryValue" placeholder="Введите вашу страну:"><br>
	<input type="text" name="email" placeholder="Введите вашу почту:"> <br>
	<input type="submit">
	<input type="text" name="cityname" placeholder="Введите ваш город:"> <br>
	<input type="text" name="age" placeholder="Введите ваш возраст"> <br>
</form>
