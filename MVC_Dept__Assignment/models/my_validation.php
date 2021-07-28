<?php
    function hasWhiteSpace($str) {
        $string = str_split($str);

        $flag = false;
        foreach($string as $char) {
            if(ctype_space($char)) {
                $flag = true;
                break;
            }
        }
        
        return $flag;
    }


 

?>