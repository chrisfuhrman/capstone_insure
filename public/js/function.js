
	$(document).ready(function() {

		function swapRadio(event)
		{

		    var idName = $(this).attr('id'),
		    id = $('#'+idName),
		    classNames = id.attr('class');

		    var isHilighted = (classNames.search('btn-info') != -1) ? true : false;

		    if(idName == event.data.item2) {
		        var otherBtn = event.data.item1;
		        otherBtn = $('#' + otherBtn);

		    } else {
		        var otherBtn = event.data.item2;
		        otherBtn = $('#' + otherBtn);
		    }

		    if(!isHilighted) {
		        id.removeClass('btn-default').addClass('btn-info');
		        id.children().prop('checked', true);
		        otherBtn.children().prop('checked', false);
		        otherBtn.removeClass('btn-info').addClass('btn-default');
		    }
		}

	});	

