<?php

if (isset($_POST['login-submit'])) {
    require 'server.php';

    $mail = $_POST['users'];
    $pwd = $_POST['pwd'];

    if (empty($mail) || empty($pwd)) {
        header("location: ../login.php?error=emptyfield");
        exit();
    } else {
        $sql = "SELECT * from users WHERE user_email=?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../login.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 's', $mail);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($pwd, $row['user_pwd']);
                if ($pwdCheck == false) {
                    header("location: ../login.php?error=wrongpasswrod");
                    exit();
                } elseif ($pwdCheck == true) {
                    session_start();
                    $_SESSION['user_Id'] = $row['id'];
                    $_SESSION['user_Email'] = $row['user_email'];

                    if ($row['user_type'] == 'Admin') {
                        header("location: ../includes/homepage-admin.php");
                        exit();
                    } elseif ($row['user_type'] == 'User') {
                        header("location: ../includes/homepage-user.php");
                        exit();
                    } else {
                        header("location: ../login.php?error=wrongemailorpwd");
                        exit();
                    }
                }
            } else {
                header("location: ../login.php?error=no-user");
                exit();
            }
        }
    }
}
