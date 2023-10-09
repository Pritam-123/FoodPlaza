<header class="header_area">
    <div class="main_menu" style="background-color: #FFDDCA;">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.php"><h4 style="font-size: 28px;">🅵🅾🅾🅳 🅿🅻🅰🆉🅰</h4></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="restaurant.php">Restaurant List</a></li>
              <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
              <?php
                      if(!empty($_SESSION['uinfo']))
                      {
              ?>
              <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
              <?php
                      }
                      else
                      {
              ?>
							<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Login/Register</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.php">Login/Register</a></li>
                  <li class="nav-item"><a class="nav-link" href="restaurant/">Restaurant Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="admin/">Admin Login</a></li>

                </ul>
              </li>
              <?php
                      }
              ?>
            </ul>

            <?php
                  if(!empty($_SESSION['cart']))
                  {
            ?>
            <ul class="nav-shop" id="qua">
              <li class="nav-item"><button><a href="cart.php"><i class="ti-shopping-cart"></i><span class="nav-shop__circle"><?php echo $_SESSION['cart']; ?></span></a></button></li>
            </ul>
            <?php
                  }
                  else
                  {
                    $_SESSION['cart']=0;
            ?>
            <ul class="nav-shop" id="qua">
              <li class="nav-item"><button><a href="restaurant.php"><i class="ti-shopping-cart"></i><span class="nav-shop__circle"><?php echo $_SESSION['cart']; ?></span></a></button></li>
            </ul>
            <?php
                  }
                ?>
          </div>
        </div>
      </nav>
    </div>
</header>