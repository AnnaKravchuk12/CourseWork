<html>
      <head>
        <meta charset="utf-8">
        <title>Travel Beauty</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
      </head>


      <body id="page-top">
        <header>
          <!-- Top Navigation Start -->
            <div class="header-content centered">

              <a href="#logo" class="company-logo" ><span>Travel</span> Beauty</a>

              <div class="navbar">
                <a class="nav-link" href="index.php">Головна</a>
                <a class="nav-link" href="about.php">About</a>
                <a class="nav-link" href="https://github.com/AnnaKravchuk12">Про мене</a>
                <a class="nav-link active contacts-button" href="login.php">Login</a>
              </div>

            </div>
          <!-- Top Navigation End -->
        </header>

          <div class="login">
              <h2>Please Login</h2>
              <form class="login" action="about.php" method="post">
                <p>
                  <label>Username</label>
                  <input type="text" id="user" name="user"  />
                </p>
                <p>
                  <label>Password</label>
                  <input type="password" id="pass" name="pass"  />
                </p>
                <p>
                  <input type="submit" id="btnLogin" name="Login"  />
                </p>
              </form>
          </div>

        <footer id="footer">
            Copyright &copy; 2021 Anna
        </footer>
      </div>
    </body>
</html>
