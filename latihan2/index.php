<?php
    session_start();
    if(isset($_SESSION["salah"])){
        if($_SESSION["salah"] >= 3){
            echo '<h1>ANDA DI BLOKIR</h1>';
            exit();
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Jaka Oktorio</title>
        <link rel="icon" href="asset/images/favicon.ico">
        <link rel="stylesheet" href="asset/css/bootstrap.css">
        <link rel="stylesheet" href="asset/css/floating-labels.css">
        <script>
            /*
            function cobaajadeh() {
                document.getElementById("inputEmail").addEventListener("keyup",function(event){
                    event.preventDefault();
                    if(event.keyCode === 13){
                        document.getElementById("inputPassword").focus();
                    }
                });
            }
            */
        </script>
    </head>
    <body>
        <?php
        if(isset($_SESSION['pesan'])){
        echo $_SESSION["salah"];
        unset($_SESSION["salah"]);
        }
        ?>
        <form id="frm01" name="frm01" method="POST" action="login.php" 
              class="form-signin">
            <div class="text-center mb-4">
                <img width="72" height="72" src="asset/images/bootstrap-solid.svg">
                    <h1>MENU LOGIN</h1>
<!--                    <p>Mari kita belajar bersama sama</p>-->
                     </div>
                    <div class="form-label-group">
                        <input onkeyup="cobaajadeh();" class="form-control" 
                               name="inputEmail" type="email" 
                               required="yes" id="inputEmail"
                               placeholder="Email Address" autofocus="yes"
                               autocomplete="no">
                        <label for="inputEmail">Email Address</label>
                    </div>
                     <div class="form-label-group">
                         <input class="form-control" name="inputPassword" 
                                type="password" 
                                required="yes" id="inputPassword" 
                                placeholder="Password">
                        <label for="InputPassword">Password</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
                
        </form> 
    </body>
</html>

