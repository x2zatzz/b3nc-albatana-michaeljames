var a = [];
var n = "";
var m = "";

// INTERACTIVE ELEMENTS - animation
a = document.getElementsByClassName("interactive");
for(i=1; i<=a.length; i++){
  a[i-1].addEventListener("mouseover", function(){
    n = this.style.background;
    this.style.background = "red";
    console.log(n);
  });
  a[i-1].addEventListener("mouseout", function(){
    this.style.background = n;
  });
  a[i-1].addEventListener("mousedown", function(){
    this.style.background = "gold";
  });
}


