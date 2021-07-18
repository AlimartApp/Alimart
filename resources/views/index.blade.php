@extends('layouts.masterc')
@section('judul', 'Data Point Peserta Lomba')
@section('top', 'Data Peserta')
@section('content')
<div class="page-content">
                <section class="row">
                <div class="card">
                        <div class="card-body">
                            <table id="pesertas" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Peserta</th>
                                        <th>Nilai Hafalan</th>
                                        <th>Nilai Tajwid</th>
                                        <th>Nilai Nada</th>
                                        <th>Jumlah Poin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($nilai as $nilais )
                                    <tr>
                                        <td>{{ $nilais->nama}}</td>
                                        <td>{{ $nilais->nilai_hafalan}}</td>
                                        <td>{{ $nilais->nilai_tajwid}}</td>
                                        <td>{{ $nilais->nilai_nada}}</td>
                                        <td>{{ $nilais->nilai_hafalan + $nilais->nilai_tajwid + $nilais->nilai_nada }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <!-- <tfoot>
                                    <tr>
                                        <th>Nama Peserta</th>
                                        <th>Nilai Hafalan</th>
                                        <th>Nilai Tajwid</th>
                                        <th>Nilai Nada</th>
                                    </tr>
                                </tfoot> -->
                            </table>
                        </div>
                    </div>

                </section>
            </div>
</div>
@endsection