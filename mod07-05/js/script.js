function generateTable(){
  var input_number = document.getElementById("input_number").value;
  var check_checkered = document.getElementById("check_checkered").checked;
  var check_inverted = document.getElementById("check_inverted").checked;
  var check_display_num = document.getElementById("check_display_num").checked;
  var table_length = Math.ceil(Math.sqrt(input_number));
  console.log("table_length:" + table_length);

  if(input_number == 0 || input_number < 0 || isNaN(input_number)){
    tooltipMessage("Please enter cell value of more than zero to generate a table.");
    return;
  }

  document.getElementById("tablegenerator").style.display = "grid";
  document.getElementById("tablegenerator").style.gridTemplateColumns = "repeat(" + table_length + ", 1fr";
  document.getElementById("tablegenerator").style.gridTemplateRows = "repeat(" + table_length + ", 1fr";


  var row_pos = 1;
  var col_pos = 1;
  var generator_formula = "";
  var i = 1;
  for(; i <= input_number; i++){
    if(i <= (table_length * row_pos)){
      row_pos = row_pos;
    }
    else{
      row_pos ++;
    }
    col_pos = (i - (table_length*(row_pos - 1)));
    if(check_display_num == true){
      generator_formula += "<div class='box' id='r" + row_pos + "c" + col_pos + "'>" + i + "</div>";
    }
    else{
      generator_formula += "<div class='box' id='r" + row_pos + "c" + col_pos + "'>" + "</div>";
    }
    document.getElementById("tablegenerator").innerHTML = generator_formula;
  }

  if(check_checkered == true){
    row_pos = 1;
    col_pos = 1;
    i = 1;
    for (; i <= input_number; i++) {
      if (i <= (table_length * row_pos)) {
        row_pos = row_pos;
      }
      else {
        row_pos++;
      }
      col_pos = (i - (table_length * (row_pos - 1)));
      if ((((row_pos % 2) !== 0) && ((col_pos % 2) !== 0)) || (((row_pos % 2) == 0) && ((col_pos % 2) == 0))) {
        rowcol = "r" + row_pos + "c" + col_pos;
        if (check_inverted == true) {
          document.getElementById(rowcol).style.background = "black";
        } else {
          document.getElementById(rowcol).style.background = "gray";
        }
      }
      else if ((((row_pos % 2) == 0) && ((col_pos % 2) !== 0)) || (((row_pos % 2) !== 0) && ((col_pos % 2) == 0))) {
        rowcol = "r" + row_pos + "c" + col_pos;
        if(check_inverted == true){
          document.getElementById(rowcol).style.background = "gray";
        } else{
          document.getElementById(rowcol).style.background = "black";
        }
      }
      else {
      }
    }
  }
  tooltipMessage("Table generated with " + table_length + "x" + table_length + " table size.");
}

function clearTable(){
  document.getElementById("tablegenerator").innerHTML = "";
  tooltipMessage("Table cleared.");
  document.getElementById("input_number").value = 0;
}

function tooltipMessage(message){
  document.getElementById("tooltipmessage").innerHTML = "<small>" + message + "</small>";
}