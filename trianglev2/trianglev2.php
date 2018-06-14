<!DOCTYPE html>
<html>
<head>
  <title>Triangle</title>
  <link href="demo.css" media="all" rel="stylesheet" type="text/css">
</head>

<script>
function checkvalue() {
	 
  var a= parseInt(document.forms["triangle_form"]["sideA"].value); 
  var b= parseInt(document.forms["triangle_form"]["sideB"].value); 
  var c= parseInt(document.forms["triangle_form"]["sideC"].value); 
  
  if (a==null || a=="" || isNaN(document.forms["triangle_form"]["sideA"].value) || a<1) 
    alert("a is out of range");
  else if (b==null || a=="" || isNaN(document.forms["triangle_form"]["sideB"].value) || b<1) 
    alert("b is out of range");
  else if (c==null || a=="" || isNaN(document.forms["triangle_form"]["sideC"].value) || c<1) 
    alert("c is out of range");
}
</script>


<body>
  <div id="container">
    <h1>Triangle Program</h1>
      <p>Please enter integers which are sides of a triangle and click submit.</p>
      <form name="triangle_form" action="checktriangle.php" method="POST">
        <table>
          <tr>
            <td><label for="side_A">Side A:</label></td>
            <td><input name="sideA" size="30" type="text"></td>
          </tr>
          <tr>
            <td><label for="side_B">Side B:</label></td>
            <td><input name="sideB" size="30" type="text"></td>
          </tr>
		   <tr>
            <td><label for="side_C">Side C:</label></td>
            <td><input name="sideC" size="30" type="text"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input id="check_button" type="submit" value="Submit" onclick="checkvalue()"></td>
          </tr>
        </table>
      </form>
  </div>
</body>
</html>
