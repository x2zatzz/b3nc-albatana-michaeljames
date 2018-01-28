<?php
echo "
    <h2>Beeer Web App</h2>
    <nav>
      <ul>
        <li>Home</li>
        <li>About</li>
        <li>Careers</li>
        <li>Catalog</li>
        <li>Contact</li>
        ";
if(isset($_SESSION['current_user'])){
  echo "<li>Log Out</li>";
} else{
  echo "<li>Log In</li>";

}

echo "
        <li>Sign Up</li>
      </ul>
    </nav>
";
?>