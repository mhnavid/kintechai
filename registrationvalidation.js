/**
 * Created by Shahidul Islam on 4/6/2017.
 */
function resvalid() {
    var fname=document.getElementById("resfname").value;
    var lname=document.getElementById("reslname").value;
    var uname=document.getElementById("resuname").value;
    var uemail=document.getElementById("resemail").value;
    var upass=document.getElementById("respass").value;
    var uconfirmpass=document.getElementById("resconfirmpass").value;
    var uoccupation=document.getElementById("resoccupation").value;
    var ucontact=document.getElementById("rescontact").value;
    var male=document.getElementById("mgender").value;
    var female=document.getElementById("fgender").value;
    // regx
    var em =/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (fname==""){
        alert("Insert First Name");
        document.getElementById("resfname").focus();
        return false;
    } else if(lname==""){
        alert("Insert Last Name");
        document.getElementById("reslname").focus();
        return false;
    } else if(uname==""){
        alert("Insert Username");
        document.getElementById("resuname").focus();
        return false;
    } else if(uemail==""){
        alert("Insert Email address");
        document.getElementById("resemail").focus();
        return false;
    }
    //regex for email
    else if(!em.test(uemail)){
        alert("Insert your valid email address");
        document.getElementById("resemail").focus();
        return false;
    } else if(upass==""){
        alert("Insert password");
        document.getElementById("respass").focus();
        return false;
    } else if(upass!==uconfirmpass){
        alert("Insert Same password");
        document.getElementById("resconfirmpass").focus();
        return false;
    }else if(uoccupation==""){
        alert("Insert Ocupation please");
        document.getElementById("resoccupation").focus();
        return false;
    }else if(ucontact==""){
        alert("Insert Ocupation please");
        document.getElementById("rescontact").focus();
        return false;
    }else if(male==false&&female==false){
        alert("type at least 1");
        return false;
    }
    return true;

}
