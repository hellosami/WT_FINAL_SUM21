<div class="navi-wrapper">
    <ul>
        <li class="<?php if($_GET['btn'] == '1') {echo "active";} ?>" onclick="location.href='index.php?btn=1&xl=1&category=MotorBike'">POST A RENT</li>
        <li class="<?php if($_GET['btn'] == '2') {echo "active";} ?>" onclick="location.href='my_posts.php?btn=2'">MY POSTS</li>

        <li class="<?php if($_GET['btn'] == '3') {echo "active";} ?>" onclick="location.href='requests.php?btn=3'">REQUESTS</li>
        <li class="<?php if($_GET['btn'] == '4') {echo "active";} ?>" onclick="location.href='report.php'">MY REPORT</li>
        <li class="<?php if($_GET['btn'] == '5') {echo "active";} ?>" onclick="location.href='my_profile.php?btn=4'">MY PROFILE</li>
        <li class="<?php if($_GET['btn'] == '6') {echo "active";} ?>" onclick="location.href='logout.php'">LOGOUT</li>

    </ul>
</div>