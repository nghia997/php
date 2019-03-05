<?php
    //Create Cookie name = name value = nghia timeout 1h.
    setcookie('name', 'nghia', time() + 3600);
    // Check on click button
    if (isset($_GET['delete'])) {
        // Delete Cookie name
        setcookie('name', '', time() - 3600);
        header('Location: DEMO_Tao_Cookie.php');
    }
?>
<form action="DEMO_Tao_Cookie.php" method="get">
   	<!--Check Cookie 'name' are exist or not-->
    <?= (isset($_COOKIE['name'])) ? 'Giá trị của Cookie : <b>' . $_COOKIE['name'] .
    '</b><br><button name="delete">Delete Cookie</button>' : 'Giá trị của Cookie : Đã xóa'?>
</form>

    