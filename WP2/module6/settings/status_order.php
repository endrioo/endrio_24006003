<?php
if($row['status_order']=='0')
	echo "Waiting for Payment Confirmation";
else if($row['status_order']=='1')
	echo "Payment Confirmed";
else if($row['status_order']=='2')
	echo "On Delivery";
else if($row['status_order']=='3')
	echo "Accepted";
?>
