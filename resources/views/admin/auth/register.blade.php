@extends('admin.template.auth')
@section('content')
<h2 class="text-center" style="margin-top: 0px;">Register</h2>
<form action="{{route('auth.storeRegister')}}" id="login-form" method="post" role="form" style="display: block;" enctype="multipart/form-data">
  {{csrf_field()}}
  <input type="hidden" name="level" value="pengusaha">
  <div class="col-md-6 col-sm-12">
    <div class="form-group">
      <input required type="text" name="nama_user" tabindex="1" class="form-control" placeholder="Nama anda" value="">
    </div>
    <div class="form-group">
      <input required type="email" name="email" tabindex="1" class="form-control" placeholder="Email anda" value="">
    </div>
    <div class="form-group">
      <input required type="text" name="username" tabindex="1" class="form-control" placeholder="Username" value="">
    </div>
  </div>
  <div class="col-md-6 col-sm-12">
    <div class="form-group">
      <input required type="text" name="nama_perusahaan" tabindex="1" class="form-control" placeholder="Nama perusahaan" value="">
    </div>
    <div class="form-group">
      <input required type="text" name="bidang_perusahaan" tabindex="1" class="form-control" placeholder="Bidang perusahaan" value="">
    </div>
    <div class="form-group">
      <input required type="password" name="password" tabindex="1" class="form-control" placeholder="Password" value="">
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <input required type="text" name="no_telp" tabindex="1" class="form-control" placeholder="No. Telp" value="">
    </div>
    <div class="form-group">
      <label>Upload Foto Profile</label>
      <input type="file" name="photo" class="form-control">
    </div>
    <div class="form-group">
      <textarea class="form-control" name="alamat_perusahaan" placeholder="Alamat perusahaan"></textarea>
    </div>
    <div class="form-group">
      <textarea class="form-control" name="deskripsi_perusahaan" placeholder="Deskripsi perusahaan"></textarea>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <button type="submit" class="form-control btn btn-login">Register</button>
        </div>
      </div>
    </div>
  </div>
</form>
<form action="{{route('auth.storeRegister')}}" id="register-form" method="post" role="form" style="display: none;" enctype="multipart/form-data">
  {{csrf_field()}}
  <input type="hidden" name="level" value="pemasok">
  <div class="col-md-6 col-sm-12">
    <div class="form-group">
      <input required type="text" name="nama_user" tabindex="1" class="form-control" placeholder="Nama anda" value="">
    </div>
    <div class="form-group">
      <input required type="email" name="email" tabindex="1" class="form-control" placeholder="Email anda" value="">
    </div>
    <div class="form-group">
      <input required type="text" name="username" tabindex="1" class="form-control" placeholder="Username" value="">
    </div>
  </div>
  <div class="col-md-6 col-sm-12">
    <div class="form-group">
      <input required type="text" name="nama_perusahaan" tabindex="1" class="form-control" placeholder="Nama perusahaan" value="">
    </div>
    <div class="form-group">
      <input required type="text" name="bidang_perusahaan" tabindex="1" class="form-control" placeholder="Bidang perusahaan" value="">
    </div>
    <div class="form-group">
      <input required type="password" name="password" tabindex="1" class="form-control" placeholder="Password" value="">
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <input required type="text" name="no_telp" tabindex="1" class="form-control" placeholder="No. Telp" value="">
    </div>
    <div class="form-group">
      <label>Upload Foto Profile</label>
      <input type="file" name="photo" class="form-control">
    </div>
    <div class="form-group">
      <textarea class="form-control" name="alamat_perusahaan" placeholder="Alamat perusahaan"></textarea>
    </div>
    <div class="form-group">
      <textarea class="form-control" name="deskripsi_perusahaan" placeholder="Deskripsi perusahaan"></textarea>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <button type="submit" class="form-control btn btn-login">Register</button>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection