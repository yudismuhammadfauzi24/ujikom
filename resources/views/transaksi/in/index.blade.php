@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Transaksi</li>
            <li class="breadcrumb-item active" aria-current="page">Barang Masuk</li>
            <li class="breadcrumb-item" aria-current="page">
                <a href="{{route('master-barang.add')}}" class="btn btn-sm btn-outline-info">Tambah Stock Baru</a>
            </li>
        </ol>
    </nav>
    <div class="card border-0">
        <div class="card-body">
            <div class="alert alert-danger" role="alert">
                Request Barang akan masuk kedalam table dibawah ini
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Refrensi</th>
                        <th>Supplier</th>
                        <th>Status</th>
                        <th>Jumlah permintaan</th>
                        <th>Tanggal</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>REF/202220403/001</td>
                        <td>Samsung</td>
                        <td>Request</td>
                        <td>4</td>
                        <td>2022-04-21</td>
                        <td class="d-flex">
                            <form action="" method="post">
                                @csrf
                                <button class="btn btn-outline-info btn-sm">Setujui</button>
                            </form>
                            <form action="" method="post">
                                @csrf
                                <button class="btn btn-outline-danger btn-sm ml-2">Tolak</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
