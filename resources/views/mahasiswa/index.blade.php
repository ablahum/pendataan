@extends('layouts.app')

@section('content')
<div class="row mt-5">
  <div class="col-lg-5 margin-tb">
    <div class="float-start">
      <h2>Data Mahasiswa</h2>
    </div>

    <div class="float-right">
      <a href="" class="btn btn-success">
        Tambah Mahasiswa
      </a>
    </div>
  </div>
</div>

<table>
  <thead>
    <tr>
      <th scope='col'>No</th>
      <th scope='col'>NIM</th>
      <th scope='col'>Name</th>
      <th scope='col'>Email</th>
      <th scope='col'>Phone</th>
      <th scope='col'>Gender</th>
      <th scope='col'>Birth Date</th>
      <th scope='col'>Action</th>
    </tr>
  </thead>

  <tbody>
    @foreach($students as $student)
    
    <tr>
      <th scope='row'>{{ $loop->iteration }}</th>
      <td>{{ $student->nim }}</td>
      <td>{{ $student->name }}</td>
      <td>{{ $student->email }}</td>
      <td>{{ $student->phone }}</td>
      <td>{{ $student->gender }}</td>
      <td>{{ $student->birth_date }}</td>
      <td>
        <a href="" class='btn btn-warning'>Detail</a>
        <a href="" class='btn btn-primary'>Edit</a>

        <form action="" method='POST' style='display: inline-block'>
          @csrf
          @method('DELETE')

          <button type="submit" class='btn btn-danger'>Delete</button>
        </form>
      </td>
    </tr>

    @endforeach
  </tbody>
</table>

@endsection