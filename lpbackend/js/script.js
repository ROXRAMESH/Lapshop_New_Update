function changeView() {
    var image = document.getElementById("imguploder");
    var view1 = document.getElementById("prew1");
    var view2 = document.getElementById("prew2");
    var view3 = document.getElementById("prew3");
    var view4 = document.getElementById("prew4");

    var view5 = document.getElementById("prew5");
    var view6 = document.getElementById("prew6");
    var view7 = document.getElementById("prew7");
    // var view8 = document.getElementById("prew8");


    image.onchange = function() {
        var file = this.files[0];
        var url = window.URL.createObjectURL(file);
        view1.src = url;

        var file = this.files[1];
        var url = window.URL.createObjectURL(file);
        view2.src = url;

        var file = this.files[2];
        var url = window.URL.createObjectURL(file);
        view3.src = url;

        var file = this.files[3];
        var url = window.URL.createObjectURL(file);
        view4.src = url;

        var file = this.files[4];
        var url = window.URL.createObjectURL(file);
        view5.src = url;
        var file = this.files[5];
        var url = window.URL.createObjectURL(file);
        view6.src = url;
        var file = this.files[6];
        var url = window.URL.createObjectURL(file);
        view7.src = url;
        // var file = this.files[7];
        // var url = window.URL.createObjectURL(file);
        // view8.src = url;
    }

}

function addProduct() {
    var category = document.getElementById("ca");
    var brand = document.getElementById("br");
    var title = document.getElementById("ti");
    var condition;

    if (document.getElementById("bn").checked) {
        condition = 1;
    } else if (document.getElementById("us").checked) {
        condition = 2;
    }

    var qty = document.getElementById("q");

    var qty = document.getElementById("qty");
    var buyerprice = document.getElementById("bcost");
    var sellingprice = document.getElementById("scost");
    var description = document.getElementById("desc");

    var buyers = document.getElementById("buyer");


    var images = document.getElementById("imguploder");

    var proc = document.getElementById("summernote");
    var pid = document.getElementById("pid");


    // alert(category.value);
    // alert(brand.value);
    // alert(title.value);
    // alert(condition);
    // alert(qty.value);
    // alert(buyerprice.value);
    // alert(sellingprice.value);
    // alert(description.value);
    // alert(images);

    var form = new FormData();
    form.append("ca", category.value);
    form.append("br", brand.value);
    form.append("ti", title.value);
    form.append("con", condition);
    // form.append("q", q.value);

    form.append("qty", qty.value);
    form.append("bcost", buyerprice.value);
    form.append("scost", sellingprice.value);
    form.append("desc", description.value);
    form.append("buyer", buyers.value);
    form.append("img1", images.files[0]);
    form.append("img2", images.files[1]);
    form.append("img3", images.files[2]);
    form.append("img4", images.files[3]);

    form.append("img5", images.files[4]);
    form.append("img6", images.files[5]);
    form.append("img7", images.files[6]);
    // form.append("img8", images.files[7]);


    form.append("summernote", proc.value);
    form.append("pid", pid.value);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "1") {
                alert("Success");
                location.reload();

            } else {
                alert("Error");
            }
        }
    }
    r.open("POST", "addproductprocess.php", true);
    r.send(form);

}

function sendCode() {
    var em = document.getElementById("email").value;

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text = "success") {
                alert("E-Mail verification code sent Please Check Inbox");
                var m = document.getElementById("sendpassword");
                bm = new bootstrap.Modal(m);
                bm.show();
            } else {
                // alert("ERROR");
                Swal.fire(
                    '',
                    'Error',
                    'question'
                );

            }
        }
    }
    r.open("GET", "sendcode.php?e=" + em, true);
    r.send();
}


function entercode() {
    var e = document.getElementById("email");
    var vc = document.getElementById("vc");

    var form = new FormData();

    form.append("e", e.value);
    form.append("vc", vc.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "success") {
                alert("Successfully Login");

                bm.hide();
                window.location = "dashboard.php";
            } else {
                // alert(text);
                Swal.fire(
                    '',
                    'Success',
                    'question'
                );

            }
        }
    };
    r.open("POST", "typecodeprocess.php", true);
    r.send(form);

}
// **************************************************************
function checkuser() {
    var m = document.getElementById("fogetpasswordmodel");
    bm = new bootstrap.Modal(m);
    bm.show();
}

function addcart(pid) {
    var qty = document.getElementById("qtytxt" + pid);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "success") {
                alert("success");

                // window.location = "cart.php";
            } else {
                alert("Error");
            }
        }
    }


    r.open("GET", "cartprocess.php?id=" + pid + "&qt=" + qty.value, true);
    r.send();

}

function deleteproductcart(id) {
    // alert(id);

    var cartid = id;

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "1") {
                alert("Success");
                window.location = "cart.php";
            } else {
                alert("Error");
            }
        }

    };
    r.open("GET", "deletecartproductprocess.php?id=" + cartid, true);
    r.send();


}

function buynow(id, tot) {
    var cartid = id;
    var total = tot;

    // alert(cartid);
    // alert(total);

    var fn = document.getElementById("fn");
    var ln = document.getElementById("ln");
    // var em = document.getElementById("em");
    // var ad1 = document.getElementById("ad1");
    // var ad2 = document.getElementById("ad2");
    // var city = document.getElementById("city");
    var ph = document.getElementById("ph");

    // alert(fn.value);
    // alert(ln.value);
    // alert(em.value);
    // alert(ad1.value);
    // alert(ad2.value);
    // alert(city.value);
    // alert(ph.value);

    var form = new FormData();
    form.append("id", cartid);
    form.append("tot", total);

    form.append("fn", fn.value);
    form.append("ln", ln.value);
    // form.append("em", em.value);
    // form.append("ad1", ad1.value);
    // form.append("ad2", ad2.value);
    // form.append("city", city.value);
    form.append("ph", ph.value);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var orderid = r.responseText;
            // var objx = JSON.parse(text);
            // alert(orderid);
            // var objx = JSON.parse(text);
            // var orderid = objx["id"];
            saveinvoice(orderid);




            // // Called when user completed the payment. It can be a successful payment or failure
            // payhere.onCompleted = function onCompleted(orderId) {
            //     console.log("Payment completed. OrderID:" + orderId);
            //     saveinvoice();
            // };

            // // Called when user closes the payment without completing
            // payhere.onDismissed = function onDismissed() {
            //     //Note: Prompt user to pay again or show an error page
            //     console.log("Payment dismissed");
            // };

            // // Called when error happens when initializing payment such as invalid parameters
            // payhere.onError = function onError(error) {
            //     // Note: show an error page
            //     console.log("Error:" + error);
            // };

            // // Put the payment variables here
            // var payment = {
            //     "sandbox": true,
            //     "merchant_id": "1218005", // Replace your Merchant ID
            //     "return_url": "http://localhost/sadsdasdas/index.php", // Important
            //     "cancel_url": "http://localhost/sadsdasdas/index.php", // Important
            //     "notify_url": "http://sample.com/notify",
            //     "order_id": objx["id"],
            //     "items": objx["item"],
            //     "amount": objx["amount"],
            //     "currency": "LKR",
            //     "first_name": objx["fname"],
            //     "last_name": objx["lname"],
            //     "email": objx["email"],
            //     "phone": objx["phone"],
            //     "address": objx["add1"],
            //     "city": objx["city"],
            //     "country": "Sri Lanka",
            //     "delivery_address": objx["add1"],
            //     "delivery_city": objx["city"],
            //     "delivery_country": "Sri Lanka",
            //     "custom_1": "",
            //     "custom_2": ""
            // };
            // // Show the payhere.js popup, when "PayHere Pay" is clicked

            // payhere.startPayment(payment);



        }
    }
    r.open("POST", "cartbuyprocess.php", true);
    r.send(form);

    // saveinvoice()

}


function saveinvoice(orderid) {

    var form = new FormData();

    form.append("orderid", orderid);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text);
            // var objn = JSON.parse(text);
            // var orderid1 = objn["id"];
            // alert(text);

            window.location = "invoice2.php?id=" + text;

            // window.location = "index.php";

        }

    };
    r.open("POST", "saveinvoice.php", true);
    r.send(form);

}

function openemilmod() {
    document.getElementById("mod").className = "col-lg-6 offset-lg-3 col-12 offset-0 d-grid p-3 bg-white border border-1 rounded-3"
}

function submitemail() {

    var email = document.getElementById("em").value;
    // alert(email);
    var form = new FormData();

    form.append("email", email);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "Sucess") {
                location.reload();
                // window.location = "new_user.php";
            }



        }

    };
    r.open("POST", "emailsession.php", true);
    r.send(form);
}

function updateProduct(id) {
    var pid = id;
    // var category = document.getElementById("ca");
    // var brand = document.getElementById("br");
    var title = document.getElementById("ti");
    // var condition;

    // if (document.getElementById("bn").checked) {
    //     condition = 1;
    // } else if (document.getElementById("us").checked) {
    //     condition = 2;
    // }

    var qty = document.getElementById("qty");
    var buyerprice = document.getElementById("bcost");
    var sellingprice = document.getElementById("scost");
    var description = document.getElementById("desc");
    // var images = document.getElementById("imguploder");

    var proc = document.getElementById("proc");


    // alert(category.value);
    // alert(brand.value);
    // alert(title.value);
    // alert(condition);
    // alert(qty.value);
    // alert(buyerprice.value);
    // alert(sellingprice.value);
    // alert(description.value);
    // alert(images);

    var form = new FormData();
    // form.append("ca", category.value);
    // form.append("br", brand.value);
    form.append("ti", title.value);
    // form.append("con", condition);
    form.append("qty", qty.value);
    form.append("bcost", buyerprice.value);
    form.append("scost", sellingprice.value);
    form.append("desc", description.value);
    form.append("id", pid);
    // form.append("img1", images.files[0]);
    // form.append("img2", images.files[1]);
    // form.append("img3", images.files[2]);
    // form.append("img4", images.files[3]);

    form.append("proc", proc.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "1") {
                alert("Success");
            } else {
                alert("Error");
            }
            // alert(text);
            // Swal.fire(
            //     '',
            //     'Success',
            //     'question'
            // );



        }
    }
    r.open("POST", "updateproductprocess.php", true);
    r.send(form);

}

// search

function search(id) {
    var result = document.getElementById("result");
    // var result2 = document.getElementById("result2");

    var pno1 = id;
    var search = document.getElementById("k").value;
    // alert(pno1)
    // alert(search);

    var form = new FormData();

    form.append("k", search);
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

    r.open("POST", "searchprocess.php", true);
    r.send(form);

}


function pagnat(id, pid) {
    var pno = id;
    var url = "laptop.php?page=" + pno + "&p_id=" + pid;

    var r = new XMLHttpRequest();
    alert(id);
    alert(pid);
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text);


        }
    }
    r.open("GET", url, true);
    r.send();

}

function ststusChange(id) {

    var sid = id;

    // var result = document.getElementById("change");

    // alert(sid);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
            // result.innerHTML = text;
            // ststusChange();
            window.location = "manageproduct.php";

        }
    }

    r.open("POST", "ststuschange.php?id=" + sid, true);
    r.send();

    // alert("ok");
}


function deletep(id) {
    var pid = id;

    // var result = document.getElementById("change");

    // alert(pid);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // 
            // Swal.fire(
            //     '',
            //     'Success',
            //     'question'
            // );

            alert(text);
            // window.location = "manageproduct.php";



        }
    }

    r.open("POST", "delete.php?id=" + pid, true);
    r.send();
}

function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");


    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function fogotpassword() {


    // alert("E-Mail verification code sent Please Check Inbox");
    var m = document.getElementById("fogetpasswordmodel");
    bm = new bootstrap.Modal(m);
    bm.show();

}

function get() {
    window.location = "new_user.php";
}

function invoice(id) {
    var pid = id;

    // var result = document.getElementById("change");

    // alert(sid);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
            // window.location = "manageproduct.php";



        }
    }

    r.open("POST", "invoice.php?id=" + pid, true);
    r.send();
}

function changeCusView() {
    var image = document.getElementById("cusimguploder");
    var pre1 = document.getElementById("prew1");
    // var pre2 = document.getElementById("prew2");

    image.onchange = function() {
        var file = this.files[0];
        var url = window.URL.createObjectURL(file);
        pre1.src = url;

        // var file = this.files[1];
        // var url = window.URL.createObjectURL(file);
        // pre2.src = url;

    }


}

function addCustomerdata() {
    // var comment = document.getElementById("cus");
    var image = document.getElementById("cusimguploder");

    // alert(comment.value);
    // alert(image);

    var form = new FormData();
    // form.append("com", comment.value);
    form.append("img1", image.files[0]);
    form.append("img2", image.files[1]);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
            location.reload();
        }
    }

    r.open("POST", "customerprocess.php", true);
    r.send(form);

}

function addBrand() {
    var bname = document.getElementById("bname");

    var form = new FormData();
    form.append("bname", bname.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
            window.location = "brand.php";
        }
    }
    r.open("POST", "brandprocess.php", true);
    r.send(form);
}

function deleteBrande(id) {

    var bid = id;

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
            window.location = "brand.php";
        }

    };
    r.open("POST", "deleteBrandepr.php?id=" + bid, true);
    r.send();
}

function deleteProduct(pid) {
    var proid = pid;

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
            location.reload();

        }

    };
    r.open("GET", "deleteproductp.php?pid=" + proid, true);
    r.send();

}