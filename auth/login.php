<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body class="bg-black">
    <section class="container position-absolute top-50 start-50 translate-middle">
      <div class="card bg-dark border-danger text-danger card-body p-5 text-center">
            <div class="mb-md-5 mt-md-2 pb-0">
              <form action="../utils/proses_login.php" method="post">
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-3">Silahkan Masukkan Email dan Password Anda!</p>
                <div class="text-start">
                  <div data-mdb-input-init class="form-outline form-white mb-2 mt-2">
                    <label class="form-label" for="typeEmailX">Email</label>
                    <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" />
                  </div>
                  <div data-mdb-input-init class="form-outline form-white mb-2">
                    <label class="form-label" for="typePasswordX">Password</label>
                    <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" />
                  </div>
                </div>
                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit" name="login">Login</button>
              </form>
              <p class="mb-0">Don't have an account? <a href="register.php" class="text-white-50 fw-bold">Sign Up</a></p>
            </div>
            </div>
      </div>
    </section>
  </body>
</html>