<?php
for($a=1; $a<=50; $a++){
    if ($a % 3 == 0){
        echo '<em>' . $a . ', ' . '</em>';
        if($a % 5 == 0){
            echo '<strong>' . '<em>' . $a . ', ' . '</em>' . '</strong>';
        }
    }
}