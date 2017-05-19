// creat
document.cookie="c_user=FrOTy.A7;"
// delete
document.cookie="firstname=;"

// display
function displayCookies() {
var fname=getCookie("c_user");
if (fname==null) {fname="";}
if (fname!="") {fname="Facebook_ID="+fname;}
alert (fname + " ");
}
// get by name
function getCookie(name) {
var nameEQ = name + "=";

//alert(document.cookie);

var ca = document.cookie.split(';');
for(var i=0;i < ca.length;i++) {
var c = ca[i];
while (c.charAt(0)==' ') c = c.substring(1);
if (c.indexOf(nameEQ) != -1) return c.substring(nameEQ.length,c.length);
}
return null;
} 


// get all
a = document.cookie;
alert(a);