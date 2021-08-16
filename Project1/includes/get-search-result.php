
<?PHP session_start(); ?>
<?php include '../models/db_config.php'; ?>
<?php include '../controllers/PostController.php'; ?>
<?php
    $key = $_GET["key"];
    $result = GetPosts($key);

    if(count($result)  > 0) {
        foreach($result as $key => $value) {

            echo "
            <br>
                <li>
                    <div>
                        <span>".$value['title']."</span>
                        <span>Meter: ".$value['meter']."</span>
                        <span>Condition: ".$value['pcondition']."</span>
                        <span>Rate: ".$value['rate']."</span>
                        <span>Location: ".$value['loc']."</span>
                        "; ?>
                        <span onclick="downloadasTextFile('<?php echo "{$value['tc']}"; ?>')">TERMS</SPAN>
                        <br>
                        <button onclick="downloadasTextFile('<?php echo "{$value['tc']}"; ?>')">SEE MORE</button>

                        <?php if(isset($_SESSION['RENTEEID'])) {
                                ?>
                                 <button onclick="SendARequest('<?php echo "{$value['id']}"; ?>', '<?php echo "{$value['renter_id']}"; ?>', '<?php echo $_SESSION['RENTEE-ID']; ?>');">SEND REQUEST</button>
                                <?php
                        } ?>
                       

                        <?php
            echo "
                    </div>
                    
                </li>
            ";
        }
    }
?>

