<?php

function isPhoneNumber($str) {
    $arr = str_split($str);
    $pattern = "";

	$flag = false;
	for($i = 0; $i < 2; $i++) {
        $pattern = $pattern . $arr[$i];
    }
 
    if($pattern == "01") {
        $flag = true;
    }
	return $flag;
}

function isName($str) {
	
	$arr = str_split($str);
	$flag = false;
	for($i = 0; $i < count($arr); $i++) {
        if(is_numeric($arr[$i])) {
            $flag = true;
            break;
        }
        
    }
    
    return $flag;
}

function hasChar($str) {
    $arr = str_split($str);
	$flag = false;
	for($i = 0; $i < count($arr); $i++) {
        if(ctype_alpha($arr[$i])) {
            $flag = true;
            break;
        }
        
    }
    
    return $flag;
}

// sa.mi@gmail.com
function isEmail($str) {
    $arr = str_split($str);

    $flag1 = false;
    $flag2 = false;
    $flag3 = false;

    for($i = 0; $i < count($arr); $i++) {
        if($arr[$i] == '@') {
            $flag1 = true;
            break;
        }
    }

    for($i = $i + 1; $i < count($arr); $i++) {
        if($arr[$i] == '.') {
            $flag2 = true;
            break;
        }
    }




    for($i = 0; $i < count($arr); $i++) {
        if(ctype_space($arr[$i])) {
            $flag3 = true;
            break;
        }
    }


    if($flag1 && $flag2 && !$flag3) {
        return true;
    } else {
        return false;
    }

}

function isStrongPass($str) {
    $arr = str_split($str);

    $flag1 = false;
    $flag2 = false;
    $flag3 = false;
    $flag4 = false;

    for($i = 0; $i < count($arr); $i++) {
        if($arr[$i] == '@' || $arr[$i] == '$' || $arr[$i] == '!') {
            $flag1 = true;
        }

        if(ctype_upper($arr[$i])) {
            $flag2 = true;
        }

        if(ctype_lower($arr[$i])) {
            $flag3 = true;
        }

        if(is_numeric($arr[$i])) {
            $flag4 = true;
       
        }
    }



    if($flag1 && $flag2 && $flag3 && $flag4) {
        return true;
    } else {
        return false;
    }
}
?>