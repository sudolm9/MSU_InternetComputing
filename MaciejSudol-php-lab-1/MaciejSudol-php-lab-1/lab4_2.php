<html>
<head>
<title>Coffee House Order Form</title>
</style>
</head>
<body>
<?php
    if(isset($_POST["submit"]))
    {
       //retrieve all the value from shipping form
        $price=$_POST["price"];
       $qty=$_POST["qty"];
       $discount=$_POST["discount"];
       $tax=$_POST["tax"];
       $method=$_POST["method"];
       $noOfPayment=$_POST["noOfPayment"];

       $totalPrice = (($qty * $price)+ $method); //calculate the total price
       $totalTax = ($totalPrice * $tax)/100; //calculate the tax percent
       $totalPrice = $totalPrice + $totalTax; //add the total price and tax
       $afterDiscount = $totalPrice - $discount; //discount the amount with the total price1
       $divideNoOfPayment = $afterDiscount/$noOfPayment; //divide the amount in monthly
       //display all the value with proper sentence
       echo "You have selected to purchase:<br>";
       echo $qty." widget(s) at<br>";
       echo "$".$price ." price each plus a<br>";
       echo "$".$method ." shipping cost and a<br>";
       echo $tax ." percent tax rate.<br>";
       echo "After your $".$discount ." discount, the total price cost is $".$afterDiscount."<br>";
       echo "Divide over ".$noOfPayment ." monthly payments, that would be $".$divideNoOfPayment."<br>";
   }
   else
   {
       echo "Error....try again.";
   }
?>
<body>
</html>
