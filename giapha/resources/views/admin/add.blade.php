@extends('layouts.admin.layout')
@section('js_common')
    <style>
        article, aside, figure, footer, header, hgroup,
        menu, nav, section { display: block; }
    </style>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#txt_img')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(250);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@stop
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
                        @if ($successful)
                            <div class="alert alert-success">
                                <ul>
                                    <li>{{ $successful }}</li>
                                </ul>
                            </div>
                        @endif
                    <form action="{{route('postadd')}}" method="POST" role="form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="col-sm-6 col-md-3">
                        <label>Chân dung</label>
                        <img id="txt_img" src="http://placehold.it/200x250" alt="" class="img-rounded img-responsive" />
                        <label></label>
                        <input onchange="readURL(this)" name="txtFile" type="file"  accept="image/gif, image/jpg, image/png">
                    </div>
                    <div class="col-lg-6">

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
                            <label>Giới tính.</label>
                            <br>
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="gender" value="1" checked>
                                Nam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="gender" id="gender" value="0" >
                                Nữ
                            </label>
                        </div>
                            <div class="form-group">
                                <label>Tên thường gọi</label>
                                <input name="txtNameShort" class="form-control" placeholder="Enter text">
                            </div>

                            <div class="form-group {{ $errors->has('txtBirthday') ? ' has-error' : '' }}">
                                <label>Ngày sinh</label>
                                <input type="date" name="txtBirthday" class="form-control" placeholder="Ví dụ: 04/06/1988." required="required">
                                @if ($errors->has('txtBirthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtBirthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Ngày mất</label>
                                <input hidden type="date" name="txtDieDate" class="form-control" placeholder="Ví dụ: 04/06/1988." >
                            </div>
                            <div class="form-group">
                                <label>Điện thoại</label>
                                <input type="number" name="txtPhoneNumber" class="form-control" placeholder="0974839268.">
                            </div>
                            <div class="form-group {{ $errors->has('txtEmail') ? ' has-error' : '' }}">
                                <label>Email</label>
                                <input type="email" name="txtEmail" class="form-control" placeholder="0974839268." required="required">
                                @if ($errors->has('txtEmail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtEmail') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('txtAddress') ? ' has-error' : '' }}">
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