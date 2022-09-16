<x-master>
	<x-slot name="content">
		@if (session()->has('status'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  <strong>Selamat!</strong> Pendaftaran tiket anda berhasil. Sampai jumpa di acara nanti!
			  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		@endif

		<div class="card ticket bg-light mt-5" style="width: 35em; height: 23em; margin-bottom: 70px; border-radius: 11px;">
		  <div class="card-header text-bg-primary d-flex justify-content-between" style="border-top-left-radius: 11px; border-top-right-radius: 11px;"> <div><i class="bi bi-credit-card"></i> &nbsp; PT. Agen X Ticket</div> <div><i class="bi bi-printer-fill"></i></div></div>
			  <div class="card-body" style="background-image: url('/assets/images/world-1.png'); background-position: 5px 27px; background-repeat: no-repeat;">
			  	<div class="container">
			  		<div class="row my-4 d-flex justify-content-evenly">
				  		<div class="col-sm-4">
				  			<label for="" class="form-label fw-bold">#</label>
							    <p class="card-text text-secondary">{{ $ticket->id }}</p>
				  		</div>
				  		<div class="col-sm-4">
				  			<label for="" class="form-label fw-bold">Nama</label>
							    <p class="card-title text-secondary">{{ $ticket->name }}</p>
				  		</div>
				  		<div class="col-sm-4">
				  			<label for="" class="form-label fw-bold">Alamat</label>
							    <p class="card-text text-secondary">{{ $ticket->address }}</p>
				  		</div>
				  	</div>
				  	<div class="row my-4">
				  		<div class="col-sm-4">
				  			<label for="" class="form-label fw-bold">Phone</label>
						    <p class="card-text text-secondary">{{ $ticket->phone }}</p>
				  		</div>
				  		<div class="col-sm-4">
				  			<label for="" class="form-label fw-bold">Tanggal</label>
							    <p class="card-text text-secondary">{{ $ticket->date }}</p>
				  		</div>
				  		<div class="col-sm-4">
				  			<label for="" class="form-label fw-bold">Waktu</label>
							    <p class="card-text text-secondary">{{ $ticket->time }}</p>
				  		</div>
				  	</div>
				  	<div class="row my-4">
				  		<div class="col-sm-4">
				  			<label for="" class="form-label fw-bold">Seat</label>
							    <p class="card-text text-secondary">{{ $ticket->seat }}</p>
				  		</div>
				  		<div class="col-sm-4">
				  			<label for="" class="form-label fw-bold">Gate</label>
							    <p class="card-text text-secondary">{{ $ticket->gate }}</p>
				  		</div>
				  		<div class="col-sm-4">
				  			<label for="" class="form-label fw-bold">Watching</label>
							    <p class="card-text text-secondary">{{ $ticket->watching }}</p>
				  		</div>
				  	</div>
			  	</div>
			  </div>
			  <div class="card-footer text-center text-white bg-warning"  style="border-bottom-left-radius: 11px; border-bottom-right-radius: 11px;">
			  	Have a nive watch
			  </div>
		</div>

		<a href="/" class="btn btn-sm btn-success ms-1" style="margin-bottom: 10px;"><i class="bi bi-arrow-left"></i> Kembali</a>
	</x-slot>
</x-master>