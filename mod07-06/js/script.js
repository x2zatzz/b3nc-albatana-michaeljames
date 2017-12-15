var expression = "";
function numEntry(value) {
  expression += value;
  document.getElementById('numScreen').innerHTML = expression;
}

function numClear() {
  document.getElementById('numScreen').innerHTML = '0';
  expression = "";
}

function numEquals() {
  expression = document.getElementById('numScreen').innerHTML;
  expression = eval(expression);
  document.getElementById('numScreen').innerHTML = expression;
  expression = '';
}

function numBack() {
  if (document.getElementById('numScreen').innerHTML == '') {
    numClear();
  }
  expression = expression.substr(0, expression.length-1);
  document.getElementById('numScreen').innerHTML = expression;
  
}