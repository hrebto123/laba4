<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Username: <input type="text" name="user" /> <br /> 
        Password: <input type="password" name="pass" /> <br />
        <input type="submit" name="submit" value="Login" />
    </form>
    <?php
        session_start();

        

        $handle = fopen(__DIR__ . '/txt.txt', "r");
        $lineArr;

        while (($line = fgets($handle)) !== false) {
            $lineArr = explode(' ', $line);
        }

        

        $user = $lineArr[0];
        $pass = $lineArr[1];

      

        if(isset($_POST['submit'])){
            if($user == $_POST['user'] AND $pass == $_POST['pass'])
            {
                $_SESSION['admin'] = $user;
                echo 'вы успешно вошли';        
            }
            else echo '<p>Логин или пароль неверны!</p>';
        } 
    ?>  
     
</body>
</html>