<?php
session_unset();
session_destroy();
header("Location:../view/login.php");