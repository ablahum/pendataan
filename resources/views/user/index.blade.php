@extends('layouts.app')

@section('content')
  <div class="py-5">
    <div class="d-flex justify-content-between mb-4">
      <div>
        <h1 class='m-0'>User Data</h1>
      </div>

      <div>
        <a href="{{ route('user.create') }}" class="btn btn-success">Add User +</a>
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
            <td>{{ $loop->iteration }}</td>
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