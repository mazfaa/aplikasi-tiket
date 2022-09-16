<x-master>
	<x-slot name="content">
		@if (session()->has('status'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  <strong>Selamat!</strong> Pendaftaran tiket anda berhasil. Sampai jumpa di acara nanti!
			  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		@endif

		<div class="card bg-ligh mt-5" style="max-width: 18rem; margin-bottom: 70px;">
		  <div class="card-header">PT. Agen X Ticket</div>
		  <div class="card-body">
			    <h6 class="card-title">{{ $ticket->name }}</h6>
			    <p class="card-text">{{ $ticket->id }}</p>
			    <p class="card-text">{{ $ticket->address }}</p>
			    <p class="card-text">{{ $ticket->phone }}</p>
			    <p class="card-text">{{ $ticket->date }}</p>
			    <p class="card-text">{{ $ticket->time }}</p>
		  </div>
		</div>

		<a href="/" class="btn btn-sm btn-success ms-1" style="margin-bottom: 10px;"><i class="bi bi-arrow-left"></i> Kembali</a>
	</x-slot>
</x-master>