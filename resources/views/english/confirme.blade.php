<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
  .rtl{
    direction: rtl
  }
  *{
text-align: start
  }
  .payment-form{
	padding-bottom: 50px;
	font-family: 'Montserrat', sans-serif;
}

.payment-form.dark{
	background-color: #f6f6f6;
}

.payment-form .content{
	box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
	background-color: white;
}

.payment-form .block-heading{
    padding-top: 50px;
    margin-bottom: 40px;
    text-align: center;
}

.payment-form .block-heading p{
	text-align: center;
	max-width: 420px;
	margin: auto;
	opacity:0.7;
}

.payment-form.dark .block-heading p{
	opacity:0.8;
}

.payment-form .block-heading h1,
.payment-form .block-heading h2,
.payment-form .block-heading h3 {
	margin-bottom:1.2rem;
	color: #725aa6;
}

.payment-form form{
	border-top: 2px solid #725aa6;
	box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
	background-color: #ffffff;
	padding: 0;
	max-width: 600px;
	margin: auto;
}

.payment-form .title{
	font-size: 1em;
	border-bottom: 1px solid rgba(0,0,0,0.1);
	margin-bottom: 0.8em;
	font-weight: 600;
	padding-bottom: 8px;
}

.payment-form .products{
	background-color: #f7fbff;
    padding: 25px;
}

.payment-form .products .item{
	margin-bottom:1em;
}

.payment-form .products .item-name{
	font-weight:600;
	font-size: 0.9em;
}

.payment-form .products .item-description{
	font-size:0.8em;
	opacity:0.6;
}

.payment-form .products .item p{
	margin-bottom:0.2em;
}

.payment-form .products .price{
	float: right;
	font-weight: 600;
	font-size: 0.9em;
}

.payment-form .products .total{
	border-top: 1px solid rgba(0, 0, 0, 0.1);
	margin-top: 10px;
	padding-top: 19px;
	font-weight: 600;
	line-height: 1;
}

.payment-form .card-details{
	padding: 25px 25px 15px;
}

.payment-form .card-details label{
	font-size: 12px;
	font-weight: 600;
	margin-bottom: 15px;
	color: #79818a;
	text-transform: uppercase;
}

.payment-form .card-details button{
	margin-top: 0.6em;
	padding:12px 0;
	font-weight: 600;
}

.payment-form .date-separator{
 	margin-left: 10px;
    margin-right: 10px;
    margin-top: 5px;
}

@media (min-width: 576px) {
	.payment-form .title {
		font-size: 1.2em;
	}

	.payment-form .products {
		padding: 40px;
  	}

	.payment-form .products .item-name {
		font-size: 1em;
	}

	.payment-form .products .price {
    	font-size: 1em;
	}

  	.payment-form .card-details {
    	padding: 40px 40px 30px;
    }

  	.payment-form .card-details button {
    	margin-top: 2em;
    }
}



.loader {
  display: none;
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
}

.loading {
  border: 2px solid #ccc;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  border-top-color: #725aa6;
  border-left-color: #725aa6;
  animation: spin 1s infinite ease-in;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}


</style>
</head>
<body>
  <main class="page payment-page ">
    <section class="payment-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 style="text-align: center">Booking Confirmation</h2>
                <p>Rent a studio for an exceptional photoshoot session</p>
            </div>

            <form id="reservationForm" method="POST" action="{{ route('en-confirmedOrder') }}">
                @csrf

                @if(session('error'))
                    <div class="alert alert-danger" style="text-align: center">
                        Please fill in all the necessary information.
                    </div>
                @endif

                <div class="products">
                    <h3 class="title d-flex">Reservation</h3>

                    @if($id == "photographeSession")
                        <div class="item">
                            <div class="d-flex" style="justify-content: space-between; flex-direction: row-reverse;">
                                <span class="price">DH 500.00</span>
                                <p class="item-name">Product</p>
                            </div>

                            <p class="item-description" style="text-align: start;">Rent a studio for an exceptional photoshoot session</p>
                        </div>

                        <div class="total d-flex" style="justify-content: space-between;">Total<span class="price">DH 500.00</span></div>

                        <input type="hidden" name="produit" value="photographeSession" hidden>

                    @elseif($id == "videoSession")
                        <div class="item">
                            <div class="d-flex" style="justify-content: space-between; flex-direction: row-reverse;">
                                <span class="price">DH 1,200.00</span>
                                <p class="item-name">Product</p>
                            </div>

                            <p class="item-description" style="text-align: start;">Rent a studio for a unique video shooting session</p>
                        </div>

                        <div class="total d-flex" style="justify-content: space-between;">Total<span class="price">DH 1,200.00</span></div>

                        <input type="hidden" name="produit" value="videoSession" hidden>
                    @endif
                </div>

                <div class="card-details">
                    <h3 class="title">Personal Information</h3>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="name">Full Name</label>
                            <input name="name" required id="name" type="text" class="form-control" placeholder="Person / Company / Agency" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-12">
                            <label for="contact">Phone Number or Email</label>
                            <input name="contact" required id="contact" type="text" class="form-control" placeholder="07.62.53.99.00 or easyeno@media.com" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="dateReservation">Reservation Date</label>
                            <input id="dateReservation" required name="dateReservation" type="date" class="form-control" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="daysNumber">Number of Days</label>
                            <input id="daysNumber" required name="daysNumber" type="number" class="form-control" placeholder="Number of days to book" aria-describedby="basic-addon1">
                        </div>

                        <div class="form-group col-12">
                            <label for="type">Payment Method</label>
                            <select required class="form-control" name="type" id="type">
                                <option value="Virment">Bank Transfer</option>
                                <option value="Direct">Direct Payment</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-12">
                            <a class="btn btn-primary btn-block" id="reservationForm" style="color:white" onclick="spinner()">Confirm</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

<div class="loader">
  <div class="loading">
  </div>
</div>


    <script type="text/javascript">
        function spinner() {
            document.getElementsByClassName("loader")[0].style.display = "block";
            submitFormWithDelay();
        }

        function submitFormWithDelay() {
            setTimeout(function () {
                document.getElementById("reservationForm").submit();
            }, 3000); // 3-second delay (adjust as needed)
        }
    </script>



  </main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
