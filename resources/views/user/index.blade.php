@extends('layouts.app')

@section('content')
  <div class="py-5">
    <div class="row">
      <div class="col d-flex justify-content-between">
        <div>
          <h2>Data Pengguna</h2>
        </div>

        <div>
          <a href="{{ route('user.create') }}" class="btn btn-success">Tambah Pengguna</a>
        </div>
      </div>
    </div>

    <div class="table-responsive">
      <table class='table table-striped table-bordered table-hover'>
        <thead>
          <tr>
            <th scope='col'>No</th>
            <th scope='col'>NRP</th>
            <th scope='col'>Name</th>
            <th scope='col'>Email</th>
            <th scope='col'>Phone</th>
            <th scope='col'>Gender</th>
            <th scope='col'>Birth Date</th>
            <th scope='col'>Action</th>
          </tr>
        </thead>

        <tbody>
          
          @foreach($users as $user)
          <tr>
            <th scope='row'>{{ $loop->iteration }}</th>
            <td>{{ $user->nrp }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->gender }}</td>
            <td>{{ $user->birth_date }}</td>
            <td class='d-flex justify-content-between'>
              <a href="{{ route('user.update', $user->id) }}" class='btn btn-primary mx-2'>Edit</a>

              <form action="{{ route('user.delete', $user->id) }}" method='POST'>
                @csrf
                @method('delete')

                <button type="submit" class='btn btn-danger'>Delete</button>
              </form>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>
@endsection