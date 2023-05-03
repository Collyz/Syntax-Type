<!DOCTYPE html>
<html lang="en">
<?php
  include('page-segments/head.php');
?>
<body data-bs-theme="dark">
    <?php
      include('page-segments/navbar.php');
    ?>
    <div id="about" class="bg-body-secondary mb-4 mx-auto p-5 text-center text-white divs" data-bs-theme="dark">
        <img src="images/dino100_72_dpi_outline.png" alt="dinosaur full body logo" width="50">
        <div class="typerwriter-div align-top">
            <p class="h1 text2">Welcome to Syntax-Type</p>
        </div>
        <img src="images/dino100_72_dpi_flipped_outline.png" alt="dinosaur full body logo flipped" width="50">
        <br>
        <a href="login-register.php"><button class="btn btn-dark mt-3" id="register-btn">Login/Register</button></a>
        <a href=""><button class="btn btn-dark mt-3 mx-4" id="play-btn">Play as Guest</button></a>
    </div>
    <div class="bg-body-secondary mx-auto pb-5 px-4 pt-4 text-center text-white divs"
     data-bs-theme="dark">
      <h3 class='mb-5'>
        Supported Languages: Java, Python, C++ and more to come!
      </h3>
      <div class="d-flex flex-row p-0">
        <div class="card flex-fill">
          <div class="card-body" style='font-family: Arial, Helvetica, sans-serif;'>
            <h4 class="card-title mb-2"><u>Java</u></h4>
            <p class='m-0 fw-bold'>Examples:</p>
            <p class='m-0 lh-sm typing'style='color:green;'>Math.pow();
            <br>Scanner.next();<br>System.err.println();<br>SplittableRandom();
            <br>BigInteger();<br>new<br>SplittableRandom();<br>args.length;
            <br>ClassNotFoundException<br>ArrayList<>()</p>
          </div>
        </div>
        <div class="card flex-fill">
          <div class="card-body" style='font-family: Arial, Helvetica, sans-serif;'>
            <h5 class="card-title"><u>Python</u></h5>
            <p class='m-0 fw-bold'>Examples:</p>
            <p class='m-0 lh-sm typing'style='color:green;'>5**3
            <br>input()<br>print()<br>open()
            <br>range()<br>elif<br>random.randint(a,b)<br>timeit()
            <br>math.floor()<br>re.search()</p>
          </div>
        </div>
        <div class="card flex-fill">
          <div class="card-body" style='font-family: Arial, Helvetica, sans-serif;'>
            <h5 class="card-title"><u>C++</u></h5>
            <p class='m-0 fw-bold'>Examples:</p>
            <p class='m-0 lh-sm typing'style='color:green;'>pow();
            <br>std::cin;<br>std::cout;<br>std::fstream;
            <br>BigInt();<br>new;<br>rand();<br>vector<>;
            <br>floor()<br>std::set<></p>
          </div>
        </div>
      </div>
    </div>
</body>
</html>