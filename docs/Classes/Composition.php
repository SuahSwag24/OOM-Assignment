<?php

    class Customer
    {
        private $name;
        private $selectedPackage;

        function __construct($n)
        {
            $this->name = $n;
        }

        function GetName()
        {
            return $this->name;
        }

        function setPackage(Package $package)
        {
            $this->selectedPackage = $package;
        }

        function DisplayInfo()
        {
            echo    "<p>Name: " . $this->name .
                    "<br>Selected Package: " . $this->selectedPackage->GetName();
        }
    }

    class Package
    {
        private $packageName;

        function __construct($pName)
        {
            $this->packageName = $pName;
        }

        function GetName()
        {
            return $this->packageName;
        }
    }

    $obj = new Customer("Suah");
    $pkg = new Package("Family");

    $obj->setPackage($pkg);
    $obj->DisplayInfo();



?>