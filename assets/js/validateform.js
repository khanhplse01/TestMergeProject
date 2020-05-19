function check(){
    var ch=document.forms["form"];
    var nb=ch["phone"].value;
    var mauphone=/((09|03|07|08|05)+([0-9]{8})\b)/g;
    if(mauphone.test(nb)==false)
        {
            alert("Vui lòng nhập đúng số điện thoại !!");
            return false;
        }
    else
        return true;
}