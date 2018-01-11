var i = 1;
setInterval(runFunction, 2000);
function runFunction(){
  var image_path = "";
  if(i > 3){
    i = 1;
  }
  image_path = "url('http://www.sololearn.com/uploads/slider/" + i + ".jpg')";
  document.getElementById("elements").style.background = image_path;
  i++;
}