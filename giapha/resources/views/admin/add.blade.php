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
                    <div class="col-lg-6">
                        <form role="form">
                            <div class="form-group">
                                <label>Con cha/mẹ/vợ/chồng</label>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Chọn hình</label>
                                <input type="file">
                            </div>
                            <div class="form-group">
                                <label>Họ tên</label>
                                <input class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Tên thường gọi</label>
                                <input class="form-control" placeholder="Enter text">
                            </div>
                            <div class="form-group">
                                <label>Ngày sinh</label>
                                <input class="form-control" placeholder="Ví dụ: 04/06/1988.">
                                <p class="help-block">dd</p>
                            </div>
                            <div class="form-group">
                                <label>Ngày mất</label>
                                <input class="form-control" placeholder="Ví dụ: 04/06/1988.">
                                <p class="help-block">dd</p>
                            </div>
                            <div class="form-group">
                                <label>Điện thoại</label>
                                <input class="form-control" placeholder="0974839268.">
                                <p class="help-block">dd</p>
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" placeholder="">
                                <p class="help-block">dd</p>
                            </div>

                            <div class="form-group">
                                <label>Tiểu sử của bản thân.</label>
                                <textarea class="form-control" rows="3"></textarea>
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