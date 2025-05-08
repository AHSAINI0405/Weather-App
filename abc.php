
/*<?php      
    require_once('connection.php');  
    if (isset($_POST['submit'])){
    @$username = $_POST['Username'];  
    @$password = $_POST['Password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
       $username = mysqli_real_escape_string($conn,$username);  
       $password = mysqli_real_escape_string($conn,$password);  
      
        $sql = "select * from registertb where Username ='$username' and Password ='$password'";  
    $result = mysqli_query($conn,$sql);  
       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
       $count = mysqli_num_rows($result);  
          
       if ('$username'===`Username` && '$password'===`Password`)
        {
           
  
                echo "<h1><center> Login successful </center></h1>";  
        }
            else{  
                echo "<h1> Login failed. Invalid username or password.</h1>";  
            }}
         
        
        
        if($count===1)
        {  
            echo "<h1><center> Login successful </center></h1>";
           // <script>document.location='index.html'</script>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }
*/
        mysqli_close($conn);   
?>*/