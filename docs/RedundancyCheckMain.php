<?php

    include "Classes/RedundancyCheck.php";

    $apple = new Product("Apple" , 10.00 , 0.25);

    $apple->setName("Australian Apples");
    $apple->setPrice(20.00);
    echo("Apple is changed to Australian Apples, Price increases from 10 to 20<br><br>");

    $apple->PrintProductInfo();

    if($apple->getName() == "Australian Apples")
    {
        echo("<br>There exists some Australian Apples in stock.");
    }

    $registerItem = "Oregon Oranges";
    if($registerItem == $apple->getName())
    {
        echo("<p>" . $apple->getName() . " already exists.</p>");
    }
    else
    {
        $newItem = new Product($registerItem , 10.00 , 0.50);
        $newItem->PrintProductInfo();
    }

?>