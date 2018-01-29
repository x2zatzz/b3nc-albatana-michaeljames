<?php

function fn_session_init(){
  if(session_status() !== 2){
    session_start();
  } else{
  }
}

?>