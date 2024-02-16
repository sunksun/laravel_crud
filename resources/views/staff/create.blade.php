@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
        <div class="card-header">พนักงาน</div>
            <div class="card-body">
            <form method="POST" action="{{route('staff.store')}}">
                @csrf
                <div class="form-group row">
                    <label for="first_name" class="col-sm-2 col-form-label">ชื่อ</label>
                    <div class="col-sm-10">
                    <input type="text" name="first_name" class="form-control" id="staticEmail">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="last_name" class="col-sm-2 col-form-label">นามสกุล</label>
                    <div class="col-sm-10">
                    <input type="text" name="last_name" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">อีเมล์</label>
                    <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">โทรศัพท์</label>
                    <div class="col-sm-10">
                    <input type="text" name="phone" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection