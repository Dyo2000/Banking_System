<!DOCTYPE html>
<html>
<link rel="stylesheet" href="login.css">
<head>
    <title>This is a test for my banking website</title>
</head>

<body>

    <header class="account_custom">
        <h2 class="logo">Welcome: </h2>
        <h2 class="user_name">
            <?php
                echo $_COOKIE['fname'];
            ?>
        </h2>
        <a href="#">Dashboard</a>
        <a href="#">Transactions</a>
        <a href="#">Account Settings</a>
        <form action="website.html">
        
        <nav class="navigation">
                <button class="btnLogin">Logout</button>
        </form>
        </nav>
    </header>

    <div class="image">
        <div class="image_overlay">

        </div>
    </div>

    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>


    <script src="website.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>