<?php
session_start();
session_destroy();
header("location:index.php?SATHGURU=".sha1('GoGURU'));
?>