	<div class="container mt-3">
		<div class="row">
			<div class="col-lg-6">
				<?php Messanger::flash(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<button type="button" class="btn btn-primary buttonAdd" data-toggle="modal" data-target="#formModal">
				  Add Invoice
				</button>
				<br/><br/>
				<h3>List Invoices</h3>
					<ul class="list-group">
						<?php foreach($data['invoices'] as $invoices) : ?>
							<li class="list-group-item">
								<?= $invoices['invoice_id'] ?>
								<a href="<?= BASEURL; ?>/invoice/delete/<?= $invoices['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Really?');">Delete</a>
								<a href="<?= BASEURL; ?>/invoice/edit/<?= $invoices['id']; ?>" class="badge badge-success float-right ml-1 showModalEdit" data-toggle="modal" data-target="#formModal" data-id="<?= $invoices['id']; ?>">Edit</a>
								<a href="<?= BASEURL; ?>/invoice/detail/<?= $invoices['id']; ?>" class="badge badge-primary float-right ml-1">Detail</a>
							</li>
						<?php endforeach; ?>
					</ul>
			</div>
		</div>
	</div>

	<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="titleModalLabel">Add New Invoice</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      <form action="<?= BASEURL; ?>/invoice/add" method="POST">
	      	<input type="hidden" name="id" id="id">
	      	<div class="form-group">
			    <label for="invoice_id">Invoice Id</label>
			    <input type="text" class="form-control" id="invoice_id" name="invoice_id">
			</div>
			<div class="form-group">
			  <label for="issue_date">Issue Date</label>
			  <input class="form-control" placeholder="Select date" type="date" id="issue_date" name="issue_date">
			</div>
			<div class="form-group">
			  <label for="due_date">Due Date</label>
			  <input class="form-control" placeholder="Select date" type="date" id="due_date" name="due_date">
			</div>
			<div class="form-group">
			    <label for="subject">Subject</label>
			    <input type="text" class="form-control" id="subject" name="subject">
			</div>
	      </div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-primary">Save</button>
	      </form>
	      </div>
	    </div>
	  </div>
	</div>