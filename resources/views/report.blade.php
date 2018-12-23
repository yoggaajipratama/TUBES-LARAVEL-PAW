@extends('layouts.app')
@section('title','Report');
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Report') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('report') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_ktp" class="col-md-4 col-form-label text-md-right">{{ __('Nomor KTP') }}</label>

                            <div class="col-md-6">
                                <input id="no_ktp" type="text" class="form-control{{ $errors->has('no_ktp') ? ' is-invalid' : '' }}" name="no_ktp" value="{{ old('no_ktp') }}" required>

                                @if ($errors->has('no_ktp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('no_ktp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_tlp" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Telp') }}</label>

                            <div class="col-md-6">
                                <input id="no_tlp" type="text" class="form-control{{ $errors->has('no_tlp') ? ' is-invalid' : '' }}" name="no_tlp" required>

                                @if ($errors->has('no_tlp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('no_tlp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nampro" class="col-md-4 col-form-label text-md-right">{{ __('Produk') }}</label>

                            <div class="col-md-6">
                                <select name="nampro">
                                    @foreach($produk as $nama)
                                        <option value="{{$nama->nama_produk}}">{{$nama->nama_produk}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('nampro'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nampro') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga') }}</label>

                            <div class="col-md-6">
                                <input id="harga" type="text" class="form-control{{ $errors->has('harga') ? ' is-invalid' : '' }}" name="harga" required>

                                @if ($errors->has('harga'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('harga') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="tgl_kej" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Kejadian') }}</label>

                            <div class="col-md-6">
                                <input id="tgl_kej" type="date" class="form-control{{ $errors->has('tgl_kej') ? ' is-invalid' : '' }}" name="tgl_kej" required>

                                @if ($errors->has('tgl_kej'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tgl_kej') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <select name="alamat">
                                    @foreach($pasar as $nama)
                                        <option value="{{$nama->nama_pasar}}">{{$nama->nama_pasar}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('alamat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ket" class="col-md-4 col-form-label text-md-right">{{ __('Keterangan') }}</label>

                            <div class="col-md-6">
                                <textarea id="ket" type="text" class="form-control{{ $errors->has('ket') ? ' is-invalid' : '' }}" name="ket" required></textarea>

                                @if ($errors->has('harga'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ket') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file_gambar" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

                            <div class="col-md-6">
                                <input type="file" id="file_gambar" name="file_gambar">

                                @if ($errors->has('file_gambar'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('file_gambar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                       <!--  <div class="form-group row {{$errors->has('jabatan')? 'has-error': ''}}">
                            <label class="col-md-4 col-form-label text-md-right">Jabatan</label>
                            <div class="col-md-6">
                                <select name="jabatan" class="form-control">
                                    <option value="ADMIN">ADMIN</option>
                                    <option value="MEMBER">MEMBER</option>
                                </select>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Report') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
