<!DOCTYPE html> 
<html lang="en"> 
<head> 
<style>
    body {
        background-image: url('https://foto.data.kemdikbud.go.id/getImage/20328986/12.jpg');
            background-size: cover; 
            background-repeat: no-repeat;
            background-attachment: fixed; 
            
    }

    .background-image-black {
        height: 100vh;
        background-color: rgb(0, 0, 0, 0.4);
    }
</style>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Halaman Beranda Sekolah</title> 
    <!-- Tambahkan tautan ke file CSS Bootstrap --> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
</head> 

<body class="min-vh-100 d-flex align-items-center"> 
    
    <!-- container --> 
    <div class="container text-center text-white text-bold">
        <h1 style="text-align: center; color:white;">Welcome To School</h1> 
        <img src="https://binusasmg.sch.id/ppdb/logobinusa.png" alt="image" height="200px" width="200px" > 
        <h1 sytle="">Smk Bina Nusantara</h1>
        <h2 style="text-align: center; color:red;">Cerdas Santun Dan Berbudiluhur</h2>   
        <form action="register.php" method="post">
            <a href="./auth/register" type="submit" class="btn btn-danger text-bg-info">REGISTER</a>
        <form action="login.php" method="post">
            <a href="./auth" type="submit" class="btn btn-warning text-bg-info ml-3">LOGIN</a>
            </div>     
</div> 
</body> 
</html>