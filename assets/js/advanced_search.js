
function adv_show(){
	// $("#advs").show();
	document.getElementById('advs').style.display = 'block';
}

function adv_hide(){
	// $('#advs').show();
	document.getElementById('advs').style.display = 'none';
	document.getElementById('indi').style.background = "transparent url('/Project/assets/img/advanced.png') no-repeat -7 -419px";
}

function adv(){

	s  = document.getElementById('advs');

	if(s.style.display === 'none'){
		s.style.display = 'block';
		document.getElementById('indi').style.background = "transparent url('/Project/assets/img/advanced.png') no-repeat 0 -419px";
	}
	else{
		s.style.display = 'none';
		document.getElementById('indi').style.background = "transparent url('/Project/assets/img/advanced.png') no-repeat -7 -419px";
	}
}

function check_fields(){
	var check = true;
	var val1 = document.forms['peopleSearchForm']['keywords'].value;
	var val2 = document.forms['peopleSearchForm']['firstName'].value;
	var val3 = document.forms['peopleSearchForm']['lastName'].value;
	var val4 = document.forms['peopleSearchForm']['countryCode'].value;
	var val5 = document.forms['peopleSearchForm']['company'].value;

	if(val1 == "" && val2 == "" && val3 == "" && val4 == "" && val5 == ""){
		check = false;
	}
	
	return check;
}

$(function(){
	if($('#apc').val() != "0"){
		s  = document.getElementById('advs');
		s.style.display = 'none';
		document.getElementById('indi').style.background = "transparent url('/Project/assets/img/advanced.png') no-repeat -7 -419px";
	}
	else{
		s  = document.getElementById('advs');
		s.style.display = 'block';
		document.getElementById('indi').style.background = "transparent url('/Project/assets/img/advanced.png') no-repeat 0 -419px";
	}
});