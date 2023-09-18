<!DOCTYPE html>
<html lang="en">
<head>
  <style>
body { 
        background-image: url("https://c0.wallpaperflare.com/preview/532/944/890/vintage-grunge-aesthetics-australia.jpg"); 
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
<body>
  <form action="<?php echo base_url(); ?>auth/register" method="post" class="space-y-12">
  <div class="space-y-4"> 
  <div class="container ">

    <div class="card mt-5 w-50 justify-content-center mx-auto bg-transparent">
      <h5 class="card-header mx-auto text-white text-bold">Register</h5>
      <div class="card-body">
        <form action="connect_register.php" method="post">
          <div class="mb-2">
            <label for="exampleInputName" class="form-label text-white text-bold " placeholder="Nama">Nama</label>
            <input name="nama" type="nama" class="form-control" id="exampleInputName" placeholder="Nama" >
        </div>
        <div class="mb-2">
          <label for="exampleInputUserName" class="form-label text-white text-bold " placeholder="User Name" >User Name</label>
          <input name="username" type="username" class="form-control" id="exampleInputUserName" placeholder="username">
        </div>
          <div class="mb-2">
            <label for="exampleInputgender" class="form-label text-white text-bold " placeholder="Gender" >Gender</label>
            <input name="gender" type="gender" class="form-control" id="exampleInputGender" placeholder="gender">
          <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label text-white text-bold " placeholder="Email Address" >Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Input your Email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text text-white text-bold">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-2">
            <label for="exampleInputPassword1" class="form-label text-white text-bold" placeholder="password">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="input your password">
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-success text-bg-info text-white text-bold">Register</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
  </body>
  </html>