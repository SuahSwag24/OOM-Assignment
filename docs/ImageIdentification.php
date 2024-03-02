<?php

    include "Classes/ImageID.php";

    $logo = new Image("res/Logo.png");
    $equalsY = new Image("res/EqualsY.png");

    echo("<img src='" . $logo->GetImageName() . "'><br>");
    echo("<img src='" . $equalsY->GetImageName() . "'>");

?>