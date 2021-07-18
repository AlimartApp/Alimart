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
                                        <th>Kriteria Hafalan</th>
                                        <th>Kriteria Tajwid</th>
                                        <th>Kriteria Nada</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($kriteria as $kriterias)
                                    <tr>
                                        <td>{{ $kriterias->kriteria_hafalan}}</td>
                                        <td>{{ $kriterias->kriteria_tajwid}}</td>
                                        <td>{{ $kriterias->kriteria_nada}}</td>
                                        <td>
                                            <a href="#" class="badge bg-success" data-bs-toggle="modal" data-bs-target="#UpdateModal">Update
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Kriteria Hafalan</th>
                                        <th>Kriteria Tajwid</th>
                                        <th>Kriteria Nada</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

            <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nilai Peserta</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nilai Hafalan</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nilai Tajwid</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
             </div>
</div>

@endsection