<header class="header_area">
    <div class="main_menu" style="background-color: #FFDDCA;">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="dashboard.php"><h4 style="font-size: 28px;">🅵🅾🅾🅳 🅿🅻🅰🆉🅰</h4></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
              <li class="nav-item">
                <a href="add_restaurant.php" class="nav-link" role="button" aria-haspopup="true"
                  aria-expanded="false">Insert Restaurant</a>
              </li>
              <li class="nav-item">
                <a href="delete_restaurant.php" class="nav-link" role="button" aria-haspopup="true"
                  aria-expanded="false">Delete Restaurant</a>
              </li>
              <?php
                      if(!empty($_SESSION['einfo']))
                      {
              ?>
              <li class="nav-item"><a class="nav-link" href="inbox.php">Inbox</a></li>
              <li class="nav-item"><a class="nav-link" href="setting.php">Change Password</a></li>
              <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
              <?php
                      }
              ?>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>