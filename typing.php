<!DOCTYPE html>
<html lang="en">
<?php
    include('page-segments/head.php');
?>
<body data-bs-theme='dark'>
    <?php
        include('page-segments/navbar.php');
    ?>
    <div id="about" class="bg-body-secondary mb-4 mx-auto p-5 text-center text-white divs" data-bs-theme="dark">
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
                <input id='java' class='form-check-input lang' type="radio" name='language' onclick='generatePrompt()'>&nbsp;Java&nbsp;
                <input id='python' class='form-check-input lang' type="radio" name='language' onclick='generatePrompt()'>&nbsp;Python&nbsp;
                <input id='c++' class='form-check-input lang' type="radio" name='language' onclick='generatePrompt()'>&nbsp;C++&nbsp;
                <input id='java' class='form-check-input leaderboard' type='checkbox' name='leaderboard'>&nbsp;Today's Leaderboard Prompt
        </div>
    </div>
    <div class="settings container text-end" id='settings'>
        <a data-bs-toggle='modal' data-bs-target='#board'>Leaderboard</a>&nbsp|&nbsp;Time:
        <span class='time' id='time15' style='cursor: pointer;'>15</span>
        <span class='time' id='time30' style='cursor: pointer;'>30</span>
        <span class='time' id='time45' style='cursor: pointer;'>45</span>
        <span class='time' id='time60' style='cursor: pointer;'>60</span>
        <span class='time' id='time120' style='cursor: pointer;'>120</span>

        <!-- Modal -->
        <div class="modal fade" id="board" tabindex="-1" aria-labelledby="boardLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="boardLabel">Today's Leaderboards</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                    <table class='table'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Java</th>
                                <th>Python</th>
                                <th>C++</th>
                            </tr>
                        </thead>
                        <tbody class='table-group-divider table-bordered border border-success-subtle' align='center'>
                            <tr>
                            </tr>
                            <?php
                                session_start();
                            ?>
                        </tbody>
                        
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    </div>
    <div class="container text-center border mt-3 mb-3 pb-0 pt-1 border rounded-5" style='width:100px;'>
        <h1 id='timer'>15</h1>
        
    </div>
    <div class="container border border-success rounded pt-3 pb-3">
        <div id='typefield' class="container border-success text-wrap text-break typing" style='font-size:20px;'>
            Select an option above
        </div>
        <div>
            <input class='form-control mt-4' type="text" id='userInput' placeholder='type here' autofocus oninput='timer()'>
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