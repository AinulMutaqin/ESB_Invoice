<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page Home</title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container"> <!-- start container -->
	  <a class="navbar-brand" href="<?= BASEURL ?>">Invoice App</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="<?= BASEURL ?>">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= BASEURL ?>/invoice">Invoices</a>
	      </li>
	    </ul>
	  </div>
	</div> <!-- end container -->
	</nav>