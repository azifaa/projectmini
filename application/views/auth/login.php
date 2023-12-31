<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    body {
      background-image: url("https://cdn.wallpapersafari.com/76/33/AHMUj5.jpg");
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <form action="<?php echo base_url(); ?>auth/aksi_login" method="post" class="space-y-12">
    <div class="space-y-4">
      <div class="container ">
        <div class="card mt-5 w-50 justify-content-center mx-auto bg-transparent">
          <h5 class="card-header mx-auto text-white text-bold">Login</h5>
          <div class="card-body">
            <form action="connect_login.php" method="post">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white text-bold">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                  placeholder="Input your Email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text text-white text-bold">We'll never share your email with anyone
                  else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-white text-bold">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                  placeholder="input your password">
                <input type="checkbox" id="showPassword"
                  onclick="togglePasswordVisibility('exampleInputPassword1')">Show Password
              </div>

              <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-warning text-bg-info text-white text-bold">LOGIN</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </form>

  <script>
    function togglePasswordVisibility(inputId) {
      const passwordInput = document.getElementById(inputId);

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        document.querySelector(".toggle-password").textContent = "Hide Password";
      } else {
        passwordInput.type = "password";
        document.querySelector(".toggle-password").textContent = "Show Password";
      }
    }
  </script>
</body>

</html>