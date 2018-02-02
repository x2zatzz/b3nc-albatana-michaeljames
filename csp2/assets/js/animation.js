

var snackbar = document.getElementById('snackbar');

anim_snackbar();
anim_pageload_sequence();
function anim_snackbar(){
  TweenMax.to(snackbar, 2,{
    background: "red",
    color: "hsla(0, 0%, 0%, 0)",
    height: 0,
    autoAlpha: 0,
    delay: 2
  });
}

function anim_pageload_sequence(){
}


function anim_random_gen(){
  var randnum = Math.random() * 360;
  if (randnum >= 45 && randnum < 135) {
    console.log('up');
  } else if(randnum >= 135 && randnum < 225) {
    console.log('left');
  } else if(randnum >= 225 && randnum < 315) {
    console.log('down');
  } else{
    console.log('right');
  }
}
