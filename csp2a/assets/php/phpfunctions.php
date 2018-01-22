<?php
function fn_pagecheck(){
  if($_SESSION['currentpage'] !== $_SERVER['PHP_SELF']){
    $_SESSION['prevpage'] = $_SESSION['currentpage'];
  } else{
    $_SESSION['currentpage'] = $_SERVER['PHP_SELF'];
  }
}

function fn_pageinit(){

}

?>