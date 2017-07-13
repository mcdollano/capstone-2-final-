<script type="text/javascript"> 
		// -------------- LEFT SIDE BAR -------------//	

	//sidebar nav
	function openNav() {
		document.getElementById('mySidenav').style.width = "200px";
		document.getElementById("navbtn").style.visibility = "hidden";
		document.getElementById("body").style.marginLeft = "200px";
		document.getElementById("login").style.visibility = "hidden";
		// document.getElementById("add_new").style.visibility = "hidden";
		document.getElementById("logout").style.visibility = "hidden";
	}
	function closeNav() {
		// document.getElementById("displayname").style.marginLeft = "15%";
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("navbtn").style.visibility = "visible";
		document.getElementById("body").style.marginLeft = "0";
		document.getElementById("login").style.visibility = "visible";
		document.getElementById("add_new").style.visibility = "visible";
		document.getElementById("login").style.visibility = "visible";
		document.getElementById("logout").style.visibility = "visible";		
	}

		// -------------- END OF LEFT SIDE BAR -------------//	

		// -------------- RIGHT SIDE BAR -------------//

		function openNav2() {
		document.getElementById('mySidenav2').style.width = "400px";
		document.getElementById("navbtn").style.visibility = "hidden";
		document.getElementById("body").style.marginRight = "420px";
		document.getElementById("login").style.visibility = "hidden";
		document.getElementById("logout").style.visibility = "hidden";
	}

		function closeNav2() {
		document.getElementById("mySidenav2").style.width = "0";
		document.getElementById("navbtn").style.visibility = "visible";
		document.getElementById("body").style.marginRight = "0";
		document.getElementById("login").style.visibility = "visible";
		document.getElementById("add_new").style.visibility = "visible";
		document.getElementById("logout").style.visibility = "visible";		
	}


		// -------------- END OF RIGHT SIDE BAR -------------//

		// -------------- CHECK OUT  -------------//

		function open_check_out() {

		document.getElementById('mySidenav2').style.width = "100vw";
		document.getElementById("navbtn").style.visibility = "hidden";
		document.getElementById("body").style.marginRight = "100vw";
	}
		// -------------- END OF CHECK OUT  -------------//

		// ************** SHOW CART ********************* //

		function showcart() {
			document.getElementById('addtocart_container').style.visibility = "visible";
			document.getElementById('showcartBtn').style.visibility = 'hidden';
			document.getElementById('cancelcartBtn').style.visibility = 'visible';
		}

		// *********** END OF SHOW CART ************** // 

		// ************** HIDE CART ********************* //

		function hidecart() {
			document.getElementById('addtocart_container').style.visibility = "hidden";
			document.getElementById('cancelcartBtn').style.visibility = "hidden";
			document.getElementById('showcartBtn').style.visibility = 'visible';
		}

		// *********** END OF HIDE CART ************** // 

	//log in / log out button

	function hide_login() {
    	document.getElementById("login").style.visibility = "hidden";
	}

	
$(document).ready(function(){
	$("#hide").click(function(){
		// $(".show_item").show();
		$(".upload_item").show();
		$(".edit_save").show();
		// $(".edit-btn").hide();
		$("#cancel_edit").show();
		// $("#item_hide").hide();
	});

});

$(document).ready(function(){
	$("#cancel_edit").click(function(){
		$(".show_item").hide();
		$(".upload_item").hide();
		$(".edit_save").hide();
		$(".edit-btn").show();
		$("#cancel_edit").hide();
	});
});

/***** CHECK OUT CONTAINER ********/

	$('#checkout').click(function(){
		$('.checkout_info_container').show();
		// $('#mySidenav2').css('padding-left', '5px');
	});

	$('.closebtn2').click(function(){
		$('.checkout_info_container').hide();
		$('#cart_icon').show();
		$('#login_container').show();
		$('#displayname').show();
		$('#cart_badge').show();


	});

	$('.closebtn2').mouseenter(function(){
		$('.closebtn2').html('CONTINUE SHOPPING');
	});

	$('.closebtn2').mouseleave(function(){
		$('.closebtn2').html('YOUR CART');

	});

	$('#cart_icon').click(function(){
		$('#cart_icon').hide();
		$('#login_container').hide();
		$('#displayname').hide();
		$('#cart_badge').hide();
	});

	$('#navbtn').click(function(){
		$('#cart_icon').hide();
		$('#cart_badge').hide();
	});

	$('#nav_close_btn').click(function(){
		$('#cart_icon').show();
		$('#displayname').show();
		$('#cart_badge').show();
	});

	$('#cart_side_bar').click(function(){
		// $('#mySidenav').css('width','0');
	});


	function getSubtotal(){
		var price = document.getElementById("item_price_js").innerHTML;
		var quantity = document.getElementById("item_quantity_js").value;
		var getSub = document.getElementById("getSub");	
		getSub.value = parseInt(quantity) * parseInt(price);	
	}







</script>



