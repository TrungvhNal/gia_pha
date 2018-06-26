@extends('layouts.admin.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách tất cả các thành viên trong họ.
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Họ và tên</th>
                            <th>Tên thường gọi</th>
                            <th>Ngày sinh</th>
                            <th>Gới tính</th>
                            <th>Điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Chi tiết</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $item)
                        <tr class="odd gradeX">
                            <td>{{$item->name}}</td>
                            <td>{{$item->short_name}}</td>
                            <td>{{$item->birthday}}</td>
                            <td class="center">{{$item->sexy == 1?'Nam':'Nữ'}}</td>
                            <td class="center">{{$item->phone}}</td>
                            <td class="center">{{$item->address}}</td>
                            <td class="center"><a href="#">xem chi tiết</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection
