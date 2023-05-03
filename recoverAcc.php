<!DOCTYPE html>
<html lang="en">
<?php
    include('page-segments/head.php');
?>
<body data-bs-theme='dark'>
    <?php
        include('page-segments/navbar.php');
    ?>
    <div class="bg-body-secondary mb-4 mt-4 mx-auto p-5 text-center text-white divs rounded" data-bs-theme="dark" style='width:570px;'>
    <h3>Account Recovery</h3>
    <form action="connection/recover.php" method='get'>
        <table class="table table-hover table-rounded table-borderless mt-2" align="center">
            <tr>
                <th colspan='4'>Recovery for Syntax-Type</th>
            </tr>
            <tbody class='table-group-divider'>
                <tr>
                    <td align='start'><h6 class='mb-0'>Enter Hash:</h6></td>
                </tr>
                <tr>
                    <td colspan='3'><input id='hash' class='form-control mt-0' type="text" name='hash' pattern='^[a-z0-9]{128}$' required></td>
                </tr>
            </tbody>
            
            <tr>
                <td colspan='4'><button class='btn btn-dark btn-sm' type="submit">Recover</button></td>
            </tr>
        </table>
    </form>
    <?php
        error_reporting(0);
        echo $_GET['msg'];
    ?>
    </div>
</body>
</html>