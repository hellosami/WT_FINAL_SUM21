<?php session_start(); ?>
<div class="navi-wrapper">
    <ul>
        <li onclick="location.href='index.php'">Home</li>
        <li onclick="location.href='company.php'">Company</li>
        <li onclick="location.href='#'">Services</li>
        <li onclick="location.href='#'">Blog</li>

        <?php 
     

            if(!isset($_SESSION['IAMRENTEE'])) {
                    
?>
        <li onclick="location.href='login.php'">Log in</li>
        <li onclick="location.href='signup.php'">Sign up</li>
<?php
            } else {
                ?>
                <li onclick="location.href='rentee/logout.php'">Logout</li>
                <?php
            }
        ?>

    </ul>
</div>