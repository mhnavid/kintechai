/**
 * Created by saumyashovanroy on 4/13/17.
 */

function eamil_vail() {
    document.getElementById("email_req_id").innerHTML="* required";
    var str=document.getElementById('resemail').value;
    //document.getElementById("spinner").style.visibility= "visible";
    var pa=str.indexOf("@");
    var pd=str.indexOf(".");
    var av=false;
    if(pa>0 && pd>pa){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var resp=JSON.parse(xmlhttp.responseText);
            var msg="";
            for(i=0;i<resp.length;i++){
                if(resp[i].email==str){
                    alert(document.getElementById("email_req_id").innerHTML)
                    document.getElementById("email_req_id").innerHTML="Already Exits";
                    av=true
                }
            }

        }
        if(!av){
            document.getElementById("email_req_id").innerHTML="Email ok"
        }

    };
        var url="email_unique.php";
    //alert(url);
    xmlhttp.open("GET", url, true);
    xmlhttp.send();}
}
