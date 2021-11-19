<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stripe Payment Gateway</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="kMwtBnpgXNJQjuzNykoJDq5XMA5GYRbSCg9CeyG4">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <style type="text/css">
        body {
            margin: 0px;
            padding: 0px;
            font-family: 'Poppins';
        }
        
        .section-1 {
            background: url("{{URL::to('/')}}/public/image1.jpg");
            background-repeat: no-repeat;
            height: 600px;
            background-size: cover;
        }
        
        .section-3 img {
            width: 100%;
            padding: 240px 15px 0px 60px;
        }
        
        .section-2 h2 {
            font-size: 34px;
            font-weight: 600;
            font-family: 'Poppins';
            padding: 0px 0px 100px 200px;
        }
        
        .section-2 {
            padding: 100px 0px 0px 0px;
        }
        
        .input-container {
            display: -ms-flexbox;
            display: block;
            width: 70%;
        }
        
        .icon {
            padding: 10px;
            background: dodgerblue;
            color: white;
            min-width: 50px;
            text-align: center;
        }
        
        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
        }
        
        input.input-field {
            border: none;
            border-bottom: 1px solid #000;
            font-size: 13px;
            color: black;
            font-weight: 500;
            font-family: 'Poppins';
            padding-left: 35px;
            background: none;
            border: none;
        }
        
        i.fa.fa-credit-card {
            margin: auto;
        }
        
        .btn {
            background-color: #294258;
            color: white;
            padding: 15px 20px;
            border: none;
            width: 85%;
            text-align: center !important;
            display: block;
            margin: auto;
            border-radius: 10px;
            font-size: 22px;
            font-family: 'Poppins';
            font-weight: 600;
            margin-top: 50px;
        }
        
        .btn:hover {
            color: white;
        }
        
        .section-4 img {
            padding-top: 115px;
        }
        
        .all-fields {
            position: relative;
            display: block;
            border-bottom: 1px solid #000;
        }
        
        .input-container {
            display: -ms-flexbox;
            display: block;
            width: 57%;
            position: relative;
            outline: none;
        }
        
        .input-container3 {
            position: absolute;
            right: 0px;
            top: 0px;
            outline: none;
        }
        
        .input-container i {
            position: absolute;
            left: 10px;
            top: 10px;
            outline: none;
        }
        
        .input-container3 input {
            width: 60px;
            background: none;
            border: none;
            text-align: center;
            outline: none;
        }
        
        .input-container2 {
            position: absolute;
            right: 70px;
            top: 0px;
            outline: none;
        }
        
        .input-container2 input {
            background: none;
            border: none;
            width: 115px;
            outline: none;
        }
        
        input[type="date"]::-webkit-inner-spin-button,
        input[type="date"]::-webkit-calendar-picker-indicator {
            display: none;
            -webkit-appearance: none;
        }
    </style>

</head>
<body>

<section>
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="section-1">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-3">
                                    <img src="{{URL::to('/')}}/public//image2.png" width="100%">
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="section-2">
                                    <h2> Your Payment Details </h2>
                                    <form id="payment-form" style="max-width:400px;margin:auto">
                                    @csrf
                                    <input type="hidden" name="amount" value="{{$amount}}">
                                  <input type="hidden" name="orderId" value="{{$id}}">
                                        <div class="all-fields">
                                        <div id="card-element"></div>
                                        </div>
                                        <div id="pybtn">
                                        <button type="submit" class="btn"> Pay Now ${{$amount}}</button>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="section-4">
                                                <img src="{{URL::to('/')}}/public/image3.png" width="100%">
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                        </div>
                                        <div class="col-md-3">
                                            <div class="section-4">
                                                <img src="{{URL::to('/')}}/public/image4.png" width="100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
  <script src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript">

      var Urlget;
      var type = {{$type}};

      if (type==1) {
        Urlget = "{{URL::to('/cart/checkout/order/confirmation/'.$id)}}";
      } else if (type==2) {
        Urlget = "{{URL::to('/portrait/checkout/order/confirmation/'.$id)}}";
      }

        var url = "{{route('payment.stripe.charge')}}";
        var stripe = Stripe("{{env('STRIPE_API_KEY')}}");
        var form = document.getElementById('payment-form');

        var element = stripe.elements();
        var cardElement = element.create('card');
        cardElement.mount('#card-element');


       console.log('Registering Form submit handling....');
        form.addEventListener('submit', function(e){
            e.preventDefault();
document.getElementById("pybtn").innerHTML = "<img src='https://static.tildacdn.com/tild3637-3962-4434-b061-613661376165/loader.gif' width='150px' style='margin-top:30px;margin-left:100px;' />";
            console.log('Createing Payment intent');
            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type' : 'application/json',
                },
                body: JSON.stringify({_token: '{{csrf_token()}}', orderId: '{{$id}}', amount: '{{$amount}}',}),
            })
            .then((response) => response.json())
            .then((data) => {

                console.log('Created payment intent: '+data.client_secret);
                stripe.confirmCardPayment(
                    data.client_secret, {
                        payment_method: {
                            card: cardElement,
                        }
                    }
                )
                .then(function(result){
                    if(result.error){
                        document.getElementById("pybtn").innerHTML = '<div class="alert alert-danger"><strong>Error.!</strong> Payment Intents Confirmation failed.</div>';
                        console.log(result.error.message);
                    }else{
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("pybtn").innerHTML = '<div class="alert alert-success"><strong>Payment Successful!</strong></div>';
                                setTimeout(function(){
                                    window.location.href = "{{URL::to('/')}}";
                                }, 200)
                                console.log(JSON.stringify(result, null, 2));
                            }else{
                            }
                        };
                        xhttp.open("GET", Urlget,true);
                        xhttp.send();

                    }
                })
            })
            .catch((error) => {

            });
        });
    </script>
</body>
</html>













