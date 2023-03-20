/* ===================================================
 * NCA Magellan JavaScript file
 * ===================================================
 * Copyright 2013 Chuck Sylvester
 * =================================================== */

$(document).ready(function()
{
// Create standard date picker dialog
	$('#dec-birth-date').datepicker();
	$('#dec-death-date').datepicker();

// On Form Submit, verify required fields have value
	$('.submit-error').hide();
	$('.decedent-fname-error').hide();
	$('.decedent-lname-error').hide();
	$('.decedent-ssn-error').hide();
	
	$('#submit').click(function(event)
	{
		var data1=$('#decedent-fname').val();
		var len1=data1.length;

		var data2=$('#decedent-lname').val();
		var len2=data2.length;

		var data3=$('#decedent-ssn').val();
		var len3=data3.length;

		var errorCount = 0;
		
		if(len1<1)
		{
			++errorCount;
			$('.decedent-fname-error').show();
		}
		else
		{
			$('.decedent-fname-error').hide();
		}

		if(len2<1)
		{
			++errorCount;
			$('.decedent-lname-error').show();
		}
		else
		{
			$('.decedent-lname-error').hide();
		}

		if(len3<1)
		{
			++errorCount;
			$('.decedent-ssn-error').text("*Required*");
			$('.decedent-ssn-error').show();
		}
		else
		{
			$('.decedent-ssn-error').hide();
		}
		
// Verify Decedent SSN prior to submit
		var decssn = document.getElementById("decedent-ssn").value;
		var pattern = /^\d{3}-\d{2}-\d{4}$/;

		if (!decssn || decssn.match(pattern))
		{
// 		ok
		}
		else
		{
			++errorCount;
			$('.decedent-ssn-error').text("*Invalid Format*");
			$('.decedent-ssn-error').show();
		}

		if(errorCount)
		{
			$('.submit-error').show();		
			event.preventDefault();			
		}

	});
	
// Convert BIRTH DATE Entered on New Case form to mySQL date format
	$('#submit').click(function(event)
	{
		var bdate1 = $('#dec-birth-date').val();
		var bd = new Date(bdate1);

		var byear = bd.getFullYear();
		var bmonth = bd.getMonth() + 1;
		var bday = bd.getDate();
		
		var bdate2 = byear + "-" + bmonth + "-" + bday;

		$('#decedent-birth-date').val(bdate2);
	});

// Convert DEATH DATE Entered on New Case form to mySQL date format
	$('#submit').click(function(event)
	{
		var ddate1 = $('#dec-death-date').val();
		var dd = new Date(ddate1);

		var dyear = dd.getFullYear();
		var dmonth = dd.getMonth() + 1;
		var dday = dd.getDate();
		
		var ddate2 = dyear + "-" + dmonth + "-" + dday;

		$('#decedent-death-date').val(ddate2);
	});
});