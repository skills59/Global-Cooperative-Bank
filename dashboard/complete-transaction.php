
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashbord</title>
    
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style.css.map">
    <link rel="stylesheet" href="assets/css/styles.css.map">
    <link rel="shortcut icon" href="asssets/images/favicon.ico" />
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
  </head>
  <style> img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none; }</style>
  <body class="header-fixed">
    <nav class="t-header">
      <div class="t-header-brand-wrapper">
        <a href="index">
          <img class="Bank" src="assets/images/" alt="">
          <img class="logo-mini" src="assets/images/" alt="">
        </a>
      </div>
      <div class="t-header-content-wrapper">
        <div class="t-header-content">
          <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
            <i class="mdi mdi-menu"></i>
          </button>
          <ul class="nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="notificationDropdown" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline mdi-1x"></i>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="notificationDropdown">
                <div class="dropdown-header">
                  <h6 class="dropdown-title">Notifications</h6>
                </div>
                <div class="dropdown-body">
                     
                </div>
                <div class="dropdown-footer">
                  <a href="#">View All</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="messageDropdown" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-message-outline mdi-1x"></i>
                <span class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="messageDropdown">
                <div class="dropdown-header">
                  <h6 class="dropdown-title">Messages</h6>
                  <p class="dropdown-title-text">You have 0 unread messages</p>
                </div>
                <div class="dropdown-footer">
                  <a href="#">View All</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="appsDropdown" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-apps mdi-1x"></i>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="appsDropdown">
                <div class="dropdown-header">
                  <h6 class="dropdown-title"></h6>
                </div>
                <div class="dropdown-body border-top pt-0">
                  <a class="dropdown-grid" href="profile">
                    <i class="grid-icon mdi mdi-account-circle mdi-2x"></i>
                    <span class="grid-tittle">Profile</span>
                  </a>
                  <a class="dropdown-grid" href="settings">
                    <i class="grid-icon mdi mdi-settings mdi-2x"></i>
                    <span class="grid-tittle">Settings</span>
                  </a>
                  <a class="dropdown-grid" href="logout?logout=true">
                    <i class="grid-icon mdi mdi-power mdi-2x"></i>
                   <span class="grid-tittle">Logout</span>
                  </a>
                </div>
                <div class="dropdown-footer">
                  <a href="#"></a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
    <div class="page-body">
      <div class="sidebar">
        <div class="user-profile">
          <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="assets/images/profile/male/image_1.png" alt="profile image">
          </div>
          <div class="info-wrapper">
            <p class="user-name"></p>
            <h6 class="display-income">&#36; .00</h6>
          </div>
        </div>
        <ul class="navigation-menu">
          <li class="nav-category-divider">MAIN</li>
          <li>
            <a href="index">
              <span class="link-title">Dashboard</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>
          <li>
            <a href="money_transfer">
              <span class="link-title">Money Transfer</span>
              <i class="mdi mdi-swap-horizontal link-icon"></i>
            </a>
          </li>
          <li>
            <a href="statement">
              <span class="link-title">My Statements</span>
              <i class="mdi mdi-receipt link-icon"></i>
            </a>
          </li>
          <li>
            <a href="investment">
              <span class="link-title">Investment Services</span>
              <i class="mdi mdi-bank link-icon"></i>
            </a>
          </li>
          <li>
            <a href="currency">
              <span class="link-title">Foreign Currency</span>
              <i class="mdi mdi-credit-card link-icon"></i>
            </a>
          </li>
          <li>
            <a href="payments">
              <span class="link-title">Payments</span>
              <i class="mdi mdi-wallet link-icon"></i>
            </a>
          </li>
          <li>
            <a href="loan">
              <span class="link-title">Loans</span>
              <i class="mdi mdi-square-inc-cash link-icon"></i>
            </a>
          </li>
          <li>
            <a href="insurance">
              <span class="link-title">Insurance</span>
              <i class="mdi mdi-scale-balance link-icon"></i>
            </a>
          </li>
          <li>
            <a href="application">
              <span class="link-title">Applications</span>
              <i class="mdi mdi-note link-icon"></i>
            </a>
          </li>
          <li>
            <a href="settings">
              <span class="link-title">Settings</span>
              <i class="mdi mdi-settings link-icon"></i>
            </a>
          </li>
      </div>
    
      <div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="content-viewport">
            <div class="row">
              <div class="col-12 py-5">
                <h4>Dashboard</h4>
                <p class="text-gray">Welcome aboard, </p>
              </div>
            </div>


           
                      


              


              
              
              






            
          </div>
        </div>
        <footer class="footer">
          <div class="row">
            <div class="col-sm-6 text-center text-sm-right order-sm-1">
              
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="assets/vendors/js/core.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/js/charts/chartjs.addon.js"></script>
    <script src="assets/js/skillidationtwo.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/dashboard.js"></script>
  </body>
</html>