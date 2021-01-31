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
                <a class="nav-link active" href="about.php">About</a>
                <!-- <a class="nav-link" href="tickets.php">All Ticket</a></li> -->
                <a class="nav-link" href="https://github.com/AnnaKravchuk12">Про мене</a>
                <a class="nav-link contacts-button" href="login.php">Login</a>
              </div>

            </div>
          <!-- Top Navigation End -->
        </header>

        <div id="main">

          <?php

           // login("Content-Type: text/html; charset=UTF-8");
            	$host = "database";
            	$username = "annauser";
            	$password = "annapass";
            	$database = "annashop";

            	try {
            		$connection = new mysqli($host, $username, $password, $database);
            		$connection->set_charset("utf8");
            		if ($connection->connect_error) {
            			die("Connection failed");
            		}

            		$sql = "SELECT * FROM users";
            		$result = $connection->query($sql);

            		while ($row = $result->fetch_assoc()) {
            		 	echo "Welcome " . $row['username'] . " .\t Hello! ";
            		 	echo "<br>";
            		}
            	} catch (Exception $e) {
            		echo 'Exception: ',  $e->getMessage(), "\n";
            	}
          ?>
        </div>

        <footer id="footer">
            Copyright &copy; 2021 Anna
        </footer>
      </div>
    </body>
</html>
