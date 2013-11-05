
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