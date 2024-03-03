<?php
    
    class Customer
    {
        private $customerName, $customerGender, $customerAge, $paxNumber, $customerPhoneNum, $customerEmail;

        public function __construct($cName, $cGender, $cAge, $pxNo, $cPhone, $cEmail)
        {
            $this->customerName = $cName;
            $this->customerGender = $cGender;
            $this->customerAge = $cAge;
            $this->paxNumber = $pxNo;
            $this->customerPhoneNum = $cPhone;
            $this->customerEmail = $cEmail;
        }

        public function DisplayCustomerInfo()
        {
            echo    "<p>Name: " . $this->customerName . 
                    "<br>Gender: " . $this->customerGender . 
                    "<br>Age: " . $this->customerAge . 
                    "<br>Pax Number: " . $this->paxNumber . 
                    "<br>Customer Phone Number: " . $this->customerPhoneNum . 
                    "<br>Customer Email: " . $this->customerEmail . "</p>" ;
        }
    }

?>

<?php

    class Package
    {
        private $packageNo, $packageName, $packageItem, $packageRecPax, $packagePrice, $packageImage;

        public function __construct($pNo, $pName, $pItem, $pPax, $pPrice, $pImage)
        {
            $this->packageNo = $pNo;
            $this->packageName = $pName;
            $this->packageItem = $pItem;
            $this->packageRecPax = $pPax;
            $this->packagePrice = $pPrice;
            $this->packageImage = $pImage;
        }

        public function DisplayPackageInfo()
        {
            echo    "<p>Package Number: " . $this->packageNo .
                    "<br>Package Name: " . $this->packageName .
                    "<br>Package Items: " . $this->packageItem .
                    "<br>Package Recommend Pax: " . $this->packageRecPax .
                    "<br>Package Price: " . $this->packagePrice .
                    "<br>Package Image: " . $this->packageImage . "</p>";
        }
    }


?>

<?php

    class Table
    {
        private $tableNo, $tableCapacity, $bookingStatus;

        public function __construct($tNo, $tCap)
        {
            $this->tableNo = $tNo;
            $this->tableCapacity = $tCap;
        }

        public function DisplayTableInfo()
        {
            echo    "<p>Table Number: " . $this->tableNo .
                    "<br>Table Capacity: " . $this->tableCapacity .
                    "<br>Current Status: " . $this->bookingStatus;
        }

        private function UpdateBookingStatus($status)
        {
            $this->bookingStatus = $status;
        }
    }

?>