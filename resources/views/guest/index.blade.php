@extends('guest.global')

@section('title')
  Halaman Home
@endsection

@section('breadcrumb')
  <h4 class="page-title">DashBoard</h4>
@endsection

@section('content')
 <div class="row">
      <div class="">
        <img src="{!! asset('xadmin/assets/images/gambar-coding1.jpg') !!}" class="img-fluid" alt="" style="max-width: 100%; height: auto; margin-top: -150px;">
        <div style="">
          <p style="position: absolute; top: 35%; left: 50%; transform: translate(-50%, -50%); font-size: 30px; color: orange; background-color: white; padding-left: 20px; padding-right: 20px;">Welcome My Brother :)</p>
          <p style="text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; background-color: orange; font-size: 30px; padding-left: 20px; padding-right: 20px;">Kembangkan skillmu bersama <b>Eonecode</b></br>untuk menjadi seorang pro sejati</p>
        </div>
      </div>
 </div>
@endsection
