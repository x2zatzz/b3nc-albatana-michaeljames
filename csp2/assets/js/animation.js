var arr = [];
var node = "";
var val = "";


// INTERACTIVE ELEMENTS - animation
arr = document.getElementsByClassName("interactive");
for(l=1; l<=arr.length; l++){
  arr[l-1].addEventListener("mouseover", function(){
    val = this.style.background;
    this.style.background = "red";
    console.log(val);
  });
  arr[l-1].addEventListener("mouseout", function(){
    this.style.background = val;
  });
  arr[l-1].addEventListener("mousedown", function(){
    this.style.background = "gold";
  });
}


// console.log(document.styleSheets[0].href);
// console.log(document.styleSheets.length);
// console.log(document.styleSheets[0].cssRules);


arr = document.styleSheets[0].cssRules;
arr1 = Array.prototype.slice.call(arr);  // converts DOM nodes to JS-array
// console.log(arr1);
console.log(arr);
console.log(arr[1].style.background);
arr1.forEach(function(item, index){
  // console.log(item);
  // if(item.search("class=\"interactive\"") === true){
  //   console.log('the code works');
  // }

});
