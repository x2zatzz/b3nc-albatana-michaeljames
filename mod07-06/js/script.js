var expression = "";
var operator = "";
function numEntry(value) {
  expression += value;
  document.getElementById('numScreen').innerHTML = expression;
}

function numClear() {
  document.getElementById('numScreen').innerHTML = '0';
  expression = "";
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
  if (document.getElementById('numScreen').innerHTML == '') {
    numClear();
  }
  expression = expression.substr(0, expression.length-1);
  document.getElementById('numScreen').innerHTML = expression;
  
}