<!DOCTYPE html>
<html>

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tracerstudy.ac.id.login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/icons/LOGO UNIKA.png" />
    <script>
        function clearFields() {
            document.getElementById('username').value = '';
            document.getElementById('password').value = '';
        }
    </script> 
</head>

<body> 

    <div class="info-box"> 
        <img src="unika.png" alt=""> 
        <div class="atur">
        <h2> TRACER STUDY </h2> <div class="link-container">
        <h3>Universitas Katolik Santo Thomas</h3>
        <a href="../static/index.php">Home</a>
    </div>
    </div>
   
</div>

     <div class="container">
        <div class="login">
            <form action="ceklogin.php" method="post" onsubmit="clearFields()">
                <h1>Halaman Login</h1>
                <hr>
                <label for="">Username</label>
                <input type="text" required name="username" placeholder="Username" >
                <label for="">Password</label>
                <input type="password" required name="password" placeholder="Password" >
                <button class="button"> Login </a>
                    </button>
            </form>
        </div>
        <div class="right">
            <img src="sarjana.jpeg" alt="">
           </div>
        </div>
    
    
</body>

</html>