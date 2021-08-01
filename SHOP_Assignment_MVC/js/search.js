get("product-list").style.display = "none";

function get(id) {
    return document.getElementById(id);
}

function searchProduct(e) {
    if(e.value == "") {
        get("product-list").innerHTML = "";
        get("product-list").style.display = "none";
        return;
    }
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "search_product.php?key=" + e.value, true);
    xhr.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            get("product-list").innerHTML = this.responseText.trim();
            get("product-list").style.display = "block";
        }
    };
    xhr.send();
}