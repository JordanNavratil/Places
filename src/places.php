<?php
    class Places
    {
        private $city;
        private $image;

        function __construct($city, $image)
        {
            $this->city = $city;
            $thi->image = $image;
        }

        function setCity($new_city)
        {
            $this->city = $new_city
        }

        function getCity()
        {
            return $this->city;
        }

        function setImage($new_image)
        {
            $this->image = $new_image
        }

        function getImage()
        {
            return $this->image;
        }

    }


 ?>
