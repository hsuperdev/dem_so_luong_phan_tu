<?php
    function countElement($array, $number) {
        $count = 0;
        foreach ($array as $key => $value) {
            if ($value == $number) {
                $count++;
            }
        }
        return $count;
    }

    $arr = [1, 2, 3 , 2, 2, 2];
    echo "SO LAN XUAT HIEN: " . countElement($arr, 11);
?>