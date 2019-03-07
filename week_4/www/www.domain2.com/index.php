<!doctype html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Domain 2</title>
</head>
<body>
    <form action="index.php" method="post">
        <p>ID session:</p>
        <input type="text" name="txtSessionKey">
        <input type="submit" name="btRead" value="Read Session">
    </form>
    <b>
            <?php
            // Check cookie('errorKey') are exist or not
                if (isset($_COOKIE['errorKey'])) {
                    echo $_COOKIE['errorKey'];
                }
            ?>
        </b>    
</body>
</html>

<?php
include_once '../../www/www.domain1.com/session.php';
// Check button 'Read Session' was clicked
if (isset($_POST['btRead'])) {
    $key = trim($_POST['txtSessionKey']);
    
    // Check $key are empty or not
    if (empty($key)) {
        $check = true;
        setcookie('errorKey', 'ID must not be empty..', time() + 1);
        header('location: index.php');
    } else {
        $session = new session();
        session_id($key);
        $session->start_session('_s', false);
        $result = $session->read($key);
        echo (isset($result)) ? '<b>This session is not exist..</b>' : 'Result: <b>' . $result . '</b>';
    }
}
?>
