<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
var site_url = '<?=SITE_URL?>';
</script>
<button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
$('#rzp-button1').click(function(e){
    e.preventDefault();
    $.ajax({
        url: site_url+"payment/pay",
        type: "POST",
        data: {},
        dataType: "json",
        success: function(res) {
            payment_checkout(res.amount, res.currency, res.name, res.desc, res.logo);
            
        }
    }); 
});

function payment_checkout(amount, currency, name, desc, logo){
    var options = {
        "key": "rzp_test_rCHpw27h9tecJY",
        "amount": amount,
        "currency": currency!=''?currency:"USD",
        "name": name,
        "description": desc,
        "image": logo,
        "order_id": "",
        "handler": function (response){
            alert(response.razorpay_payment_id);
        },
        // "prefill": {
        //     "name": "Gaurav Kumar",
        //     "email": "gaurav.kumar@example.com",
        //     "contact": "9999999999"
        // },
        // "notes": {
        //     "address": "note value"
        // },
        "theme": {
            "color": "#5768f3"
        }
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
}

</script>
