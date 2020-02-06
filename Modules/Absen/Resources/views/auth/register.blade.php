@extends('absen::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nim') ? ' has-error' : '' }}">
                            <label for="nim" class="col-md-4 control-label">Nim Mahasiswa</label>

                            <div class="col-md-6">
                                <input id="nim" type="nim" class="form-control" name="nim" value="{{ old('nim') }}" required>

                                @if ($errors->has('nim'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nim') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('semester') ? ' has-error' : '' }}">
                            <label for="semester" class="col-md-4 control-label">Semester</label>

                            <div class="col-md-6">
                                <input id="semester" type="text" class="form-control" name="semester" value="{{ old('semester') }}"  autofocus>

                                @if ($errors->has('semester'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('semester') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                                                <div class="form-group{{ $errors->has('kelompok') ? ' has-error' : '' }}">
                            <label for="semester" class="col-md-4 control-label">Kelompok</label>

                            <div class="col-md-6">
                            <select name="kelompok" class="form-control">
                              <option value="">Pilih Kelompok</option>}
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">1</option>
                              <option value="10">10</option>
                          </select>


                                @if ($errors->has('kelompok'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kelompok') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group row">

                            <label for="" class="col-md-4 control-label">Role</label>

                            <div class="col-md-6">{{-- 
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> --}}
                                <select name="role"  class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="dosen">Dosen</option>
                                    <option value="scrum master">Scrum Master</option>
                                    <option value="mahasiswa">Mahasiswa</option>
                                    
                                </select>

                                @if ($errors->has('role'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif


                            </div>
                        </div>



                        <div class="form-group row">

                            <label for="email" class="col-md-4 control-label">Prodi</label>

                            <div class="col-md-6">{{-- 
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> --}}
                                <select name="prodi"  class="form-control">

                                    <option value="">Pilih Program Studi</option>
                                    <option value="ti">Teknik Informatika</option>
                                    <option value="si">Sistem Informasi</option>
                                    
                                </select>

                                @if ($errors->has('prodi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prodi') }}</strong>
                                    </span>
                                @endif


                            </div>
                        </div>







                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
