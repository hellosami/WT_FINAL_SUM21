
function isEmail(str) {


    flag1 = false;
    flag2 = false;
    flag3 = false;
    var i = 0;
    for(i = 0; i < str.length; i++) {
        if(str[i] === '@') {
            flag1 = true;
            break;
        }
    }

    for(i = i + 1; i < str.length; i++) {
        if(str[i] === '.') {
            flag2 = true;
            break;
        }
    }



    for(i = 0; i < str.length; i++) {
        if(str[i] === ' ') {
            flag3 = true;
            break;
        }
    }


    if(flag1 && flag2 && !flag3) {
        return true;
    } else {
        return false;
    }

}


        function isPhoneNumber(str) {
        
            let pattern = "";

            flag = false;
            for(let i = 0; i < 2; i++) {
                pattern = pattern + str.charAt(i);
            }
        
            if(pattern === "01") {
                flag = true;
            }
            return flag;
        }

        function isName(str) {
	

            flag = false;
            for(i = 0; i < str.length; i++) {
            
                if(!isNaN(str[i])) {
                
                    flag = true;
                    break;
                }
                
            }
            
            
            
            return !flag;
        }

        function hasNumber(str) {
            
            flag = false;
            for(i = 0; i < str.length; i++) {
            
                if(!isNaN(str[i])) {
                
                    flag = true;
                    break;
                }
                
            }
    
            return flag;
        }

