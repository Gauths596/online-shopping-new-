<?php
session_start();
$pagename="Payment Details"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

?>

   <form action="payment.php" method="POST">
        <table style="border:none">
            <tr >
                <td style="border:none;">*FullName of the CardHolder</td>
                <td style="border:none;"><input type="text" name="cardholder">
            </tr>
            <tr >
                <td style="border:none;">*User Email</td>
                <td style="border:none;"><input type="text" name="Email  id">
            </tr>


            <tr >
                <td style="border:none;">*Card Number</td>
                <td style="border:none;"><input type="text" name="cardno">
            </tr>
            <tr >
                <td style="border:none;">*Expiry</td>
                <td style="border:none;"><input type="text" name="expiryd">
            </tr>
            <tr >
                <td style="border:none;">*CVV</td>
                <td style="border:none;"><input type="text" name="cvvp">   </td>
            </tr>


        </table>


        </table>
    </form>

<?php
echo"<tr>
    <form action=Thankyou.php method=POST>

                <input type=Submit value=Pay Now> </a> </td>
            </form>
            </tr>
";
?>

<?php



include("footfile.html"); //include head layout
echo "</body>";
?>