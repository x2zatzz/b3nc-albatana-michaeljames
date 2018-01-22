<?php
echo
"
<nav>
  <h2>";
echo $_SESSION['webtitle'];
echo "
  </h2>
  <ul>
    <li id=\"about\">About</li>
    <li id=\"careers\">Careers</li>
    <li id=\"catalog\">Catalog</li>
";
if($_SESSION['username'] !== null){
  echo "
  <li id=\"profile\">Profile</li>
  <li id=\"settings\">Settings</li>
  <li id=\"\">Log Out</li>
    </ul>
  </nav>
  ";
  } else{
    echo
    "
        <li id=\"\">Sign In</li>
        <li id=\"\">Signup</li>
      </ul>
    </nav>
    ";
  }
?>