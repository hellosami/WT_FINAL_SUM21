function get(id) {
    return document.getElementById(id);
}

function GetPosts(e) {
    if(e.value == "") {
        get("search-result").innerHTML = "";
        return;
    }

    var xhr = new XMLHttpRequest();

    xhr.open("GET", "includes/get-search-result.php?key=" + e.value, true);
    
    xhr.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
           get("search-result").innerHTML = this.responseText;
        }
    };

    xhr.send();
}


function downloadasTextFile(text) {
    var element = document.createElement('a');
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
    element.setAttribute('download', "filename");

    element.style.display = 'none';
    document.body.appendChild(element);

    element.click();

    document.body.removeChild(element);
}







