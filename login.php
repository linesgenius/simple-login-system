<?php
    require 'dbconfig.php';
    session_start();

    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);


        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);

        $_SESSION['user'] = $data['username'];

        if($result){
            if(mysqli_num_rows($result) > 0){
                echo "
                    <script>
                        alert('Login success!');
                        window.location.href = 'home.php';
                    </script>
                ";
            } else{
                echo "
                    <script>
                        alert('Wrong email or password!');
                        window.location.href = 'login.php';
                    </script>
                ";
            }
        } else{
            echo "Error executing sql statement!";
        }
    }