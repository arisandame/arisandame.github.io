<?PHP
session_start();
// Periksa apakah pengguna sudah login
if (isset($_SESSION['password'])) {
	// Jika sudah login, redirect kembali ke index.php
	header("Location: execute.php");
	exit();
}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
</head>
<body>
	<div class="container">
        <form action="" method="POST">
            <div class="custome-input">
                <input type="password" name="password" placeholder="Your Password">
                <i class='bx bx-lock-alt'></i>
            </div>
            <button type="submit" name="submit" class="login">Login</button>
        </form>
    </div>
</html>
<?PHP
error_reporting(0);
if (isset($_POST['submit'])) {
	$password = $_POST['password'];
	$validpass = "ngertio";
	if ($password === $validpass) {
		$_SESSION['password'] = $password;
		echo "
		<script type='text/javascript'>
		window.location.href = 'execute.php';
		</script>";
	} else {
		echo "<script type='text/javascript'>
		alert('Password salah bos!');
		</script>";
	}
} else {
}
?>
<style>
      @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800&display=swap');

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Mulish', sans-serif;
}

body{
    height: 100vh;
    display: flex;
    margin:200px 0 0 0;
    justify-content: center;
    background: #092756;
		background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -moz-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -moz-linear-gradient(-45deg, #670d10 0%, #092756 100%);
		background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -webkit-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -webkit-linear-gradient(-45deg, #670d10 0%, #092756 100%);
		background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -o-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -o-linear-gradient(-45deg, #670d10 0%, #092756 100%);
		background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -ms-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -ms-linear-gradient(-45deg, #670d10 0%, #092756 100%);
		background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), linear-gradient(to bottom, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), linear-gradient(135deg, #670d10 0%, #092756 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3E1D6D', endColorstr='#092756', GradientType=1);
}

.container{
    width: 440px;
    padding: 40px 32px;
    border-radius: 8px;
}

.container h1{
    font-size: 1.6rem;
}

.container .social-login{
    display: flex;
    gap: 16px;
    margin-top: 20px;
}

.container .social-login button{
    padding: 8px;
    width: 100%;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-size: 1rem;
    font-weight: 700;
    color: #323760;
    border: 1px solid #6667b0;
    background: transparent;
    cursor: pointer;
    transition: all 0.3s ease;
}

.container .social-login button i{
    font-size: 26px;
}

.container .social-login button:hover{
    color: #6b43ff;
    border-color: #6b43ff;
}

.container .divider{
    display: flex;
    align-items: center;
    gap: 20px;
}

.container .divider .line{
    height: 1px;
    width: 100%;
    background: #1d1d1d;
    opacity: 0.2;
    margin: 30px 0 16px;
}

.container form label{
    color: #1d1d1d;
    font-size: 14px;
    font-weight: bold;
    letter-spacing: 0.03rem;
    display: block;
    margin-top: 12px;
}

.container form .custome-input{
    position: relative;
}

.container form .custome-input input{
    color: #1d1d1d;
    font-size: 16px;
    font-weight: 500;
    width: 100%;
    height: 46px;
    letter-spacing: 0.03rem;
    border: 1px solid #1d1d1d;
    background: transparent;
    outline: none;
    border-radius: 8px;
    text-indent: 20px;
    margin-top: 6px;
    transition: all 0.3s ease;
}

.container form .custome-input input:focus{
    border-color: #5222fd;
}

.container form .custome-input i{
    position: absolute;
    font-size: 28px;
    right: 10px;
    top: 14px;
    transition: all 0.3s ease;
}

.container form .custome-input input:focus + i{
    color: #5222fd;
}

.container form .login{
    width: 100%;
    margin-top: 30px;
    background: rgba(17, 39, 102, 0.99);
    color: #fff;
    border: none;
    line-height: 50px;
    font-size: 18px;
    letter-spacing: 0.025em;
    cursor: pointer;
    font-weight: 800;
    border-radius: 8px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
}

.container form .login:hover{
    background: #5222fd;
}

.container .links{
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
}

.container .links a{
    color: #6b43ff;
    font-weight: 600;
    font-size: 1rem;
    text-decoration: none;
    text-underline-offset: 6px;
    text-decoration-color: #6b43ff;
}

.container .links a:hover{
    text-decoration: underline;
}
</style>