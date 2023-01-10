<?php

if (isset($_POST['signup-submit'])) {
    require 'server.php';

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $passwordCheck = $_POST['pwdCheck'];
    $userType = $_POST['users'];

    if (empty($first) || empty($last) || empty($email) || empty($password) || empty($passwordCheck) || empty($userType)) {
        header("location: ../backEnd/signup-form.php?error=emptyfield&email=?");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location: ../backEnd/signup-form.php?error=invalidemail");
        exit();
    } elseif ($password !== $passwordCheck) {
        header("location: ../backEnd/signup-form.php?error=passwordcheck");
        exit();
    } else {
        $sql = "SELECT user_email FROM users where user_email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../backEnd/signup-form.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("location: ../backEnd/signup-form.php?error=emailtaken");
                exit();
            } else {
                $sql = "INSERT into users (user_first, user_last, user_email, user_pwd, user_type)
      VALUES (?, ?, ?, ?, ?);";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../backEnd/signup-form.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $hashedPwd, $userType);
                    mysqli_stmt_execute($stmt);
                    header("location: ../backEnd/signup-form.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
