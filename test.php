<?php
		session_start();
		if(!empty($_SESSION['country'])) {
			echo $_SESSION['country'] . "- введённая страна " . '<br>';

			$time = mktime()-$_SESSION['currentTime'];
			echo "Вы зашли на сайт " . $time . ' секунд назад' . '<br>';

			if(!empty($_SESSION['email'])) {
				$email = $_SESSION['email'];
			}
			else
			{
				$email ='';
			}

			$upTime=$_SESSION['counter']++;
			if ($upTime==0) 
			{
				echo "Страница не была обновлена" . '<br>';
			}
			else
			{
				echo "Вы обновили эту страницу ". $upTime ." раз. ";
			}
		}

		if(!empty($_SESSION['city']) && !empty($_SESSION['age'])) {
			$city = $_SESSION['city'];
			$age = $_SESSION['age'];
		}
		else
		{
			$email ='';
			$city = '';
		}
?>

<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<form action="" method="GET">
	Ваше имя:<input type="text" name="name"><br>
	Ваша фамилия:<input type="text" name="surname"><br>
	Ваш пароль:<input type="text" name="password"><br>
	Ваша почта:<input type="text" name="email"> value="<?php echo $email ?>"><br>
	<input type="submit">
</form>
<form action="" method="GET">
	Ваше имя: <input type="text" name="name" value="<?php echo $age ?>"><br>
	Ваш возраст: <input type="text" name="surname"><br>
	Ваш город: <input type="text" name="password" value="<?php echo $city ?>"><br>
	<input type="submit"><br>
</form>
