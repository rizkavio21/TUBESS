  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<body style="font-family:'Montserrat', sans-serif;" class="bg-gradient-primary">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="card o-hidden border-0 my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <?= $this->session->flashdata('message'); ?>
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">USER ACCOUNT</h1>
                  </div>
                  <?php echo form_open_multipart('index.php/Hello/check'); ?>
                    <div class="form-group">
                      <label><b>Username</b> </label>
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="uname" required>
                    </div>
                    <div class="form-group">
                      <label ><b>Password</b></label>
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" name= "psw" required>
                    </div>

                    <button type="submit" class="btn btn-success btn-user btn-block">Login</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  </body>