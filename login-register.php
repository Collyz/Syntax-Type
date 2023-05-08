<!DOCTYPE html>
<html lang="en">
<?php
    include('page-segments/head.php');
?>
<body data-bs-theme="dark">
    <?php
        include('page-segments/navbar.php');
    ?>
    <div class="bg-body-secondary mb-4 mt-4 mx-auto p-5 text-center text-white divs rounded" data-bs-theme="dark" style='width:500px;'>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="login-tab-pane" aria-selected="true">Login</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="register-tab-pane" aria-selected="false">Register</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <form action="connection/login.php" name='form1' method='get'>
                    <table class="table table-hover table-rounded table-borderless mt-2" align="center">
                        <thead>
                            <tr>
                                <th colspan='4'>Login to Syntax-Type</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Username</td>
                            <td colspan='3'><input id='username1' class='form-control' type="text" name='username' style='width:100%' pattern='[a-zA-Z]{5,35}' required></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td colspan='3'>
                                <div class="input-group">
                                    <input id='password1' class='form-control' type="password" name='password'  pattern='[A-Za-z0-9]{5,35}' required>
                                    <span class="input-group-text" id='basic-addon'><i id='eye' onclick='passwordToggle1()'class="bi bi-eye-slash"></i></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='4'><button class='btn btn-dark btn-sm mb-3' type="submit">Login</button><br><h6><a href="recoverAcc.php">Forgot Username/Password?</a></h6></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>

            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="1">
                <form action="connection/register.php" name='form2' method='post' id='form2'>
                    <table class="table table-hover table-rounded table-borderless mt-2" align="center">
                        <tr>
                            <th colspan='4'>Register to Syntax-Type</th>
                        </tr>
                        <tbody class='table-group-divider'>
                        <tr>
                            <td>Username</td>
                            <td colspan='3'><input id='username2' class='form-control' type="text" name='username' style='width:100%' pattern='[a-zA-Z]{5,35}' required></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td colspan='3'>
                            <div class="input-group">
                                <input id='password2' class='form-control' type="password" name='password1' pattern='[A-Za-z0-9]{5,35}' required>
                                <span class="input-group-text" id='basic-addon'><i id='eye2' onclick='passwordToggle2()'class="bi bi-eye-slash"></i></span>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Re-Type Pass</td>
                            <td colspan='3'>
                                <div class="input-group">
                                    <input id='password3' class='form-control' type="password" name='password2' pattern='[A-Za-z0-9]{5,35}' required>
                                    <span class="input-group-text" id='basic-addon'><i id='eye3' onclick='passwordToggle2()'class="bi bi-eye-slash"></i></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='4'><button class='btn btn-dark btn-sm' type="submit">Register</button></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <!-- Message to User -->
    <div class="container text-center">
        <?php
            error_reporting(0);
            echo $_GET['msg'];
        ?>
    </div>
    <script src="javascript/password-manipulation.js"></script>
</body>
</html>