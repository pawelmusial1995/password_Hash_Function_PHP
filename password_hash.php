<?php
include('connection.php');

// end of database connect
// mysqli_close($conn);
?>

<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Password Hashing</title>
</head>
    
    <body>
        
        <div class="container">
        
            <h1>Password Hashing using PHP</h1>
        
        <?php
            
            //$password = password_hash("mypassword", //PASSWORD_DEFAULT );
            
            //echo $password;
            
            $hashedPassword = '$2y$10$SVaZd5wvxZzNQda8uCTRUuioI3ixlhY6yAIycbQYKzh.PkUIkwijy';
            
            //password test
            
           
            
            // jesli przycisk jest wcisniety
            if(isset($_POST['login']) ) {
                //password test 
              if (password_verify($_POST['password'], $hashedPassword) ) {
                
                    echo "Password is correct";

                }else {
                    echo "incorrect password!";
                }   
            }
            ?>
            
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] ); ?>" method="post">
            
                <label>* Password</label>
                <input type="password" placeholder="Password" name="password"> <br><br>
                
                <input type="submit" name="login" value="Log in" class="btn btn-default"> 
             
            
            
            </form>
        </div>
        
        
        
        
        
        
        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>