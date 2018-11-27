<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../../public/img/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/vendors/vendor-request-item/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/fonts/fonts-request-item/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/fonts/fonts-request-item/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/vendors/vendor-request-item/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/vendors/vendor-request-item/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/vendors/vendor-request-item/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/vendors/vendor-request-item/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/vendor-request-item/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/vendors/vendor-request-item/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/css/css-request-item/util.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/css-request-item/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="../../">
				<span class="contact100-form-title">
					Place an Order
				</span>

				<div class="wrap-input100 validate-input bg1" style="text-align:center">
					<span>Your order recieved successfully!!! </span>
					
				</div>
				<div class="container-contact100-form-btn">
                
					<input class="contact100-form-btn" value="Back To Home" style="text-align:center" type="submit">
						
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="../../../public/vendors/vendor-request-item/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../../../public/vendors/vendor-request-item/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../../../public/vendors/vendor-request-item/bootstrap/js/popper.js"></script>
	<script src="../../../public/vendors/vendor-request-item/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../../public/vendors/vendor-request-item/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="../../../public/vendors/vendor-request-item/daterangepicker/moment.min.js"></script>
	<script src="../../../public/vendors/vendor-request-item/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../../../public/vendors/vendor-request-item/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../../../public/vendors/vendor-request-item/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="../../../public/js/js-request-item/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
