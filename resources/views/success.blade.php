@extends('layouts.app')
@section('content')
<div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Success Page</h1>
          <p>Contipay transaction report</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Cancel Page</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">Your transaction was succesful. Click <a href="{{asset('/topup')}}">here</a> to top up again.</div>
          </div>
        </div>
      </div>
@endsection