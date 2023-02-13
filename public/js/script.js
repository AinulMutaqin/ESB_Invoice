$(function() {
	$('.buttonAdd').on('click', function() {
		$('#titleModalLabel').html('Add New Invoice');
		$('.modal-footer button[type=submit]').html('Add');
	});

	$('.showModalEdit').on('click', function() {
		$('#titleModalLabel').html('Edit Invoice');
		$('.modal-footer button[type=submit]').html('Edit');
		$('.modal-body form').attr('action', 'http://localhost/invoice-app/public/invoice/edit')

		const id = $(this).data('id');
		
		$.ajax({
			url: 'http://localhost/invoice-app/public/invoice/getedit',
			data: {id: id},
			method: 'POST',
			dataType: 'JSON',
			success: function(data) {
				console.log(data);
				$('#id').val(data.id);
				$('#invoice_id').val(data.invoice_id);
				$('#issue_date').val(data.issue_date);
				$('#due_date').val(data.due_date);
				$('#subject').val(data.subject);
			}
		});
	});
});