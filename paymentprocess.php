<?php
session_start();
include("db.php");
$pagename="Payment Results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

$isEmpty = empty($_POST['nch']) || empty($_POST['cn']) || empty($_POST['exp'])
    || empty($_POST['cvv'])  ;

// echo "<p>value :=$isEmpty</p>";

if(!$isEmpty)
{
    $nch=$_POST['nch'];
    $cn=$_POST['cn'];
    $exp=$_POST['exp'];
    $cvv=$_POST['cvv'];
    $query="insert into `payment` (`cardholder`,`cardno`, `expiryd`, `cvvp`) 
            VALUES ('$nch','$cn','$exp','$cvv')";

    if(mysqli_query($conn, $query))
    {
        echo "<p>Payment Successful</p>";
        echo "To continue,Please <a href='Thankyou.php'>login</a>";
    }



    // echo "$fname,$lname,$address,$postcode,$telNo,$email,$password";


}


include("footfile.html"); //include head layout
echo "</body>";
?>