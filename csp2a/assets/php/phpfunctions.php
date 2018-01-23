<?php
fn_session_init();
function fn_pagecheck(){
  if($_SESSION['currentpage'] !== $_SERVER['PHP_SELF']){
    $_SESSION['prevpage'] = $_SESSION['currentpage'];
  } else{
  }
  $_SESSION['currentpage'] = $_SERVER['PHP_SELF'];
}

function fn_session_init(){
  if(session_status()==2){
    return;
  } elseif(session_status()==1){
    session_start();
    return;
  } else{
    return;
  }
}

?>