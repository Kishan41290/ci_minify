<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4 rzp-button1" id="0">
                    <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Purchase</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4 rzp-button1" id="1">
                    <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Purchase</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$10</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4 rzp-button1" id="2">
                    <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Purchase</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$15</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4 rzp-button1" id="3">
                    <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Purchase</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$20</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
        <div>
    </div>
</div>








<script>
var site_url = '<?=SITE_URL?>';
</script>
<!-- <button id="0" class="rzp-button1">Pay 5</button>
<button id="1" class="rzp-button1">Pay 10</button>
<button id="2" class="rzp-button1">Pay 15</button>
<button id="3" class="rzp-button1">Pay 20</button> -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
$('.rzp-button1').click(function(e){
    e.preventDefault();
    var id = $(this).attr('id');
    $.ajax({
        url: site_url+"payment/pay",
        type: "POST",
        data: {btn_id: id},
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
