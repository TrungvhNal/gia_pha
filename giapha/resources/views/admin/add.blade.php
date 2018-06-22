@extends('layouts.admin.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Thêm</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thêm thành viên.
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6 col-md-2">
                        <label>Chân dung</label>
                        <img src="http://placehold.it/200x250" alt="" class="img-rounded img-responsive" />
                        <label></label>
                        <input name="txtFile" type="file" id="inputimg">
                    </div>
                    <div class="col-lg-6">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @elseif (Session()->has('flash_level'))
                            <div class="alert alert-success">
                                <ul>
                                    {!! Session::get('flash_massage') !!}
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('postadd')}}" method="POST" role="form" enctype="">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Người liên quan.</label>
                                <br>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="0" checked>
                                    Cha/mẹ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="1" >
                                    Vợ/chồng
                                </label>
                            </div>
                            <div class="form-group {{ $errors->has('txtBoMeVoChong') ? ' has-error' : '' }}">
                                <select name="txtBoMeVoChong" class="form-control" required>
                                    <option value= "" selected>-- Chọn người liên quan --</option>
                                    @foreach($users as $user)
                                    <option value= "{{$user->id}}">- {{$user->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('txtBoMeVoChong'))
                                    <div class="clearfix text-danger mb-10">{{ $errors->first('txtBoMeVoChong') }}</div>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('txtFullName') ? ' has-error' : '' }}">
                                <label>Tên tôi là:</label>
                                <input name="txtFullName"  class="form-control" required="required">
                                @if ($errors->has('txtFullName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtFullName') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Tên thường gọi</label>
                                <input name="txtNameShort" class="form-control" placeholder="Enter text">
                            </div>

                            <div class="form-group">
                                <label>Ngày sinh</label>
                                <input name="txtBirthday" class="form-control" placeholder="Ví dụ: 04/06/1988." required="required">
                                @if ($errors->has('txtBirthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtBirthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Ngày mất</label>
                                <input name="txtDieDate" class="form-control" placeholder="Ví dụ: 04/06/1988." >
                            </div>
                            <div class="form-group">
                                <label>Điện thoại</label>
                                <input name="txtPhoneNumber" class="form-control" placeholder="0974839268.">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="txtEmail" class="form-control" placeholder="0974839268.">
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input name="txtAddress" class="form-control" placeholder="" required="required">
                                @if ($errors->has('txtAddress'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtAddress') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Tiểu sử của bản thân.</label>
                                <textarea name="txtDescription" class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Lưu</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@endsection