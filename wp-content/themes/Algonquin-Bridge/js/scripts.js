$(".checkbox").click(function() {
$(".mobile-tel-buttons").slideToggle();
$(this).children('i').toggleClass('fa-phone fa-close');
});

$(function() {
	var expanded = false;
	$('.checkbox').click(function() {
		if (!expanded) {
		    $('.shiftnav-toggle, .checkbox').animate({'top' : '89px'});
		    expanded = true;
		}
		else {
		   $('.shiftnav-toggle, .checkbox').animate({'top' : '0'});
		    expanded = false;
		}
	});
});