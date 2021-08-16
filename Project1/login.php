

<?php include 'models/db_config.php';?>
<?php include 'controllers/LoginController.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Company</title>
    <style>
        .lnotice {
            background-color: #2ecc71;
            color: white;
            font-weight: 600;
            margin-bottom: 12px;
            display: block;
            padding: 12px;
            border-radius: 4px;
        }
    </style>

<script>
        var hasError = false;

        function get(id) {
            return document.getElementById(id);
        }

        function validate() {
            refresh();
            if(get("email").value == "") {
                hasError = true;
                get("err_email").innerHTML = "- Required!";
            }
            if(get("pass").value == "") {
                hasError = true;
                get("err_pass").innerHTML = "- Required!";
            }

  

            if(get("rentas").selectedIndex == 0) {
                hasError = true;
                get("err_rentas").innerHTML = "- Required!";
            }

       

            return !hasError;
        }

        function refresh() {
            hasError = false;
            get("err_email").innerHTML = "";
            get("err_pass").innerHTML = "";
            get("err_rentas").innerHTML = "";

        }
    </script>

</head>
<body>

    <div class="main-content">

        <?php include 'includes/header.php'; ?>

        <br>
    
        <div class="content-wrapper">

            <?php
                if(isset($_COOKIE['isRegister'])) {
                    echo "<span class='lnotice'>Your Registration Is Complete. Please Log In!</span>";
                    setcookie('isRegister', null, -1, '/');
                }
            ?>
            


            <form method="POST" onsubmit="return validate();">
                <table>
                    <tr>
                        <td><label for="email">Email*</label></td>
                        <td>
              
                            <input type="text" id="email" value="<?php echo $email;?>" name="email"><span id="err_email"></span> <?php echo $err_email;?>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="password" >Password*</label></td>
                        <td>
                         
                            <input type="password" id="pass" value="<?php echo $pass;?>" name="pass"><span id="err_pass"></span> <?php echo $err_pass;?>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="">Choose User*</label></td>
                        <td>
                            <br>
                            <select name="cuser" id="rentas">
                                <option value="#" disabled selected>Select --</option>
                                <option value="renter" <?php if(isset($_POST['cuser'])) { if($_POST['cuser'] == "renter") {echo "selected";}} ?>>Renter</option>
                                <option value="rentee" <?php if(isset($_POST['cuser'])) { if($_POST['cuser'] == "rentee") {echo "selected";}} ?>>Rentee</option>
                            </select> <span id="err_rentas"></span> <?php echo $err_cuser;?>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><br><input  class="default-btn" type="submit" name="btn-login" value="Log in"></td>
                      
                    </tr>
                </table>
            </form>
        </div>
    </div>
   

</body>
</html>