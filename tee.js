
var str1 = "14' - €14.99";
var str2 = "€0.88";

function split(str) {
 var i = str.indexOf("'");
 if(i > 0)
  return  str.slice(0, i);
 else
  return "";     
}


document.write("returns: '" + split(str1) + "'");

document.write("<br />");

document.write("returns: '" + split(str2) + "'");

