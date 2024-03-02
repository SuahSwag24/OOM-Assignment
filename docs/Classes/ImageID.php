<?php

    class Image
    {

        private $imageName;
        
        public function __construct($imgName)
        {
            $this->imageName = $imgName;
        }

        public function GetImageName()
        {
            return $this->imageName;
        }
    }

?>