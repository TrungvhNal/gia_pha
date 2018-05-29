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
                            <th>Tuổi</th>
                            <th>Điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Chi tiết</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd gradeX">
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td class="center">4</td>
                            <td class="center">X</td>
                            <td class="center">4</td>
                            <td class="center">xem chi tiết</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td class="center">4</td>
                            <td class="center">X</td>
                            <td class="center">4</td>
                            <td class="center">xem chi tiết</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td class="center">4</td>
                            <td class="center">X</td>
                            <td class="center">4</td>
                            <td class="center">xem chi tiết</td>
                        </tr>
                        <tr class="even gradeC">
                            <td>Trident</td>
                            <td>Internet Explorer 5.0</td>
                            <td>Win 95+</td>
                            <td class="center">5</td>
                            <td class="center">C</td>
                            <td class="center">4</td>
                            <td class="center"><a href="#">xem chi tiết</a></td>
                        </tr>
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
