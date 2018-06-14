<!DOCTYPE html>
<html>
<head>
  <title>Commission</title>
  <link href="demo.css" media="all" rel="stylesheet" type="text/css">
</head>

<script>

function checkvalue() {
  var L = document.getElementById("Locks").value;
  var S= document.getElementById("Stocks").value; 
  var B= document.getElementById("Barrels").value; 

  var L1= parseInt(document.forms["commision_form"]["Locks"].value); 
  var S1= parseInt(document.forms["commision_form"]["Stocks"].value); 
  var B1= parseInt(document.forms["commision_form"]["Barrels"].value); 

  if (L ==null || L=="" || isNaN(document.forms["commision_form"]["Locks"].value) || L1<1 || L1>=70) 
    { 
	  alert("Locks is out of range");
	}
  else if (S==null || S=="" || isNaN(document.forms["commision_form"]["Stocks"].value) || S1<1 || S1>=80) 
    alert("Stocks is out of range");
  else if (B == null || B=="" || isNaN(document.forms["commision_form"]["Barrels"].value) || B1<1 || B1>=90) 
    alert("Barrels is out of range");
}
</script>


<body>
  <div id="container">
    <h1>Commission Problem</h1>
      <p>Please enter integers of Lock,Stock,Barrel and click submit.</p>
      <form name="commision_form" method="POST" <?php $_PHP_SELF ?>>
        <table>
          <tr>
            <td><label for="Locks">Locks:</label></td>
            <td><input id="Locks" input name="Locks" size="30" type="text"></td>
          </tr>
          <tr>
            <td><label for="Stocks">Stocks:</label></td>
            <td><input id="Stocks" <input name="Stocks" size="30" type="text"></td>
          </tr>
		   <tr>
            <td><label for="Barrels">Barrels:</label></td>
            <td><input id="Barrels" input name="Barrels" size="30" type="text"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input id="check_button" type="submit" value="Submit" onclick="checkvalue()"></td>
          </tr>
        </table>
      </form>
  </div>
 
<center><h1>Result</h1>
Commission is: 
<table id="result">
<td>
<?PHP
$Locks = $_POST['Locks'];
$Stocks = $_POST['Stocks'];
$Barrels = $_POST['Barrels'];
$lockPrice=45.0;
$stockPrice=30.0;
$barrelPrice=25.0;
$totalLocks=0;
$totalStocks=0;
$totalBarrels=0;


$lockSales = $lockPrice*$Locks;
$stockSales = $stockPrice*$Stocks;
$barrelSales = $barrelPrice*$Barrels;
$sales = $lockSales+$stockSales+$barrelSales;

	if ($sales > 1800){
	$commission = (0.10*1000) + (0.15*800);
	$commission = $commission + (0.20*($sales-1800));
	}
		elseif ($sales > 1000){
		$commission = 0.10*1000;
		$commission = $commission + (0.15*($sales-1000));
		}
			else {
			$commission = 0.10*$sales;
			}
echo $commission;
?>
</td></table>
</center>
</body>
</html>
