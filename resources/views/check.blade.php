<x-admin>
	<x-slot name="content">
		@if (session()->has('status'))
	      <div class="alert alert-success alert-dismissible fade show" role="alert">
	        Ticket Checked Successfully!
	        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    @endif
		<form action="{{ route('check') }}" method="post">
			@csrf
			<div class="form-group">
			    <div class="card" style="width: 100%;">
			    	<div class="card-header text-success">
			    		<label for="exampleInputEmail1" class="mb-2" style="font-size: 16px;"> <i class="bi bi-ticket-perforated"></i> &nbsp; Check-in Ticket</label>
			    	</div>
			    	<div class="card-body d-flex">
					    <input name="id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No. Ticket" style="width: 91%;">
					    <button type="submit" class="btn btn-outline-success btn-sm" style="margin-left: 10px; margin-top: 5px;"><i class="bi bi-check2"></i> Check</button>
			    	</div>
			    </div>
		    </div>
		</form>
		<table class="table table-hover mt-2" id="check-in-table">
	      <thead>
	        <tr>
	          <th scope="col">#</th>
	          <th scope="col">Nama</th>
	          <th scope="col">Alamat</th>
	          <th scope="col">Status</th>
	          <th scope="col">Seat</th>
	          <th scope="col">Gate</th>
	          <th scope="col">Tema</th>
	        </tr>
	      </thead>
	      <tbody>
	          @foreach ($tickets as $ticket)
	            <tr>
	              <th scope="row">{{ $ticket->id }}</th>
	              <td>{{ $ticket->name }}</td>
	              <td>{{ $ticket->address }}</td>
	              <td>
		             @if ($ticket->status === 'unchecked')
	             	 	<span class="badge badge-danger">{{ $ticket->status }}</span>
		             @else
	             	 	<span class="badge badge-success">{{ $ticket->status }}</span>
		             @endif
             	 </td>
	              <td>{{ $ticket->seat }}</td>
	              <td>{{ $ticket->gate }}</td>
	              <td>{{ $ticket->watching }}</td>
	            </tr>
	          @endforeach
	      </tbody>
	    </table>
	</x-slot>
</x-admin>