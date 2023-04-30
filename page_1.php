<!DOCTYPE html>
<html lang="en">
<?php
  include('page-segments/head.php')
?>
<body class='cream-bg' data-bs-theme="dark">
    <nav id="bar" class="navbar bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img class="align-top" src="images/DinoHead_outline.png" alt="dinosaur head logo" width="32" height="32">
            Syntax-Type
          </a>
          <div class="form-check form-switch">
            <label id="mode-label" class="form-check-label" for="flexSwitchCheckDefault" >Dark Mode</label>
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" onclick="lightMode()">
        </div>
        </div>
      </nav>
    <div id="about" class="bg-body-secondary mb-4 mx-auto p-5 text-center text-white divs" data-bs-theme="dark">
        <img src="images/dino100_72_dpi_outline.png" alt="dinosaur full body logo" width="50">
        <div class="typerwriter-div align-top">
            <p class="h1 text2">Welcome to Syntax-Type</p>
        </div>
        <img src="images/dino100_72_dpi_flipped_outline.png" alt="dinosaur full body logo flipped" width="50">
        <br>
        <a href="connection/authentication.html"><button class="btn btn-light mt-3" id="register-btn">Login/Register</button></a>
        <a href=""><button class="btn btn-light mt-3 mx-4" id="play-btn">Play as Guest</button></a>
    </div>
    <div class="bg-body-secondary mb-4 mx-auto p-5 text-center text-white divs" data-bs-theme="dark">
      <h5 class='mb-5'>
        Supported Languages: Java, Python, C++ and more to come!
      </h5>
      <div class="d-flex flex-row">
        <div class="card flex-fill">
          <div class="card-body">
            <h5 class="card-title">Java</h5>
            <p>Some content</p>
          </div>
        </div>
        <div class="card flex-fill">
          <div class="card-body">
            <h5 class="card-title">Python</h5>
            <p>Some content</p>
          </div>
        </div>
        <div class="card flex-fill">
          <div class="card-body">
            <h5 class="card-title">C++</h5>
            <p>Some content</p>
          </div>
        </div>
      </div>

    </div>
</body>
</html>