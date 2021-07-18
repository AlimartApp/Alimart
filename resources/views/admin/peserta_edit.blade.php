@extends('layouts.master')
@section('judul', 'Data Peserta')
@section('top', 'Update Data Peserta')
@section('content')
<div class="page-content">
                <section class="row">
                    <form action="{{ route('update.peserta', $data->id_peserta) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nilai Hafalan</label>
                            <input type="text" name="nilai_hafalan" value="{{ old('nilai_hafalan', $data->nilai_hafalan) }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nilai Tajwid</label>
                            <input type="text" name="nilai_tajwid" value="{{ old('nilai_tajwid', $data->nilai_tajwid) }}" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nilai Nada</label>
                            <input type="text" name="nilai_nada" value="{{ old('nilai_nada', $data->nilai_nada) }}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </section>
</div>
@endsection