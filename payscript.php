
 <?php
$apikey = "rzp_test_eWPa37jb84GK8R";
?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<form action="" method="POST" style="text-align:center; padding:auto; padding-top:300px; ">
<script
  src="https://checkout.razorpay.com/v1/checkout.js"
  data-key="<?php echo $apikey; ?>"
  data-amount="<?php echo $_POST['amount'] * 100; ?>"
  data-currency="INR"
  data-id="<?php echo 'OID' . rand(10, 100) . "END"; ?>"
  data-buttontext="Pay with Razorpay"
  data-name="Pranav Vishwakarma"
  data-description="Web Development!"
  data-image="https://traidev.com/img/web-desgin-development.png"
  data-prefill.name="<?php echo $_POST['name']; ?>"
  data-prefill.email="<?php echo $_POST['email']; ?>"
  data-prefill.contact="<?php echo $_POST['mobile']; ?>"
  data-theme.color="#F37254"
>
</script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

