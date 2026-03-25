<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViPS</title>
    <link rel="icon" type="image/png" href="img/logo.svg">
    <link rel="shortcut icon" type="image/png" href="img/logo.svg">
    <link rel="apple-touch-icon" href="img/logo.svg">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?
$page = isset($_REQUEST['page']) ? htmlspecialchars($_REQUEST['page']) : '';

SWITCH ( $page ) {
    case 'home':                                include "includes/home.php";                                      break;
    case 'recover_password_2':                  include "includes/recover_password/recover_password2.php";        break;
    case 'recover_password_1':                  include "includes/recover_password/recover_password1.php";        break;
    case 'regnew':                              include "includes/regnew.php";                                    break;
    case 'login':                               include "includes/login.php";                                     break;
    default:                                    include "includes/login.php";                                     break;
}
?>

</body>
</html>
