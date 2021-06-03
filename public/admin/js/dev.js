$(document).ready(function(){
	'use strict'
	var host = $("meta[name='host']").attr("content");

	//Settings

		//Accommodation

			//Property Type
				$(document).on('click', '.editType', function(){
					var id = $(this).data('id');
					$('#editType-modal').modal('show');
					$('#editType_content').html('<br><br><br><div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div><br><br><br>');
					
					$.get( host+"/settings/accommodation/editPropertyType/"+id, function( data ) {
					  $('#editType_content').html(data);
					});
				});

				$(document).on('click', '.deleteType', function(){
					var id = $(this).data('id');
					
					if(confirm('Are you sure want to delete this.?')){
						window.location.href = host+"/settings/accommodation/deletePropertyType/"+id;
					}
				});

			//Amenities
				$(document).on('click', '.editAmenity', function(){
					var id = $(this).data('id');
					$('#editAmenity-modal').modal('show');
					$('#editAmenity_content').html('<br><br><br><div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div><br><br><br>');
					
					$.get( host+"/settings/accommodation/editAmenities/"+id, function( data ) {
					  $('#editAmenity_content').html(data);
					});
				});

				$(document).on('click', '.deleteAmenity', function(){
					var id = $(this).data('id');
					
					if(confirm('Are you sure want to delete this.?')){
						window.location.href = host+"/settings/accommodation/deleteAmenities/"+id;
					}
				});


	//Members

		//Approve
			$(document).on('click', '.memberApprove', function(){
				var id = $(this).data('id');
				
				if(confirm('Are you sure want to approve this.?')){
					window.location.href = host+"/accommodation/members/approve/"+id;
				}
			});

		//Reject
			$(document).on('click', '.memberReject', function(){
				var id = $(this).data('id');
				
				if(confirm('Are you sure want to reject this.?')){
					window.location.href = host+"/accommodation/members/reject/"+id;
				}
			});

		//Block
			$(document).on('click', '.memberBlock', function(){
				var id = $(this).data('id');
				
				if(confirm('Are you sure want to Block this.?')){
					window.location.href = host+"/accommodation/members/block/"+id;
				}
			});
});