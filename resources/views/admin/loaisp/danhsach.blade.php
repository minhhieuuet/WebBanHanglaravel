@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại sản phẩm
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                        {{session('thongbao')}}
                        </div>   
                    @endif
                     
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Mô tả</th>
                                <th>Ảnh</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($loaisp as $tl)
                            <tr class="odd gradeX" align="center">
                                <td>{{$tl->id}}</td>
                                <td>{{$tl->name}}</td>
                                <td>{{$tl->description}}</td>
                                <td><img height="80px" width="80px" src="image/product/{{$tl->image}}"></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/loaisp/xoa/{{$tl->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/loaisp/sua/{{$tl->id}}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->


        </div>


@endsection
