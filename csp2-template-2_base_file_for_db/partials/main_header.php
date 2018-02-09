<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php">Kraff Beeer</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <?php

        if (isset($_SESSION['current_user'])) {
          echo '
            <li>
              <a href="profile.php">' . ucfirst($_SESSION['current_user']) . '</a>
            </li>
          ';
        }

        ?>

        <li>
          <a href="cart.php">My Cart 
            <?php

            if (isset($_SESSION['current_user']) && isset($_SESSION['item_count'])) {
              echo '
                <strong style="color:red;">( '.$_SESSION['item_count'].' )</strong>
              ';
            }

            ?>
          </a>
        </li>
        <li>
          <a href="about.php">About</a></li>
        <li>
          <a href="careers.php">Careers</a>
        </li>
        <li>
          <a href="catalog.php">Catalog</a>
        </li>
        <li>
          <a href="test.php">Test</a>
        </li>
        <?php

        if (isset($_SESSION['current_user'])) {
          // User should be routed to profile.php via Username link
          // echo '
          //   <li>
          //     <a href="profile.php">Profile</a>
          //   </li>
          // ';

          if ($_SESSION['role'] == 'admin') {
            echo '
              <li>
                <a href="settings.php">Settings</a>
              </li>
            ';
          }
        }
        
        ?>
        <?php

        if (isset($_SESSION['current_user'])) {
          echo '
            <li>
              <a href="logout.php">Logout</a>
            </li>
          ';
        } else {
          echo '
            <li>
              <a href="login.php">Login</a>
            </li>
            <li>
              <a href="register.php">Register</a>
            </li>
          ';
        }

        ?>
<!-- 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>