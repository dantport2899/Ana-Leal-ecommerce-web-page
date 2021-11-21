<?php 
include('../fun/connect_db.php');
define("KEY","analeal");
define("COD","AES-128-ECB");
?>

<div id="paypal-button-container"></div>
<div id="paypal-button"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
paypal.Button.render({
  env: '<?php echo PayPalENV; ?>',
  client: {
    <?php if(ProPayPal) { ?>  
    production: '<?php echo PayPalClientId; ?>'
    <?php } else { ?>
    sandbox: '<?php echo PayPalClientId; ?>'
    <?php } ?>  
  },
  payment: function (data, actions) {
    return actions.payment.create({
      transactions: [{
        amount: {
          total: '<?php echo $productPrice; ?>',
          currency: '<?php echo $currency; ?>'
        },
        description: "Compra de productos a Vestidos Ana Leal: $<?php echo $total;?>",
        custom: "<?php echo $SID;?>#<?php echo openssl_encrypt($ultimoID,COD,KEY);?>"
      }]
    });
  },
  onAuthorize: function (data, actions) {
    return actions.payment.execute()
      .then(function () {
        console.log(data);
        window.location="../fun/verificador.php?paymentToken="+data.paymentToken+"&paymentID="+data.paymentID;
      });
  }
}, '#paypal-button');
</script>

