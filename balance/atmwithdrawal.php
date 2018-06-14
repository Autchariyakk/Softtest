<html>  
 <head>
 <script type="text/javascript">
  function validateForm() 
{ 
 var a=document.forms["wd"]["withdrawal"].value; 
  
  if (a==null || a=="" || isNaN(document.forms["wd"]["withdrawal"].value)) 
    { 
    alert("กรุณาใส่จำนวนเงินที่ต้องการถอน"); 
    return false; 
    }
    }
   </script>
  <title>ระบบการถอนเงิน</title>
  <meta http-equiv=Content-Type content="text/html; charset=UTf-8">
   </head>
   <body> 
   <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "balance";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT atm_id, balance, limited, credit FROM balance";
$result = mysqli_query($conn, $sql);

?>
   <br><center><h3>ระบบการถอนเงิน</h3><br>
    <form name="wd" method="post" onsubmit="return validateForm()" action=<?php $_PHP_SELF ?>>
                  <table width="400" border="0" cellspacing="1" cellpadding="2">
                  
                     <tr>
                        <td width="300">รหัส ATM</td>
						<?PHP
						if (mysqli_num_rows($result) > 0) {
                            // output data of each row
							?><td><select name="atm_id">
							<?PHP
                        while($row = mysqli_fetch_assoc($result)) {
						echo "<option value=". $row["atm_id"]. ">". $row["atm_id"]."</option>";
							}	
					      echo "</select></td>";
					 }
                     else {
                         echo "0 results";
                     }
							?>
                     </tr>                 
                     <tr>
                        <td width="300">จำนวนเงินที่ต้องการถอน</td>
                        <td><input name="withdrawal" type="text" id="withdrawal"></td>
                     </tr>
                 
                     <tr>
                        <td width="100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width="100"> </td>
                        <td>
                           <input name="check_granted" type="submit" id="check_granted" value="ถอน">
                        </td>
                     </tr>
                  
                  </table>
               </form>
 <?PHP
 if(isset($_POST['check_granted']))
         {
			 $sql = "SELECT atm_id, balance, limited, credit FROM balance WHERE atm_id=".$_POST['atm_id'];
             $result = mysqli_query($conn, $sql);
			 $row = mysqli_fetch_array($result);
			 $withdrawal = $_POST['withdrawal'];
			 $balance = $row["balance"];
			 $limited = $row["limited"];
			if ($withdrawal < $balance && $withdrawal < $limited)
			 {
               $net_account = $balance - $withdrawal;
				echo "กรุณารับเงินจำนวน ".$_POST['withdrawal'] ." บาท และเงินในบัญชีคงเหลือ" .$net_account." บาท";
			 }
			else if ($row["credit"] == "Yes" && $withdrawal < $limited)
				echo "คุณใช้เครดิต กรุณาชำระตามกำหนดจำนวนเงินเท่ากับ  ".$_POST['withdrawal']." บาท";
			else
				echo "ถอนไม่ได้ค่ะ ขอบคุณที่ใช้บริการ";
		 }
		          mysqli_close($conn);
?>
</center>
   </body></html>
