 <?php 
 include ("../../TAILWINDCSS/config.php");
 $floating_last_name = $_POST['floating_last_name'];
 $floating_password = $_POST['floating_password'];
 $repeat_password = $_POST['repeat_password'];
 $floating_first_name = $_POST['floating_first_name'];
 $floating_last_name = $_POST['floating_last_name'];
 $floating_phone = $_POST['floating_phone'];
 $con_add = $_POST['con_add'];
 
 if ($floating_password != $repeat_password){
    echo "Password mismatched";
    echo "<a href=register.php>Go to register again!!!</a>";
 } else {
    $floating_password = password_hash($floating_password, PASSWORD_DEFAULT);
    $repeat_password = password_hash($repeat_password, PASSWORD_DEFAULT);
    $result = mysqli_query($mysqli,"INSERT INTO list_student_name VALUES(null, '$floating_email','$floating_password',' $repeat_password','$floating_first_name','$floating_last_name','$floating_phone','$con_add')");
    if ($result === True){
        header('location:index.html');
    }else {
        echo "Register not successfully!!";
        echo "<a href=register.php>Go to register again!!!</a>";
    }
 }  
 ?>