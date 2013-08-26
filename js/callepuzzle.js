/*window.addEventListener("load",panel,false);


function panel()
{
	document.getElementById('logo').addEventListener('click', function(ev){

			if($("#puzzle-panel").height()==0)
			{
				document.getElementById('puzzle-panel').style.height="100px";
			}
			else
			{
				document.getElementById('puzzle-panel').style.height=0;
			}
				
		}
		, false);
} */
/*
window.addEventListener("load",function(ev){
	if($('#cd-dropdown-a').css("display")=="none")
	{
			$('#cd-dropdown-mio').toggleClass( 'cd-active' );
	}
}); */

document.getElementById('cd-dropdown-a').addEventListener("click",function(ev){

	var init=2;

	$('#cd-dropdown-mio').toggleClass( 'cd-active' );

	var alturatotal=65*(5+1);

	if($('#cd-dropdown-mio ul').height()==0)
	{
		$('#cd-dropdown-mio ul').height(alturatotal);

		var a=1;
		$('#cd-dropdown-mio ul li').each(function()
		{
			altura=a*65;
			$(this).css('top', altura);
			a++;
		});
	}
	else
	{
		$('#cd-dropdown-mio ul').height(0);
		$('#cd-dropdown-mio ul li').css('top', 0);
	}

	}, false);