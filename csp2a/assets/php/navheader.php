<?php
echo
"
<nav>
  <h2>";
echo $_SESSION['webtitle'];
echo "
  </h2>
  <ul>";
if(isset($_SESSION['username'])){
echo "
  <li id=\"home\">Home</li>";
} else{}
echo "
    <li id=\"about\">About</li>
    <li id=\"careers\">Careers</li>
    <li id=\"catalog\">Catalog</li>";
if(isset($_SESSION['username'])){
  echo "
    <li id=\"profile\">" . $_SESSION['username'] . "</li>";
if($_SESSION['role'] == "admin"){
  echo "<li id=\"settings\">Settings</li>";
} else{}
    echo "
    <li id=\"logout\">Log Out</li>
  </ul>
</nav>";
  } else{
  echo
    "
    <li id=\"signin\">Sign In</li>
    <li id=\"signup\">Sign Up</li>
  </ul>
</nav>
";

}
?>