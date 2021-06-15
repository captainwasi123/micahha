$(document).ready(function(){
	'use strict'

	//Orders

		$(document).on('click', '.cancelBooking', function(){
			if(confirm('Are you sure want to cancel this?')){
				var id = $(this).data('id');
				var href = $(this).data('href');

				window.location.href = href+'/'+id;
			}
		});
});