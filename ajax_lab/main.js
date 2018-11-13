$('form.ajax').on('submit', function() {
	
	var 	that = $(this),
		url = that.attr('mehtod'),
		method = that.attr('type'),
		data = {};

	that.find('[name]').each(function() {
		var 	that = $(this),
			name = that.attr('name'),
			value = that.val();
		data[name] = value;
	});

	$.ajax({
		url: url,
		type: type,
		data: data,
		success: function(response){

		}
	});

	return false;
});