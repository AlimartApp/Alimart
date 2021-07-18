@extends('layouts.master')
@section('judul', 'Data Peserta')
@section('top', 'Data Peserta')
@section('content')
<div class="page-content">
                <section class="row">
                <div class="card">
                        <div class="card-body">
                            <table id="peserta" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Peserta</th>
                                        <th>Nilai Hafalan</th>
                                        <th>Nilai Tajwid</th>
                                        <th>Nilai Nada</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($peserta as $pesertas )
                                    <tr>
                                        <td>{{ $pesertas->nama}}</td>
                                        <td>{{ $pesertas->nilai_hafalan}}</td>
                                        <td>{{ $pesertas->nilai_tajwid}}</td>
                                        <td>{{ $pesertas->nilai_nada}}</td>
                                        <td>
                                            <a href="{{ route('peserta.edit', $pesertas->id_peserta) }}" class="badge bg-success">Update
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Peserta</th>
                                        <th>Nilai Hafalan</th>
                                        <th>Nilai Tajwid</th>
                                        <th>Nilai Nada</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
</div>
@endsection