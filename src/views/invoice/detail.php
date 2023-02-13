<div class="container mt-3">
	<div class="card" style="width: 18rem;">
		<div class="card-body">
			<h5 class="card-title"><?= $data['invoices']['invoice_id'] ?></h5>
			<h6 class="card-subtitle mb-2 text-muted"><?= $data['invoices']['issue_date'] ?></h6>
			<h6 class="card-subtitle mb-2 text-muted"><?= $data['invoices']['due_date'] ?></h6>
			<p class="card-text"><?= $data['invoices']['subject'] ?></p>
			<a href="<?= BASEURL; ?>/invoice" class="card-link">Back</a>
		</div>
	</div>
</div>