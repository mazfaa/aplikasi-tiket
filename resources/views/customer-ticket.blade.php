<x-master>
	<x-slot name="content">
		<form action="{{ route('ticket-check') }}" method="post" class="mb-5 mt-3">
			@csrf
			<div class="form-group">
			    <div class="card" style="width: 50%;">
			    	<div class="card-header">
			    		<label for="exampleInputEmail1" class="mb-2">Masukan Tiket ID Kamu</label>
			    	</div>
			    	<div class="card-body d-flex">
					    <input name="id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID" style="width: 80%;">
					    <button type="submit" class="btn btn-outline-success btn-sm ms-3"><i class="bi bi-search"></i> Check</button>
			    	</div>
			    </div>
		    </div>
		</form>
		
		@isset($ticket)
			<div class="card bg-light mb-3" style="max-width: 18rem;">
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
		@endisset

		<a href="/" class="btn btn-sm btn-success ms-1" style="margin-bottom: 10px;"><i class="bi bi-arrow-left"></i> Kembali</a>
	</x-slot>
</x-master>