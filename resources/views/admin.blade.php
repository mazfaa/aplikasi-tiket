<x-admin>
  <x-slot name="content">
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Record Edited Successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @elseif (session()->has('deleted'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Record Deleted Successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

    <table class="table table-hover" id="order-table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">Seat</th>
          <th scope="col">Gate</th>
          <th scope="col">watching</th>
          <th scope="col">No. Telephone</th>
          <th scope="col">Tanggal Masuk</th>
          <th scope="col">Waktu Masuk</th>
          <th scope="col">Pengaturan</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($tickets as $ticket)
            <tr>
              <th scope="row">{{ $ticket->id }}</th>
              <td>{{ $ticket->name }}</td>
              <td>{{ $ticket->address }}</td>
              <td>{{ $ticket->seat }}</td>
              <td>{{ $ticket->gate }}</td>
              <td>{{ $ticket->watching }}</td>
              <td>{{ $ticket->phone }}</td>
              <td>{{ $ticket->date }}</td>
              <td>{{ $ticket->time }}</td>
              <td>
                <form action="/admin/{{ $ticket->id }}" method="post">
                  @csrf
                  @method('delete')
                  <a href="/admin/edit/{{ $ticket->id }}" class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                  <button type="submit" class="btn btn-sm btn-danger d-inline" onclick="confirm('Are you sure want to delete this ticket?')"><i class="bi bi-trash3"></i></button>
                </form>
              </td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </x-slot>
</x-admin>