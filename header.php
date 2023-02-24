<?php
$servername = "rdbms.strato.de";
$username = "dbu742099";
$password = "DB-079asb!";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="/manifest.json">
    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Responsive bottom navigation</title>
</head>
<body>
<?php
$sql = "SELECT name FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"];
    }
}
?>
<!--=============== HEADER ===============-->
<header class="header scroll-header" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo">Marlon</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                                <li class="nav__item">
                    
                    <a href="home.php" class="<?php if($_SERVER['SCRIPT_NAME']=="/home.php") { ?>  active-link   <?php   }  ?>nav__link">
                        <i class='bx bx-home-alt nav__icon'></i>
                        <span class="nav__name">Home</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="about.php" class="<?php if($_SERVER['SCRIPT_NAME']=="/about.php") { ?>  active-link   <?php   }  ?>nav__link">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">About</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="hours.php" class="<?php if($_SERVER['SCRIPT_NAME']=="/hours.php") { ?>  active-link   <?php   }  ?>nav__link">
                        <i class='bx bx-book-alt nav__icon'></i>
                        <span class="nav__name">Hours</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="contact.php" class="<?php if($_SERVER['SCRIPT_NAME']=="/contact.php") { ?>  active-link   <?php   }  ?>nav__link">
                        <i class='bx bx-briefcase-alt nav__icon'></i>
                        <span class="nav__name">Contact</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="settings.php" class="<?php if($_SERVER['SCRIPT_NAME']=="/settings.php") { ?>  active-link   <?php   }  ?>nav__link">
                        <i class='bx bx-message-square-detail nav__icon'></i>
                        <span class="nav__name">Settings</span>
                    </a>
                </li>
            </ul>
        </div>

        <img src="assets/img/perfil.png" onClick="window.location.reload();"alt="" class="nav__img">
    </nav>

</header>
        <script>
            if ('serviceWorker' in navigator) {
                window.addEventListener('load', function() {
                    navigator.serviceWorker.register('/service-worker.js');
                });
            }
        </script>

