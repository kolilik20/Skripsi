<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='' rel='icon' type='image/x-icon'/>
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);
    .regist-page {
        width: 400px;
        padding: 5% 0 0;
        margin: auto;
    }
    .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 50px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 90%;
        border: 0;
        margin: 0 0 10px;
        padding: 10px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .form button {
        margin-left: 73px;
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #00695c;
        width: 100%;
        border: 0;
        padding: 10px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
    }
    .form button:hover,.form button:active,.form button:focus {
        background: #43A047;
    }
    .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
    }
    .form .message a {
        color: #004d40;
        text-decoration: none;
    }
    .form .register-form { display: none; }
    .container {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
    }
    .container:before, .container:after {
        content: "";
        display: block;
        clear: both;
    }
    .container .info {
        margin: 50px auto;
        text-align: center;
    }
    .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
    }
    .container .info span {
        color: #4d4d4d;
        font-size: 12px;
    }
    .container .info span a {
        color: #000000;
        text-decoration: none;
    }
    .container .info span .fa { color: #EF3B3A; }
    body {
     background: #004d40;      
    }
    </style>
</head>
</head>
<body>
<div class="regist-page">
        <div class="form">
	<h3>Sign Up</h3>
	<form action="proses_register.php" method="post">		
		<table>
			<tr>
				<input type="text" name="nama" placeholder="Nama" required/>				
			</tr>
            <tr>
				<input type="text" name="jk" placeholder="Jenis Kelamin" required/>				
			</tr>	
            <tr>
                <input type="text" name="email" placeholder="Email" required/>    					
			</tr>
			<tr>
                <input type="text" name="username" placeholder="Username" required/>    					
			</tr>	
			<tr>
                <input type="text" name="password" placeholder="Password" required/>    					
	        </tr>	
		
				<td></td>
				<td><button type="submit">Sign Up</button></td>	
                						
		</table><br><a href="index.php">Sudah Punya Akun?</a>
	</form>
	</div>
    </div>
</body>
</html>

