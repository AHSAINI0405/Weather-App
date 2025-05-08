<?php
include('connection.php');
if (isset($_POST['reg']))
{
    @$username=$_POST['Username'];
    @$email=$_POST['Email'];
    @$mobile_no=$_POST['Mobile_No'];
    @$password=$_POST['Password'];
    @$confirm_password=$_POST['Confirm_Password'];
    @$sql_query="INSERT INTO registertb (`Username`,`Email`,Mobile_No,`Password`,`Confirm_Password`) VALUES ('$username','$email',$mobile_no,'$password','$confirm_password')";
    @$query="select * from registertb where Username='$username' OR Email='$email'";
    @$result=mysqli_query($conn,$query);
    @$user=mysqli_fetch_assoc($result);
  
  if ($user)
  {
    if ($user['Username']===$username)
    {
        echo "<script type='text/javascript'>alert('username already exists') </script> <br>"; 
    }
        if ($user['Email']===$email)
        {
            echo "<script type='text/javascript'>alert('Email already exists') </script> <br>";
        } 
      
    }
    else
    {
        if ($password != $confirm_password)
        {
            echo "<script type='text/javascript'>alert('Password doesnot match') </script> <br>";
        
        }
        else{
        mysqli_query($conn,$sql_query);
        echo "<script type='text/javascript'>
        alert ('you are registered successfully')
        document.location='welcome.html'
        </script>"; 
    }}
    }
    mysqli_close($conn);
    ?>  
  
  
  

