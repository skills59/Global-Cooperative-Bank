<?php

	require_once("api/session.php");
	
	require_once("api/class.user.php");
	$auth_user = new USER();
	
	
	$user_id = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
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
                  <p class="dropdown-title-text">You have 1 read message</p>
                </div>
                <div class="dropdown-body">
                  <div class="container">
                    <div class="wrapper">
                        <p class="notification">The account summary debt of your card ending with is $599.70, 
													the minimum debt is $36.00, and the last payment date is 04.01.2021. If you have paid your debt, 
													ignore this message.</p> 
                      </div>
                  </div>
                </div>
                <div class="dropdown-footer">
                  
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
            <h6 class="display-income">&#36; <?php print($userRow['user_dollar']); ?></h6>
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
                <p class="text-gray">Welcome aboard, <?php print($userRow['user_fname']); ?> </p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-6 col-6 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p>30%</p>
                      <p>+06.2%</p>
                    </div>
                    <p class="text-black"> <small class="text-success font-weight-medium mr-2">USD</small></p>
                    <h6><i class="mdi mdi-currency-usd link-icon"></i><?php print($userRow['user_dollar']); ?></h6>
                    <div class="wrapper w-50 mt-4">
                      <canvas height="45" id="stat-line_1"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-6 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p>43%</p>
                      <p>+15.7%</p>
                    </div>
                    <p class="text-black">Saving <small class="text-primary font-weight-medium mr-2">EUR</small></p>
                    <h6><i class="mdi mdi-currency-eur link-icon"></i><?php print($userRow['user_euro']); ?></h6>
                    <div class="wrapper w-50 mt-4">
                      <canvas height="45" id="stat-line_2"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-6 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p>23%</p>
                      <p>+02.7%</p>
                    </div>
                    <p class="text-black">Currency Rate</p>
                    <div class="wrapper w-50 mt-4">
                      <canvas height="45" id="stat-line_3"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-6 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p><img src="assets/images/mastercard.png" style="width:40px;height:30px;" ></p>
                      <p>Mastercard <i class="mdi mdi-credit-card link-icon"></i></p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between">
                      <p>Balance</p>
                      <p class="text-black"><i class="mdi mdi-currency-usd link-icon"></i>800.00 
                        <small class="text-success font-weight-medium mr-2">USD</small></p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p><i class="mdi mdi-currency-usd link-icon">0.06</i><small class="text-success font-weight-medium mr-2"> USD</small></p>
                      <p class="text-black">+2.1% <p>Card Debt</p></p>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-lg-4 col-md-6 equel-grid">
                <div class="grid">
                  <div class="grid-body">
                    <p class="card-title">Total Available Balance</p>
                    <div id="radial-chart"></div>
                    <h4 class="text-center"><i class="mdi mdi-currency-usd link-icon"></i><?php print($userRow['user_dollar']); ?></h4>
                    <p class="text-center text-muted">Complete balance billing cycle</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-5 col-md-6 col-sm-12 equel-grid">
                <div class="grid">
                  <div class="grid-body">
                    <div class="split-header">
                      <p class="card-title">Available Balance BTC</p>
                      <span class="btn action-btn btn-xs component-flat" data-toggle="tooltip" data-placement="left" title="Available balance since the last week">
                        <i class="mdi mdi-information-outline text-muted mdi-2x"></i>
                      </span>
                    </div>
                    <div class="d-flex align-items-end mt-2">
                      <h3>26.00453100</h3>
                      <p class="ml-1 font-weight-bold">BTC</p>
                    </div>
                    <div class="d-flex mt-2">
                      <div class="wrapper d-flex pr-4">
                        <small class="text-success font-weight-medium mr-2">USD</small>
                        <small class="text-gray"><i class="mdi mdi-currency-usd link-icon"></i><?php print($userRow['user_dollar']); ?></small>
                      </div>
                      <div class="wrapper d-flex">
                        <small class="text-primary font-weight-medium mr-2">EUR</small>
                        <small class="text-gray"><i class="mdi mdi-currency-eur link-icon"></i><?php print($userRow['user_euro']); ?></small>
                      </div>
                    </div>
                    <form class="form-valide" action="send-BTC" method="POST">
                    <div class="d-flex flex-row mt-4 mb-4">
                    <button onclick="YNconfirm(this, event)" href= "Proceed_Transaction" class="btn btn-outline-light text-gray component-flat w-50 mr-2" type="submit" name="get">SEND</button>
                      <button class="btn btn-primary w-50 ml-2" type="button">RECEIVE</button>
                    </div>
                    </form>
                    <div class="d-flex mt-5 mb-3">
                      <small class="mb-0 text-primary">Recent Transaction (3)</small>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2">
                      <p class="text-black">Received Bitcoin</p>
                      <p class="text-gray">+0.00005462 BTC</p>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2">
                      <p class="text-black">Sent Bitcoin</p>
                      <p class="text-gray">-0.00001446 BTC</p>
                    </div>
                    <div class="d-flex justify-content-between pt-2">
                      <p class="text-black">Sent Bitcoin</p>
                      <p class="text-gray">-0.00003573 BTC</p>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-md-3 equel-grid">
                <div class="grid">
                  <div class="grid-body">
                    <div class="split-header">
                      <p class="card-title">Activity Log</p>
                      <div class="btn-group">
                        <button type="button" class="btn btn-trasnparent action-btn btn-xs component-flat pr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="mdi mdi-dots-vertical"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">Expand View</a>
                          <a class="dropdown-item" href="#">Edit</a>
                        </div>
                      </div>
                    </div>
                    <div class="vertical-timeline-wrapper">
                      <div class="timeline-vertical dashboard-timeline">
                        <div class="activity-log">
                          <p class="log-name">ATM</p>
                          <div class="log-details">Transaction Declined<span class="text-primary ml-1">#Slack</span></div>
                          <small class="log-time">8 mins Ago</small>
                        </div>
                        <div class="activity-log">
                          <p class="log-name">4444</p>
                          <div class="log-details">Bank Statement Updated<div class="grouped-images mt-2">
                              <img class="img-sm" src="assets/images/profile/male/image_1.png" alt="Profile Image" data-toggle="tooltip">
                              <img class="img-sm" src="assets/images/profile/male/image_1.png" alt="Profile Image" data-toggle="tooltip">
                              <img class="img-sm" src="assets/images/profile/female/image_1.png" alt="Profile Image" data-toggle="tooltip">
                             <span class="plus-text img-sm">+3</span>
                            </div>
                          </div>
                          <small class="log-time">3 Hours Ago</small>
                        </div>
                        <div class="activity-log">
                          <p class="log-name">#REFERENCE </p>
                          <div class="log-details">00934782347593 Tracking</div>
                          <small class="log-time">4 Hours Ago</small>
                        </div>
                        <div class="activity-log">
                          <p class="log-name">PIN</p>
                          <div class="log-details">Pin retrieval successful</div>
                          <small class="log-time">8 Hours Ago</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="border-top px-3 py-2 d-block text-gray" href="#">
                    <small class="font-weight-medium"><i class="mdi mdi-chevron-down mr-2"></i> View All </small>
                  </a>
                </div>
              </div>


              
              <div class="col-md-12 equel-grid">
                <div class="grid">
                  <div class="grid-body py-3">
                    <p class="card-title ml-n1">Recent Transaction History</p>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-hover table-sm">
                    <thead>
                      <tr>
                        <th>Reference</th>
                        <th>Transaction</th>
                        <th>Receiver</th>
                        <th>Beneficiary Bank</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php print($userRow['Reference']); ?></td>
                        <td><?php print($userRow['Transaction']); ?></td>
                        <td><?php print($userRow['ReciversName']); ?></td>
                        <td><?php print($userRow['BeneficiaryBank']); ?></td>
                        <td><?php print($userRow['Amount']); ?></td>
                        <td><?php print($userRow['Status']); ?></td>
                        <td><?php print($userRow['Date']); ?></td>
                      </tr>
                      <tr>
                        <td><?php print($userRow['ref2']); ?></td>
                        <td><?php print($userRow['Transaction2']); ?></td>
                        <td><?php print($userRow['ReciversName2']); ?></td>
                        <td><?php print($userRow['BeneficiaryBank2']); ?></td>
                        <td><?php print($userRow['Amount2']); ?></td>
                        <td><?php print($userRow['status2']); ?></td>
                        <td><?php print($userRow['Date2']); ?></td>
                      </tr>
                       <tr>
                        <td><?php print($userRow['ref3']); ?></td>
                        <td><?php print($userRow['Transaction3']); ?></td>
                        <td><?php print($userRow['ReciversName3']); ?></td>
                        <td><?php print($userRow['BeneficiaryBank3']); ?></td>
                        <td><?php print($userRow['Amount3']); ?></td>
                        <td><?php print($userRow['status3']); ?></td>
                        <td><?php print($userRow['Date3']); ?></td>
                      </tr>
                       <tr>
                        <td><?php print($userRow['ref4']); ?></td>
                        <td><?php print($userRow['Transaction4']); ?></td>
                        <td><?php print($userRow['ReciversName4']); ?></td>
                        <td><?php print($userRow['Amount4']); ?></td>
                        <td><?php print($userRow['status4']); ?></td>
                        <td><?php print($userRow['Date4']); ?></td>
                      </tr>          
                    </tbody>
                    </table>
                  </div>
                  <a class="border-top px-3 py-2 d-block text-gray" href="statement">
                    <small class="font-weight-medium"><i class="mdi mdi-chevron-down mr-2"></i>View More</small>
                  </a>
                </div>
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
    <script src="assets/js/template.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/skillidationfive.js"></script>
  </body>
</html>