<?php
include("connection.php");  
session_start();
if($_SERVER['REQUEST_METHOD']=="POST")
{
    @$username = $_POST['Username'];  
    @$password = $_POST['Password'];  
    if(!empty($username) && !empty($password))
    {
        //$username = stripcslashes($username);  
        //$password = stripcslashes($password);  
       $username = mysqli_real_escape_string($conn,$username);  
       $password = mysqli_real_escape_string($conn,$password); 
    
$query = "select * from `registertb` where `Username` ='$username' and `Password` ='$password'";  
 $result = mysqli_query($conn,$query);  
 $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 //$active=$row['ACTIVE'];
 $count=mysqli_num_rows($result);
 if($count===1)
        {  
            //session_register('username');
            
            $_SESSION['login_user']=$username;
            header("location:index.html");
     
            
            echo "<script type='text/javascript'> alert ('login successfully')
            </script>";
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }
    }}


    
        /*
    if($result)
    {
        if($result && mysqli_num_rows($result) >0)
        {
            $user_data=mysqli_fetch_assoc($result);

            if($user_data['Password']===$password)            {
    echo "<script type='text/javascript'>alert ('login successfully')document.location='index.html'</script>";
           }
        }
    }       
    echo "wrong username  password";
    }
    else{
        echo "wrong  password";
    }
}
mysqli_close($conn);
*/
?>