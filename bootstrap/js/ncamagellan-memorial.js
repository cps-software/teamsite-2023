/* ===================================================
 * NCA Magellan JavaScript file
 * ===================================================
 * Copyright 2013 Chuck Sylvester
 * =================================================== */

$(document).ready(function()
{
// On Form Submit, verify required fields have value
	$('.submit-error').hide();
	
	$('#submit').click(function(event)
	{
		var errorCount = 0;
			
		if ($("input[name='option-case']:checked").length > 0)
		{
			// radio button checked
		}
		else
		{
			++errorCount;
		}
		
		if(errorCount)
		{
			$('.submit-error').show();		
			event.preventDefault();			
		}

	});
});

// Show Emblem Thumbnail
    	function changeImage(a)
    	{
      	document.getElementById("emblemPreview").src="./image/emblem" + a + ".png";
	    }

// Change Visual Text Name
    	function changeHsTextName(a)
    	{
      	document.getElementById("hs-text-name").innerHTML=a
	    }

// Change Visual Text Line 1
    	function changeHsTextL1(a)
    	{
      	document.getElementById("hs-text-l1").innerHTML=a
	    }

// Change Visual Text Line 2
    	function changeHsTextL2(a)
    	{
      	document.getElementById("hs-text-l2").innerHTML=a
	    }

// Change Visual Text Line 3
    	function changeHsTextL3(a)
    	{
      	document.getElementById("hs-text-l3").innerHTML=a
	    }

// Change Visual Text Line 4
    	function changeHsTextL4(a)
    	{
      	document.getElementById("hs-text-l4").innerHTML=a
	    }

// Change Visual Text Line 5
    	function changeHsTextL5(a)
    	{
      	document.getElementById("hs-text-l5").innerHTML=a
	    }

// Change Visual Text Line 6
    	function changeHsTextL6(a)
    	{
      	document.getElementById("hs-text-l6").innerHTML=a
	    }

// Change Visual Text Line 7
    	function changeHsTextL7(a)
    	{
      	document.getElementById("hs-text-l7").innerHTML=a
	    }
