<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashbord</title>
	
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.addons.css" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style.css.map">
    <link rel="stylesheet" href="assets/css/styles.css.map">
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <style> img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none; }</style>
  <body>
    <div class="authentication-theme auth-style_1">
      <div class="row">
        <div class="col-lg-5 col-md-7 col-sm-9 col-11 mx-auto">
          <div class="grid">
            <div class="grid-body shadow">
            <?php echo $error ?>
              <div class="row">
                <div class="col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper">
                  <form method="POST">
                    <div class="form-group input">
                    <input type="email" value="" name="email" class="form-control" required placeholder="">
                    </div>
                    <div class="form-group input">
                    <input type="password" name="password" value="" class="form-control" required placeholder="">
                    </div>
                    <div class="form-inline">
                      <div class="form-group">
                     
                      </div>
                    </div>
                    <button type="submit" name="userLogin" class="btn btn-success btn-block shadow"> Login </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
                  <div class="signup-link">
                    <p><a href="#">Forgot Password?</a></p> 
                    <p><a href="#">F.A.Q</a></p>
                    <p><a href="obs-login">OBS</a></p>
                    <p><a href="#">Need Help?</a></p>
                  </div>
      </div>
    </div>
    <script src="assets/vendors/js/core.js"></script>
    <script src="assets/vendors/js/vendor.addons.js"></script>
    <script src="assets/js/template.js"></script>
  </body>
</html>