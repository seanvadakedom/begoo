<?php session_start(); ?>
    <h1><?php

    echo $_SESSION['ID'];
echo '<br>';
    echo $_SESSION['FULLNAME'];
echo '<br>';
    echo $_SESSION['EMAIL'];
echo '<br>';
    echo $_SESSION['PROFILEPIC'];
?>
<img src="//graph.facebook.com/<?php echo $_SESSION['ID']; ?>/picture?type=full">

<a href="<?php echo URL_PROTOCOL.'login/logout'; ?>">Logout</a>
</h1>
