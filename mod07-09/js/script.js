function reset(){
  window.refresh;
}

function hideptag(){
  $('p').hide();
}
function hideclass(){
  $('.hideGroup').hide();

}

$('p').click(function(){
  $(this).hide();
});



function funcAttr(){
  $('.hideGroup').click(function(){
    $('this').css("background", "blue");
  });
}

$('.hideGroup').hover(function(){
  $(this).html("I am a changed paragraph.");
});

$('p').hover(function(){
  $(this).css("color","red");
});