function drawCustomicheck(thisObj) {
	
	if (thisObj.attr('type') == 'checkbox') {
	
		if (thisObj.is(':checked')) {
			
			thisObj.parent().addClass('custom-i-checked');
		} else {
			
			thisObj.parent().removeClass('custom-i-checked');
		}
	} else if (thisObj.attr('type') == 'radio') {
		
		var name = thisObj.attr('name');
		var inputs = $('input[name=' + name + ']');
		
		inputs.each(function() {
			
			if ($(this).is(':checked')) {
				
				$(this).parent().addClass('custom-i-checked');
			} else {
				
				$(this).parent().removeClass('custom-i-checked');
			}
		});
	}
}

var inputs = $('input[type=checkbox], input[type=radio]');

inputs.each(function() {
	
	$(this).wrap('<div class="custom-i-check custom-i-' + $(this).attr("type") + '"></div>');
	$(this).before('<span class="fa fa-check"></span>');
	
	drawCustomicheck($(this));
});

inputs.on('change', function() {
	
	drawCustomicheck($(this));
});
