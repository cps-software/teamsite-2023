/* ===================================================
 * NCA Magellan JavaScript file
 * ===================================================
 * Copyright 2013 Chuck Sylvester
 * =================================================== */

// Popover messages for New Case and Edit Case forms
jQuery(function()
{
	jQuery("#tooltip-user-id").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The user id of the current case owner. Initial value is the case creator.'});

	jQuery("#tooltip-station").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The station number of the current case owner. Initial value is station number of the case creator.'});

	$("#tooltip-case-id").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'Unique identifier for each case. Value is auto-generated.'});

	$("#tooltip-case-status").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The current status of the selected case. Values include New, Approved, Denied, etc.'});

	$("#tooltip-contact-date").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The date of initial contact to NCA. Also represents the case creation date.'});

	$("#tooltip-contact-time").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The time of initial contact to NCA. Also represents the case creation time.'});

	$("#tooltip-dec-first-name").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top',  content:'The first name of decedent.'});

	$("#tooltip-dec-middle-name").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The middle name of decedent.'});

	$("#tooltip-dec-last-name").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The last name of decedent.'});

	$("#tooltip-dec-suffix").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The name suffix of decedent, e.g., Jr, Sr, III.'});

});

// Popover messages for Edit Veteran form
$(function ()
{
	$("#tooltip-vet-user-id").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The ID of the user who created this veteran record.'});

	$("#tooltip-vet-station").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The Station Number of the user who created this veteran record.'});

	$("#tooltip-vet-veteran-id").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The unique ID for the selected veteran record.'});

	$("#tooltip-vet-veteran-status").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The current status of the selected veteran record.'});

	$("#tooltip-vet-create-date").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The date that the veteran record was created.'});

	$("#tooltip-vet-create-time").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The time that the veteran record was created.'});

	$("#tooltip-vet-firstname").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The first name of veteran.'});

	$("#tooltip-vet-middlename").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The middle name of veteran.'});
	
	$("#tooltip-vet-lastname").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The last name of veteran.'});

	$("#tooltip-vet-suffix").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The name suffix of veteran, e.g., Jr, Sr, III.'});

	$("#tooltip-vet-mvi").popover({delay: {show: 750, hide: 100}, trigger:'hover', placement:'top', content:'The VA correlated ID of veteran.'});

});