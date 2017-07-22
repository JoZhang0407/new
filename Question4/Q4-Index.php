<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<script type="text/javascript">

function validate_required(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {alert(alerttxt);return false}
  else {return true}
  }
}

function validate_form(thisform)
{
with (thisform)
  {
  if (validate_required(address,"Address must be filled out!")==false)
    {address.focus();return false}
  }
}
</script>



<body>
<form action="Order-result.php" method="get" onsubmit="return validate_form(this)">
<table align="center">
<tr>
<th>Item</th>
<th>Quantity</th>
</tr>
<br>
<tr>
<td>Tires</td>
<td><input type="text" name="tires"></td>
</tr>
<br>
<tr>
<td>Oil</td>
<td><input type="text" name="oil"></td>
</tr>
<br>
<tr>
<td>Spark Plugs</td>
<td><input type="text" name="sp"></td>
</tr>
<br>
<tr>
<td>Shipping Address</td>
<td><input type="text" name="address" id="address"  method="post"></td>
</tr>
<br>
<tr>
<td></td>
<td>
<input type="submit" name="sub" value="Submit Order">
</td>
</tr>
</table>
</form>
</body>
</html>
