
function swap(){
	document.getElementById('loading').style.display = 'none'
	document.getElementById('body').style.display = 'block'
}

function wait(){
	setTimeout ( "swap()", 2000 );
}