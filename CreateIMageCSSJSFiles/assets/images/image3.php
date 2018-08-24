<?php
        function generateRandomString($length = 10) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
            }

        $randomString = generateRandomString(10);
        $length = strlen($randomString)*10;
        $image = imagecreate($length,30);
        $background = imagecolorallocate($image,(rand(0,255)), (rand(0,255)), (rand(0,255)));
        $foreground = imagecolorallocate($image,(rand(0,255)), (rand(0,255)), (rand(0,255)));      
        
        imagestring($image,5,5,6,$randomString, $foreground);  

        header("Content-type: image/png");
        imagepng($image);
        
?>