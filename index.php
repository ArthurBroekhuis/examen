<link rel="manifest" href="/manifest.json">
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
<body>
<a href="home.php" class="button button1">Inloggen</a>
</body>
<style>
body {
background: radial-gradient(circle, rgba(39,55,136,1) 5%, rgba(41,50,91,1) 60%);
display: flex;
align-items: center;
}
.button {
    border: none;
    color: white;
    text-align: end;
    text-decoration: none;
    display: flex;
    font-size: 70px;
    width: 70%;
    height: 100px;
    align-items: center;
    float: left;
    margin-left: 15%;
    flex-wrap: nowrap;
    flex-direction: column;
    justify-content: center;
}
.button1 {
  background-color: #4dbdbf; 
  color: white; 
}
</style>
        <script>
            if ('serviceWorker' in navigator) {
                window.addEventListener('load', function() {
                    navigator.serviceWorker.register('/service-worker.js');
                });
            }
        </script>
