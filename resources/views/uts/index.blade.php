@extends('layouts.main')  {{-- pastikan nama file layout sesuai, misalnya main.blade.php --}}

@section('content')
<div class="container mt-4">
    <h1 class="mb-3">Daftar UTS</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Matkul</th>
                <th>Jumlah SKS</th>
                <th>Keterangan</th>
                <th>Dibuat</th>
                <th>Diupdate</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->uts_id }}</td>
                    <td>{{ $item->nama_matkul }}</td>
                    <td>{{ $item->jumlah_sks }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
