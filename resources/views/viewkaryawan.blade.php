@extends('index')

@section('container')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">age</th>
        <th scope="col">job</th>
        <th scope="col">name</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($karyawans as $karyawan)
        <tr>
            <th scope="row">{{$karyawan->id}}</th>
            <td>{{ $karyawan->age }}</td>
            <td>{{ $karyawan->job }}</td>
            <td>{{ $karyawan->nama }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
