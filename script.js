function addCart(id) {
    var pid = id;

    var form = new FormData();

    form.append("id", pid);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
            window.location = "index.php";
        }
    }
    r.open("POST", "cartProcess.php", true);
    r.send(form);
}

function removeCart(removeid){
    var rid = removeid;
    const qValue = document.getElementById(productId);

    var form = new FormData();
    form.append("id", rid);
    form.append("pqty", qValue.value);
    
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
            window.location = "index.php";
        }
    }
    r.open("POST", "cartRemove.php", true);
    r.send(form);
}

function submitData(){
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var add1 = document.getElementById("add1").value;
    var add2 = document.getElementById("add2").value;
    var provinces = document.getElementById("pro").value;
    var district = document.getElementById("dis").value;
    var city = document.getElementById("city").value;
    var zip = document.getElementById("zip").value;
    var mobile = document.getElementById("mob").value;
    var email = document.getElementById("email").value;
    var form = new FormData();

    form.append("fname", fname);
    form.append("lname", lname);
    form.append("add1", add1);
    form.append("add2", add2);
    form.append("pro", provinces);
    form.append("dis", district);
    form.append("city", city);
    form.append("zip", zip);
    form.append("mob", mobile);
    form.append("email", email);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
            if(text == 1){
                window.location = "index.php";
            }else{
                window.location = "password.php";
            }
            
        }
    }
    r.open("POST", "checkProcess.php", true);
    r.send(form);
}

function search(id) {
    var result = document.getElementById("result");
    // var result2 = document.getElementById("result2");

    var pno1 = id;
    // var search = document.getElementById("k").value;
    // alert(pno1)
    // alert(search);

    var form = new FormData();

    // form.append("k", search);
    form.append("id", pno1);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text);
            // result2.classList.toggle("d-none");
            result.innerHTML = text;
        }
    }

    r.open("POST", "search.php", true);
    r.send(form);

}

function update(){
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var add1 = document.getElementById("add1").value;
    var add2 = document.getElementById("add2").value;
    var provinces = document.getElementById("pro").value;
    var district = document.getElementById("dis").value;
    var city = document.getElementById("city").value;
    var zip = document.getElementById("zip").value;
    var mobile = document.getElementById("mob").value;
    var email = document.getElementById("email").value;

    // alert(fname);
    // alert(lname);
    // alert(add1);
    // alert(add2);
    // alert(provinces);
    // alert(district);
    // alert(city);
    // alert(zip);
    // alert(mobile);
    // alert(email);
    var form = new FormData();

    form.append("fname", fname);
    form.append("lname", lname);
    form.append("add1", add1);
    form.append("add2", add2);
    form.append("pro", provinces);
    form.append("dis", district);
    form.append("city", city);
    form.append("zip", zip);
    form.append("mob", mobile);
    form.append("email", email);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
            window.location = "invoice.php";
        }
    }
    r.open("POST", "checkProcess.php", true);
    r.send(form);
}

