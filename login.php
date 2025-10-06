<?php
    session_start();
    require "connection.php";


    iF($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows === 1){
            $row = $result->fetch_assoc();

            if($password === $row['password']){
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $username;
                header("Location: index.php"); 
            } else {
                echo "Invalid Password.";
            }
        } else {
            echo "User not found.";
        }

        $stmt->close();
    }
    

?>