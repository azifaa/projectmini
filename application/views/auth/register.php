<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    body {
      background-image: url("https://static.vecteezy.com/system/resources/previews/008/311/935/non_2x/the-illustration-graphic-consists-of-abstract-background-with-a-blue-gradient-dynamic-shapes-composition-eps10-perfect-for-presentation-background-website-landing-page-wallpaper-vector.jpg");
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <form action="<?php echo base_url(); ?>auth/aksi_register" method="post" class="space-y-12">
    <div class="space-y-4">
      <div class="container ">
        <div class="card mt-5 w-50 justify-content-center mx-auto bg-transparent">
          <h5 class="card-header mx-auto text-white text-bold">Register</h5>
          <div class="card-body">
            <form action="connect_register.php" method="post">
              <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label text-white text-bold " placeholder="Email Address">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Input your Email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text text-white text-bold">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-2">
                <label for="exampleInputUserName" class="form-label text-white text-bold " placeholder="User Name">User Name</label>
                <input name="username" type="username" class="form-control" id="exampleInputUserName" placeholder="username">
              </div>
              <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label text-white text-bold" placeholder="password">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="input your password">
                <input type="checkbox" id="showPassword" onclick="togglePasswordVisibility('exampleInputPassword1')">Show Password</input>
               
              </div>
              <div class="mb-2">
                <label for="exampleInputrole" class="form-label text-white text-bold " placeholder="Role">Role</label>
                <input name="role" type="role" class="form-control" id="exampleInputrole" placeholder="Role">
              </div>
              <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-success text-bg-info text-white text-bold">Register</button>
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
      const passwordToggle = document.querySelector(".toggle-password");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggle.textContent = "Hide Password";
      } else {
        passwordInput.type = "password";
        passwordToggle.textContent = "Show Password";
      }
    }
  </script>
</body>

</html>
