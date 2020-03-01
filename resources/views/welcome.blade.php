<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel CRUD</title>
<link rel='stylesheet' href='/stylesheets/bootstrap.min.css' />
<link rel='stylesheet' href='stylesheets/styles.css' />
	</head>
	<body>
		<nav class="nav navbar navbar-light bg-light">
			<a href="#" class="navbar-brand text-ight">
				<img src="/images/logo.png" width="80" height="30" alt="logo.png" />
			</a>
			<form class="form form-inline my-2 my-lg-0" id="searchForm" acrion="">
				<input name="search" type="text" placeholder="Search..." />
				<a class="btn btn-warning text-white" data-target="#createModal" data-toggle="modal" >Add</a>
			</form>
		</nav>
		<section class="container">
			<div class="row"> &nbsp; </div>
			<div class="row">
				<div class="col">
					<div class="table-responsive">
						<table id="tableOrders" class="table table-stripped">
							<thead class="bg-warning text-white">
								<tr>
									<th>No.</th>
									<th>Cashier</th>
									<th>Product</th>
									<th>Category</th>
									<th>Price</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>

		<section id="createModal" class="modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title">
							ADD
						</h3>
						<button class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<form id="createForm" action="#" method="post">
							<div class="form-group">
								<input class="form-control" type='text' name='cashier' placeholder="Cashier" />
							</div>
							<div class="form-group">
								<input class="form-control" type='text' name='category' placeholder="Category" />
							</div>
							<div class="form-group">
								<input class="form-control" type='text' name='product' placeholder="Product" />
							</div>
							<div class="form-group">
								<input class="form-control" type='text' name='price' placeholder="Price" />
							</div>
							<div class="modal-footer">
<button class="btn btn-warning text-light" name='submit' value="1" > Add </button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<section id="editModal" class="modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title">
							EDIT
						</h3>
						<button class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<form id="editForm" action="#" method="post">
							<div class="form-group">
								<input class="form-control" type='text' name='cashier' placeholder="Cashie" />
							</div>
							<div class="form-group">
								<input class="form-control" type='text' name='category' placeholder="Category" />
							</div>
							<div class="form-group">
<input class="form-control" type='text' name='product' placeholder="Product" />               </div>
							<div class="form-group">                          <input class="form-control" type='text' name='price' placeholder="Price" />                   </div>                                          <div class="modal-footer">
								<button class="btn btn-warning text-light" name='submit' value="1" >
									Edit
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<section id="deleteModal" class="modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5>Delete this record ?</h5>
						<button class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<p>apakah anda yakin ingin menghapus data ini ?</p>
						<p class="text-warning">
							<small> Data akan dihapus permanen</small>
						</p>
					</div>
					<div class="modal-footer">
						<form id="deleteForm">
							<button class="btn btn-default" data-dismiss="modal"> Cancel</button>
							<button class="btn btn-danger"> Delete</button>
						</form>
					</div>
				</div>
			</div>
		</section>

<script src='/javascripts/jquery-3.4.1.min.js'></script>
<script src='/javascripts/bootstrap.bundle.min.js'></script>
<script src='/javascripts/main.js'></script>
	</body>
</html>
