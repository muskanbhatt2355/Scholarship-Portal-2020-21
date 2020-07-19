<?php

    mysqli_close($con);
    session_destroy();
    header('Location:template_edited.php');

?>
