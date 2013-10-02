
function change(e)
{
	
	document.getElementById('jjj').style.display='none';
		document.getElementById('cprofile').style.display='none';
		document.getElementById('seek').style.display='none';	
		document.getElementById('cjprofile').style.display='none';	
		document.getElementById('time-period').style.display='none';	
			document.getElementById('school').style.display='none';	
		document.getElementById('Dates').style.display='none';
			document.getElementById('check-box').style.display='none';	
	if(e==1)
	{
		document.getElementById('jjj').style.display='block';
		document.getElementById('cprofile').style.display='block';
		document.getElementById('check-box').style.display='block';	

	}
	else if(e==2)
	{
		document.getElementById('seek').style.display='inline';	
		document.getElementById('cjprofile').style.display='block';	
		document.getElementById('time-period').style.display='block';
		document.getElementById('check-box').style.display='block';	
	}
	else if(e==3)
	{
		document.getElementById('school').style.display='block';	
		document.getElementById('Dates').style.display='block';	

	
	}
}