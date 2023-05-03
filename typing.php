<!DOCTYPE html>
<html lang="en">
<?php
    include('page-segments/head.php');
?>
<body data-bs-theme='dark'>
    <?php
        include('page-segments/navbar.php');
    ?>
    <div id="about" class="bg-body-secondary mb-4 mx-auto p-5 text-start text-white divs" data-bs-theme="dark">
        <h4>Welcome
            <?php 
            session_start();
            error_reporting(1);
            if(isset($_SESSION['username'])){
                echo $_SESSION['username'].'!';
            }else{
                echo 'Guest!';
            }
            ?>
        </h4>
        <div class='container rounded d-flex align-items-center justify-content-center border border-success divs' style='width:500px; height:50px;'>
                <input class='form-check-input'type="radio" name='language'>&nbsp;Java&nbsp;
                <input class='form-check-input'type="radio" name='language'>&nbsp;Python&nbsp;
                <input class='form-check-input'type="radio" name='language'>&nbsp;C++&nbsp;
                <input class='form-check-input'type='checkbox' name='language'>&nbsp;Today's Leaderboard Prompt
        </div>
    </div>
    <div class="settings container text-end" id='settings'>
        Time:
        <span class='time' id='time15'>15</span>
        <span class='time' id='time30'>30</span>
        <span class='time' id='time45'>45</span>
        <span class='time' id='time60'>60</span>
        <span class='time' id='time120'>120</span>
    </div>
    <div class="container text-center border mt-3 mb-3 pb-0 pt-1 border rounded-5" style='width:100px;'>
        <h1 id='timer'>15</h1>
        
    </div>
    <div class="container border border-success rounded pt-3 pb-3">
        <div class="container border-success text-wrap text-break typing" style='font-size:20px;'>
            Select an option above
        </div>
    </div>


    <script src="data.js"></script>
    <script>
        let times = document.querySelectorAll('.time');
        let timer2 = document.getElementById('timer');
        times.forEach(t => {
        t.addEventListener('click', () => {
            timer2.textContent = `${t.textContent}`;
            });
        });
    </script>

</body>
</html>