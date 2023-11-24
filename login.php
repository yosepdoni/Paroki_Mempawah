<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <title>Login Form</title>
  <style>
    body,
    html {
      height: 100%;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #f0f0f0;
    }

    .login-container {
      background-color: white;
      padding: 20px;
      width: 100%;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .input-group-text {
      background-color: transparent;
      border: none;
    }

    .input-group-text:hover {
      cursor: pointer;
    }

    #eyeIcon {
      transition: color 0.3s;
    }

    #eyeIcon:hover {
      color: rgba(0, 0, 0, 0.5);
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 login-container">
        <form method="post" action="login_process.php">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
              <span class="input-group-text">
                <i class="bi bi-eye-slash" id="eyeIcon"></i>
              </span>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="mt-4">
        <a class="text-dark text-center" style="text-decoration:none;" href="registrasi.php">Belum punya akun?<i class="text-warning"> Registrasi</i></a>
        </div>
        <?php if (isset($error_message)) { ?>
          <div class="alert alert-danger">
            <?php echo $error_message; ?>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>

  <script>
    const togglePassword = document.querySelector('#eyeIcon');
    const password = document.querySelector('#exampleInputPassword1');

    togglePassword.addEventListener('click', function () {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);

      if (type === 'password') {
        togglePassword.classList.add('bi-eye-slash');
        togglePassword.classList.remove('bi-eye');
      } else {
        togglePassword.classList.remove('bi-eye-slash');
        togglePassword.classList.add('bi-eye');
      }
    });
  </script>
</body>

</html>