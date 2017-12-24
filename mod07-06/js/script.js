var expression = "";
var operator = "";
function numEntry(value) {
  if(document.getElementById('numScreen').innerHTML == 0){
    expression = "";
  }
  expression += value;
  document.getElementById('numScreen').innerHTML = expression;
}

function numClear() {
  expression = "";
  document.getElementById('numScreen').innerHTML = "0";
}

function numOperator(operator){
  expression = document.getElementById('numScreen').innerHTML;
  expression += operator;
  document.getElementById('numScreen').innerHTML = expression;
}


function numEquals() {
  expression = document.getElementById('numScreen').innerHTML;
  expression = eval(expression);
  document.getElementById('numScreen').innerHTML = expression;
  expression = '';
}

function numBack() {
  expression = document.getElementById('numScreen').innerHTML;
  expression = expression.substr(0, expression.length-1);
  document.getElementById('numScreen').innerHTML = expression;
  console.log(isNaN(document.getElementById('numScreen').innerHTML));
  console.log(document.getElementById('numScreen').innerHTML.length === 0);
  if ((isNaN(document.getElementById('numScreen').innerHTML) == true) || (expression == 0)) {
    numClear();
  } else {
  }
}