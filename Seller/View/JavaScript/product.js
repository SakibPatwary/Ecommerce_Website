
document.getElementById('productname').addEventListener('keyup', productnamevalidation);
function firstnamevalidation(e) {
    if (document.getElementById('productname').value == "") {
        document.getElementById('validateproductname').innerHTML = "Product Name is required";
    }
    else {
        document.getElementById('validateproductname').innerHTML = "";
    }
}


document.getElementById('productdescription').addEventListener('keyup', productdescriptionvalidation);
function firstnamevalidation(e) {
    if (document.getElementById('productdescription').value == "") {
        document.getElementById('validateproductdescription').innerHTML = "Product Description is required";
    }
    else {
        document.getElementById('validateproductdescription').innerHTML = "";
    }
}


document.getElementById('productprice').addEventListener('keyup', productpricevalidation);
function firstnamevalidation(e) {
    if (document.getElementById('productprice').value == "") {
        document.getElementById('validateproductprice').innerHTML = "Product Price is required";
    }
    else {
        document.getElementById('validateproductprice').innerHTML = "";
    }
}