@extends('layouts.app')
@section('konten')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">


                    <a href="/kategori.create" type="button" class="btn btn-warning mb-4">Tambah kategori</a>

                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Kategori Buku
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Kategori</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Shandy Fakhri</td>
                                <td>
                                    <a href="/kategori.edit"> <button type="button"
                                            class="btn btn-primary">edit</button></a>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection
