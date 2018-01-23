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
if(isset($_SESSION['username'])){
  echo "
    <li id=\"profile\">Profile</li>
    <li id=\"settings\">Settings</li>
    <li id=\"logout\">Log Out</li>
  </ul>
</nav>
";
  } else{
  echo
    "
    <li id=\"signin\">Sign In</li>
    <li id=\"signup\">Signup</li>
  </ul>
</nav>
";

  }
?>