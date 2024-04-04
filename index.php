<?php
$conn = mysqli_connect('localhost','root','root','glasses');
$username = $_POST['username'];
$password = $_POST['password'];
$Rpassword = $_POST['Rpassword'];
$emal = $_POST['emal'];

if(isset($_POST['submit'])){
   $sql = "INSERT INTO users(username,password,Rpassword)
     VALUES('$username','$password','$Rpassword') ";
}

?>
<!DOCTYPE html>
<html lang="ar">
<head>
	<title>تسجيل مستخدم</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-r6pOZIaLz7A0gUv2rK6xTgj91q2BxkOSeM6H7QKQgXqCcWSTrZYr0EYD2K/vJh5Nj0A5Q1f+QhS9CmKk7d7vRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!--Link To cdnjs font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />
    <title>موقع شركة البصريات</title>
     <!--Link To CSS-->
    <link rel="stylesheet" href="style2.css">
     <!--Link To js-->
    <script src="script.js" defer></script>
    <link rel="shortcut icon" href='img\photo1687981607.jpeg' type="image/x-icon">
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}
		form {
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
			padding: 20px;
			max-width: 400px;
			margin: 50px auto;
		}
		h1 {
			text-align: center;
			margin-top: 0;
            padding-bottom: 10px;
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}
		input[type="text"], input[type="password"], input[type="email"] {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: none;
			margin-bottom: 20px;
			box-shadow: 0 0 5px rgba(0,0,0,0.1);
			font-size: 16px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			transition: background-color 0.3s ease;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
		.form-group {
			position: relative;
			margin-bottom: 25px;
		}
		.form-group input {
			display: block;
			width: 100%;
			height: 40px;
			border: none;
			border-bottom: 1px solid #ccc;
			font-size: 16px;
			padding: 0 5px;
			background-color: transparent;
		}
		.form-group label {
			position: absolute;
			top: 5px;
			left: 20px;
			font-size: 16px;
			color: #aaa;
			transition: all 0.3s ease;
			cursor: text;
		}
		.form-group input:focus + label, .form-group input:not(:placeholder-shown) + label {
			top: -25px;
			left: 0;
			color: #4CAF50;
			font-size: 12px;
		}
		.form-group i {
			position: absolute;
			top: 10px;
			right: 20px;
			color: #ccc;
			font-size: 16px;
			transition: all 0.3s ease;
		}
		.form-group input:focus + i, .form-group input:not(:placeholder-shown) + i {
			color: #4CAF50;
		}
		.form-group input[type="password"] {
			letter-spacing: 0em;
		}
		.form-group input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			font-size: 16px;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		.form-group input[type="submit"]:hover {
			background-color: #3e8e41;
		}
		@media only screen and (max-width: 600px) {
			form {
				max-width: 300px;
			}
		}
	</style>
</head>
<body>
    <header class="header">
        <a><img src="img\photo1687981607.jpeg" alt="نظارة 1" class="logo" ></a>
            <nav class="navbar">
                <ul>
                    <li><a href="homw2.html">الرئيسية</a></li>
                    <li><a href="#">النظارات+</a>
                        <ul>
                            <li><a href="#">نظارات شمسية رجالي</a></li>
                            <li><a href="#">نظارات شمسية للنساء </a></li>
                         </ul>
                    </li>
                    <li><a href="#">الخدمات</a></li>
                    <li><a href="#" class="active">+ الحساب</a>
                        <ul>
                            <li><a href="login.html">تسجيل الدخول </a></li>
                            <li><a href="signUp.html"> حساب جديد </a></li>
                        </ul>
                    </li>
                    <li><a href="#">اتصل بنا</a></li>
                </ul>
            </nav>
            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-shopping-cart"></a>
            </div>
            <form action="" class="search-form">
                <input type="search" placeholder="ما الذي تبحث عنه؟" id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>
    </header>
	<div class="sort m"><b class="m"></b>
		<select onchange="location = this.value;" class="m">
			<option value="#&amp;order=ASC" class="m">الفرز بحسب السعر</option>
					<option value="#&amp;order=ASC" class="m">بالأقل</option>
					<option value="#&amp;order=DESC" class="m">بالأعلى</option>
		  </select>
		</div>
	<form action="index.php" >
		<h1>تسجيل مستخدم</h1>
		<div class="form-group">
			<input type="text" name="username" id="username" placeholder=" " required>
			<label for="username">اسم المستخدم</label>
			<i class="fas fa-user"></i>
		</div>
		<div class="form-group">
			<input type="email" name="email" id="email" placeholder=" " required>
			<label for="email">البريد الإلكتروني</label>
			<i class="fas fa-envelope"></i>
		</div>
		<div class="form-group">
			<input type="password" name="password" id="password" placeholder=" " required>
			<label for="password">كلمة المرور</label>
			<i class="fas fa-lock"></i>
		</div>
		<div class="form-group">
			<input type="password" name="Rpassword" id="confirm_password" placeholder="  " required>
			<label for="confirm_password">تأكيد كلمة المرور</label>
			<i class="fas fa-lock"></i>
		</div>
		<input type="submit" value="تسجيل">
	</form>
    <section class="footer">
        <div class="box-containar">
            <div class="box">
                <h3>أفضل الفئات</h3>
                 <a href="#">نظارات شمسية رجالي<i class="fas fa-angle-left"></i></a>
                 <a href="#">نظارات شمسية للنساء<i class="fas fa-angle-left"></i></a>
                 <a href="#">نظارات طبي<i class="fas fa-angle-left"></i></a>
            </div>
    
            <div class="box">
                <h3>خدمة العملاء</h3>
                 <a href="#">الأسئلة الأكثر شيوعا<i class="fas fa-angle-left"></i></a>
                 <a href="#">تتبع طلبك<i class="fas fa-angle-left"></i></a>
                 <a href="#">حسابي الشخصي<i class="fas fa-angle-left"></i></a>
                 <a href="#">الشحن والتوصيل<i class="fas fa-angle-left"></i></a>
                 <a href="#">وسائل الدفع<i class="fas fa-angle-left"></i></a>
                 <a href="#">الاستبال والارجاع<i class="fas fa-angle-left"></i></a>
            </div>
    
            <div class="box">
                <h3>تابعونا</h3>
                 <a href="#">انستقرام<i class="fab fa-instagram"></i></a>
                 <a href="#">تويتر<i class="fab fa-twitter"></i></a>
                 <a href="#">فيسبوك<i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</body>
</html>