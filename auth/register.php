<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="background-color:brown;">
  
  <section>
  <div class="container py-2 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body px-5 py-2">

            <div class="mb-md-5 mt-md-2 pb-2">
              <form action="../utils/proses_register.php" method="POST">
                <div class="text-center">
                <h2 class="fw-bold mb-2 text-uppercase">Registration</h2>
                <p class="text-white-50">Silahkan masukkan data anda dengan benar</p>
                </div>

                <div class="text-end">
                  <p style="color:white">daftar sebagai</p>
                  <select name="level" id="">              
                    <option value="user" >User</option>
                    <option value="alumni">Alumni</option>
                  </select>
              </div>

              <div data-mdb-input-init class="form-outline form-white">                
              <label class="form-label" for="typeEmailX">Nama</label>
                <input type="text" id="typeEmailX" class="form-control" name="nama" required />
              </div>
              
              <div data-mdb-input-init class="form-outline form-white">
              <label class="form-label" for="typeEmailX">Email</label>
                <input type="email" id="typeEmailX" class="form-control" name="email" required/>
              </div>
              
              <div data-mdb-input-init class="form-outline form-white">
              <label class="form-label" for="typeEmailX">Alamat</label>
                <input type="text" id="" class="form-control" name="alamat" required/>
              </div>

              <div data-mdb-input-init class="form-outline form-white">
              <label class="form-label" for="typeEmailX">No HP</label>
                <input type="text" id="" class="form-control" name="no_hp" required />
              </div>

              <div data-mdb-input-init class="form-outline form-white">
              <label class="form-label" for="typePasswordX">Password</label>
                <input type="password" id="" class="form-control" name="password" required/>
              </div>                
              <div class="text-center">
                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5 mt-2" type="submit" name="register">Daftar</button>
                <p class="mb-0 mt-1">Sudah punya akun? <a href="login.php" class="text-white-50 fw-bold">Login</a></p>
              </div>
              </form>            

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>