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

function fn_session_validation(){
  if(is_null($_SESSION['username']) == true){
    $_SESSION['snackbar'] = 'You are accessing resources with an unauthorized credentials';
    header('location: index.php');
  } else{
  }
}

function fn_admin_validation(){
  if(is_null($_SESSION['username']) == true || $_SESSION['role'] !== 'admin'){
    $_SESSION['snackbar'] = 'You are accessing resources with an unauthorized credentials';
    header('location: index.php');
  } else{

  }
}

?>