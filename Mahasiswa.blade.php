@extends('layout.navbar')

@section('pembatas')
    <div class="container d-flex align-items-center justify-content-center" style="padding-top: 70px;">
        <h1>Database Mahasiswa</h1>
    </div>
    <div class="container d-flex mt-4 align-items-center justify-content-center">
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Mata Kuliah</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($siswas as $index => $siswas)
                    <tr @if ($loop->odd) @endif>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $siswas }}</td>
                        <td>{{ $pelajaran[$index] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection