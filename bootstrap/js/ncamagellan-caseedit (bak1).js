/* ===================================================
 * NCA Magellan JavaScript file
 * ===================================================
 * Copyright 2013 Chuck Sylvester
 * =================================================== */

$(document).ready(function()
{
	$('#dec-birth-date').datepicker();
	$('#dec-death-date').datepicker();

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
			$('.decedent-ssn-error').show();
		}
		else
		{
			$('.decedent-ssn-error').hide();
		}
		
		if(errorCount)
		{
			$('.submit-error').show();		
			event.preventDefault();			
		}


	$('#dec-birth-date').blur(function()
	{
		var bdate1 = $('#dec-birth-date').val();
		var bd = new Date(bdate1);

		var year = bd.getFullYear();
		var month = bd.getMonth() + 1;
		var day = bd.getDate();
		
		var bdate2 = year + "-" + month + "-" + day;

		$('#decedent-birth-date').val(bdate2);
	});


		
	});
});

$(document).ready(function()
{
	$('#dec-birth-date').datepicker();
	$('#dec-death-date').datepicker();
});

// Convert BIRTH DATE Entered on New Case form to mySQL date format
$(function()
{
	$('#dec-birth-date').blur(function()
	{
		var bdate1 = $('#dec-birth-date').val();
		var bd = new Date(bdate1);

		var year = bd.getFullYear();
		var month = bd.getMonth() + 1;
		var day = bd.getDate();
		
		var bdate2 = year + "-" + month + "-" + day;

		$('#decedent-birth-date').val(bdate2);
	});
});

// Convert DEATH DATE Entered on New Case form to mySQL date format
$(function()
{
	$('#dec-death-date').blur(function()
	{
		var ddate1 = $('#dec-death-date').val();
		var dd = new Date(ddate1);

		var year = dd.getFullYear();
		var month = dd.getMonth() + 1;
		var day = dd.getDate();
		
		var ddate2 = year + "-" + month + "-" + day;

		$('#decedent-death-date').val(ddate2);
	});
});