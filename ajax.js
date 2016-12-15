var xmlhttp = new XMLHttpRequest();
var url = "json/ajax_info.json";

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myArr = JSON.parse(this.responseText);
        myFunction(myArr);
    }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();

function myFunction(arr) {
    var out = "";
    var i;
    for(i = 0; i < arr.length; i++) {
        out += '<p> Name: ' + arr[i].name + ', Street: ' + 
        arr[i].street + ', Phone: ' + arr[i].phone + '</p>';
    }
    document.getElementById("demo").innerHTML = out;
}

//function loadDoc() {
//    alert("am here");
//  var xhttp = new XMLHttpRequest();
//  xhttp.onreadystatechange = function() {
//    if (this.readyState == 4 && this.status == 200) {
//        var jsonobj = JSON.parse(this.responseText);
//        document.getElementById("demo").innerHTML =
//            jsonobj.name + "<br>" +
//            jsonobj.street + "<br>" +
//            jsonobj.phone;
//    }
//  };
//  xhttp.open("GET", "json/ajax_info.json", true);
//  xhttp.send();
//}

