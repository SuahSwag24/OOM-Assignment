<?php
    
    class Customer
    {
        private $customerName, $customerGender, $customerAge, $paxNumber, $customerPhoneNum, $customerEmail;
        private $selectedPackage;
        private $bookedTable;
        private $payment;

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

        public function SetPackage(Package $package)
        {
            $this->selectedPackage = $package;
        }

        public function GetPackage()
        {
            return $this->selectedPackage;
        }

        public function SetTable(Table $table)
        {
            $this->bookedTable = $table;
        }

        public function GetTable()
        {
            return $this->bookedTable;
        }

        public function SetPayment(Payment $payment)
        {
            $this->payment = $payment;
        }

        public function GetPayment()
        {
            return $this->payment;
        }

        public function GetName()
        {
            return $this->customerName;
        }

        public function GetPax()
        {
            return $this->paxNumber;
        }

    }

    class Package
    {
        private $packageNo, $packageName, $packageItem, $packageRecPax, $packagePrice, $packageImage;

        public function __construct($pNo)
        {
            $this->packageNo = $pNo;

            if($this->packageNo == "1")
            {
                $this->packageName = "The Cozy Couple";
                $this->packageItem = "";
                $this->packageRecPax = "2";
                $this->packagePrice = "90.00";
                $this->packageImage = "";
            }
            else if($this->packageNo == "2")
            {
                $this->packageName = "The Big Party";
                $this->packageItem = "";
                $this->packageRecPax = "5 - 6";
                $this->packagePrice = "220.00";
                $this->packageImage = "";
            }
            else
            {
                $this->packageName = "The Ultimate Feast";
                $this->packageItem = "";
                $this->packageRecPax = "7 - 8";
                $this->packagePrice = "350.00";
                $this->packageImage = "";
            }
            
            /*
                For specific input
                $this->packageName = $pName;
                $this->packageItem = $pItem;
                $this->packageRecPax = $pPax;
                $this->packagePrice = $pPrice;
                $this->packageImage = $pImage;
            */
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

        public function GetPackageNum()
        {
            return $this->packageNo;
        }

        public function GetPrice()
        {
            return $this->packagePrice;
        }
    }

    class Table
    {
        private $tableNo, $tableCapacity, $bookingStatus, $bookingStartTime, $bookingEndTime, $bookingDate;

        public function __construct($tNo, $bStart, $bEnd, $bDate)
        {
            $this->tableNo = $tNo;
            $this->bookingStatus = "pending";
            $this->bookingStartTime = $bStart;
            $this->bookingEndTime = $bEnd;
            $this->bookingDate = $bDate;
        }

        public function DisplayTableInfo()
        {
            echo    "<p>Table Number: " . $this->tableNo .
                    "<br>Table Capacity: " . $this->tableCapacity .
                    "<br>Current Status: " . $this->bookingStatus . 
                    "<br>Booking Start Time: " . $this->bookingStartTime . 
                    "<br>Booking End Time: " . $this->bookingEndTime . 
                    "<br>Booking Date: " . $this->bookingDate;
        }

        private function UpdateBookingStatus($status)
        {
            $this->bookingStatus = $status;
        }

        public function GetSeat()
        {
            return $this->tableNo;
        }

        public function GetStatus()
        {
            return $this->bookingStatus;
        }
    }

    class Payment
    {
        private $paymentAmount, $paymentType, $paymentMethod;

        public function __construct($amt, $type, $method)
        {
            $this->paymentAmount = $amt;
            $this->paymentType = $type;
            $this->paymentMethod = $method;
        }
    }

?>