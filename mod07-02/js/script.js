function redFunc() {
	document.getElementById("red-box").style.backgroundColor = "red";
}

function orangeFunc() {
	document.getElementById("orange-box").style.backgroundColor = "orange";
}

function yellowFunc() {
	document.getElementById("yellow-box").style.backgroundColor = "yellow";
}

function greenFunc() {
	document.getElementById("green-box").style.backgroundColor = "green";
}

function blueFunc() {
	document.getElementById("blue-box").style.backgroundColor = "blue";
}

function indigoFunc() {
	document.getElementById("indigo-box").style.backgroundColor = "indigo";
}

function violetFunc() {
	document.getElementById("violet-box").style.backgroundColor = "violet";
}

var navClass;

function changeColor(className, id=null) {
	if (id == null) {
		navClass = className.replace("nav-box ", "");
	} else{
    var boxClass = className.split(" ");
    var boxClassLength = boxClass.length;
    var element = document.getElementById(id);
    if (boxClassLength > 1) {
      element.classList.remove(boxClass[1]);
      element.className = boxClass[0] + " " + navClass;
    } else {
      element.className = boxClass + " " + navClass;
    }
	}
}