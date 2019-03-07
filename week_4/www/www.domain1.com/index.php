<!doctype html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Domain 1</title>
</head>
<body>

    <form action="index.php" method="post">
        <b>ID session:</b>
        <input type="text" name="txtSessionID">
        <h1>
            <?php
            // Check cookie('errorKey') are exist or not
                if (isset($_COOKIE['errorKey'])) {
                    echo $_COOKIE['errorKey'];
                }
            ?>
        </h1>
        <b>Value session:</b>
        <input type="text" name="txtSessionValue">
        <h1>
            <?php
            // Check cookie('errorValue') are exist or not
                if (isset($_COOKIE['errorValue'])) {
                    echo $_COOKIE['errorValue'];
                }
            ?>

        </h1>
        <input type="submit" name="btCreate" value="Create Session">
    </form>
    <b>
      <?php
        // Check cookie('success') are exist or not
        if (isset($_COOKIE['success'])) {
            echo $_COOKIE['success'];
        }
      ?>
    </b>
</body>
</html>


<?php
include_once 'session.php';
if (isset($_POST['btCreate'])) {
    $id = trim($_POST['txtSessionID']);
    $value = trim($_POST['txtSessionValue']);
    if($id !=NULL and $value !=NULL){
        $session = new Session();
        $session->start_session('_s', false);
        // Set name for new session
        session_id($id);
        // Set value of this session
        $_SESSION[$id] = $value;
        setcookie('success', 'Create successful', time() + 1);
        header('location: index.php');
    }
    else {
        setcookie('success', 'Not be value', time() + 1);
        header('location: index.php');
    }
}

