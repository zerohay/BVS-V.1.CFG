<?php

function generateRandomCode($length = 99) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomCode = '';
    for ($i = 0; $i < $length; $i++) {
        $randomCode .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomCode;
}
session_start();
$token_baru1 = generateRandomCode(6);
$_SESSION['capcha'] = $token_baru1;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>LOGIN - PT. BUANA VISUALNET SENTRA</title>
        <meta content="noindex,nofollow" name="robots">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href="assets/configlogo.jpg" rel="shortcut icon">
        <link rel="stylesheet" href="https://portal.bvs.net.id/theme/default/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://portal.bvs.net.id/theme/default/assets/fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://portal.bvs.net.id/theme/default/assets/fonts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="https://portal.bvs.net.id/theme/default/assets/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="https://portal.bvs.net.id/theme/default/assets/plugins/iCheck/square/blue.css">
        <link rel="stylesheet" href="https://portal.bvs.net.id/theme/default/assets/fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="https://portal.bvs.net.id/theme/default/assets/dist/css/util.css">
        <link rel="stylesheet" href="https://portal.bvs.net.id/theme/default/assets/dist/css/main.css">			  	
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100 body-full">
                <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="margin-top: -30px;padding:30px;width:350px;border-radius: 5px;">
                    <form class="login100-form validate-form" action="datasince/login.php" method="post">
                        <center><img src="https://portal.bvs.net.id/theme/default/images/1697478529_IMG-20200615-WA0005.jpg" style="max-width: 200px;margin-top: -15px;margin-left: -5px;"></center>
                        <hr style="margin-top:10px;margin-bottom: 10px">
                            <span class="login100-form-title p-b-49" style="font-family: 'Source Sans Pro';font-size: 16px;margin-top: -5px;font-weight: bold;color:#555;padding-bottom: 20px">
                                LOGIN CONFIG AREA
                            </span>
                        <input type="hidden" name="role" value="client">
                        <div class="wrap-input100 validate-input m-b-23">
                            <span class="label-input100">USERNAME</span>
                            <input class="input100" type="text" name="username" placeholder="type your user" style="font-family: 'Source Sans Pro'" required>
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <span class="label-input100">PASSWORD</span>
                            <input class="input100" type="password" name="password" placeholder="type your password" style="font-family: 'Source Sans Pro'" required>
                            <span class="focus-input100" data-symbol="&#xf190;"></span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <span class="label-input100">AUTHEN ( <?php echo $token_baru1?> )</span>
                            <input class="input100" type="number" name="authen" placeholder="type your <?php echo $token_baru1 ?>" style="font-family: 'Source Sans Pro'" required>
                            <span class="focus-input100" data-symbol="&#xf190;"></span>
                        </div>
                        <div class="text-right p-t-8 p-b-31">
                        </div>
                        <div class="container-login100-form-btn">
                            <div style="border-radius: 4px" class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" style="border-radius: 0px">
                                    <i class="fa fa-sign-in" style="margin-right: 5px"></i> Sign In
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://portal.bvs.net.id/theme/default/assets/jquery/jquery.min.js"></script>
        <script src="https://portal.bvs.net.id/theme/default/assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
