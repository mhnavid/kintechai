/**
 * Created by saumyashovanroy on 4/13/17.
 */

function eamil_vail() {
    var str=document.getElementById('resemail').value;
    //document.getElementById("spinner").style.visibility= "visible";
    var pa=str.indexOf("@");
    var pd=str.indexOf(".");
    if(pd>pa){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var resp=JSON.parse(xmlhttp.responseText);
            var msg="";
            for(i=0;i<resp.length;i++){
                msg=resp[i].email;
            }
            //alert(msg);
            document.getElementById("email_req_id").innerHTML = msg;
        }
    };
        var url="email_unique.php";
    //alert(url);
    xmlhttp.open("GET", url, true);
    xmlhttp.send();}
}

// var c=0;
// function eamil_vail() {
//
//     document.getElementById("email_req_id").innerHTML = c;
//     c++;
// }