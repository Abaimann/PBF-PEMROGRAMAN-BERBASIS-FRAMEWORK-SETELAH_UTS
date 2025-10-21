@extends('utama')

@section('judul_menu')

<p>ini adalah tampilan dari judul menu dengan id  {{$isi_data}}</p>

@if (%isi_data>20)
    <p>isi data lebih dari 20</p>
@elseif (%isi_data>15)
    <p>isi data lebih dari 25</p>
@else
    <p>isi data kurang dari 15</p>
@endif
@endsection

@section ('isi_menu')
<p>ini adalah tampilan dari isi menu</p>
@endsection