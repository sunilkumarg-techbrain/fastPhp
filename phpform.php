<?php     
     define('ROOT','./' );
	 include_once ROOT.'php/dbConnAndIns.php' ;
?>
<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/style.css" />
<script src="js/script.js"></script>

</head>
<body>

<?php
$sapIDErr = $nameErr = $emailErr = $contactNumberErr = "";
$sapID = $name = $email = $contactNumber = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["field1"])) {
    $sapIDErr = "SAP ID is required";
  } else {
    $sapID = test_input($_POST["field1"]);
  }
  
  if (empty($_POST["field2"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["field2"]);
  }
    
  if (empty($_POST["field3"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["field3"]);
  }

  if (empty($_POST["field4"])) {
    $contactNumberErr = "Contact Number is required";
  } else {
    $contactNumber = test_input($_POST["field4"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<h1> <font color=blue> TEX Training Request Form </font></h1>
<p><span class="error">* required field</span></p>
<div class="container">
  <form action="phpform.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" 
       name="Form" >
  <input type="hidden" name="processform" value="1">
    <div class="row">
      <div class="col-25">
        <label for="field"> <font color=blue>Requestor/Delivery SPOC SAP ID:</font>
		<span class="error">* <?php echo $sapIDErr;?></span>
		</label>

      </div>
      <div class="col-75">	  	
        <input type="text" id="field1" name="firstfield" placeholder="Enter SAP ID here ...">
      </div>
    </div>	
    <div class="row">
      <div class="col-25">
        <label for="field"><font color=blue>Requestor/Delivery SPOC Name:</font>
		<span class="error">* <?php echo $nameErr;?></span>
		</label>
      </div>
      <div class="col-75">
        <input type="text" id="field2" name="secondfield" placeholder="Enter Name here ...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="field"><font color=blue>Requestor/Delivery SPOC Email Id:</font>
		<span class="error">* <?php echo $emailErr;?></span>
		</label>
      </div>
      <div class="col-75">
        <input type="text" id="field3" name="thirdfield" placeholder="Enter Email Id here ...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
	    <label for="field"><font color=blue>Contact Number of Requestor:</font>
		<span class="error">* <?php echo $contactNumberErr;?></span>
		</label>

      </div>
      <div class="col-75">
        <input type="text" id="field4" name="fourthfield" placeholder="Enter Contact Number here ...">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
