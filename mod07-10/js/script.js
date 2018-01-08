// $("li").click(function(){
//   // $(this).css("color", "red");

//   $(this).toggleClass("completed");
// });

// // $("li").on("click","p").fadeOut(500);

// $("span").on("hover")

$("ul").on("click", "li", function(){
  $(this).toggleClass("completed");
});

$("ul").on("click", "span", function(){
  $(this).parent().fadeOut(500, function(){
    $(this).remove();
  });
});

$("input[type='text']").keypress(function(event){
  if(event.which === 13){
    var todoText = $(this).val();
    $(this).val("");
    $("ul").append("<li><span>x</span> " + todoText + "</li>");
  }
});

function clearFunction(){
  $("li").hide();
}