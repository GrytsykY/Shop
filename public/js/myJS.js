$(document).ready(function () {
	jQuery(function ($) {
		//alert('es');
		//$("#date").mask("99/99/9999");
		$("#phone").mask("+38(999) 999-99-99");
		$("#tin").mask("99-9999999");
		$("#ssn").mask("999-99-9999");

	});

	$('#delete').click(function () {
		var res = confirm('Подтвердите действия!');
		if (!res) return false;
	});
});