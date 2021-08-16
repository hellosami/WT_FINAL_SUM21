<td class="menu">
    <span><?php echo "Welcome<br>" . $_SESSION['renter-name']; ?></span>
    <br>
    <hr>
    <button class="<?php if($_GET['btn'] == '1') {echo "active";} ?>" onclick="location.href='index.php?btn=1'">POST RENT</button><br><br>
    <button onclick="location.href='profile-update.php?id=1'">MY PROFILE</button><br><br>
    <button class="<?php if($_GET['btn'] == '2') {echo "active";} ?>" onclick="location.href='my-posts.php?btn=2'">MY POSTS</button><br><br>
</td>