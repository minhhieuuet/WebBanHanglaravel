@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại sản phẩm
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err )
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class='alert alert-success'>
                            {{session('thongbao')}}
                        </div>
                    @endif
                        <form action="admin/loaisp/them" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                            <div class="form-group">
                                <label>Tên loại sản phẩm</label>
                                <input class="form-control" name="Ten" placeholder="Nhập tên thể loại" />
                            </div>
                             <form class="form-group">
                                <label>Hình ảnh</label>
                                <input class="form-control" type="file" name="Hinh"  />
                               
                            </form>
                             <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" name="MoTa" placeholder="Nhập mô tả"></textarea>
                                
                            </div>
                            
                            <button type="submit" class="btn btn-default">Thêm </button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection