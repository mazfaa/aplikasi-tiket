<x-admin>
	<x-slot name="content">
		<table class="table table-hover" id="report-table">
	      <thead>
	        <tr>
	          <th scope="col">#</th>
	          <th scope="col">Nama</th>
	          <th scope="col">Status</th>
	        </tr>
	      </thead>
	      <tbody>
	          @foreach ($tickets as $ticket)
	            <tr>
	              <th scope="row">{{ $ticket->id }}</th>
	              <td>{{ $ticket->name }}</td>
		             	 <td>
				             @if ($ticket->status === 'unchecked')
			             	 	<span class="badge badge-danger">{{ $ticket->status }}</span>
				             @else
			             	 	<span class="badge badge-success">{{ $ticket->status }}</span>
				             @endif
		             	 </td>
	            </tr>
	          @endforeach
	      </tbody>
	    </table>
	      <a href="report/export/" class="btn btn-success btn-sm mt-2"><i class="bi bi-file-earmark-excel"></i> Export</a>
	</x-slot>
</x-admin>