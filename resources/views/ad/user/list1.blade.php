@extends('ad.layout.index')
@section('content')

<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">
                  Danh sách người dùng
                </h4>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">

                    <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                            <tr style="text-align: center">
                                <th>STT</th>
                                <th>Tên người dùng</th>
                                <th>Email</th>
                                <th>Quyền</th>
                                <th>Sửa</th>
                                <th>xóa</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)  
                                <tr style="text-align: center">
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td> 
                                    <td>Admin</td>
                                    {{-- @if ($user->level == 1)
                                        <td>Admin</td>
                                    @else
                                        <td>Thường</td>   
                                    @endif --}}
                                    <td>
                                        <a href="ad/user/edit/{{$user->id}}" style="width: 40px"><button type="button" class="btn btn-icon waves-effect waves-light btn-success"> <i class="fas fa-pencil-alt   "></i> </button></a>
                                    </td>
                                    <td>
                                        <a href="ad/user/del/{{$user->id}}" style="width: 40px"><button type="button" class="btn btn-icon waves-effect waves-light btn-danger"> <i class="mdi mdi-delete"></i></button></a>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    <div class="button-list">
                        <a href="ad/user/add"><button type="button" class="btn btn-primary waves-effect width-md waves-light">Thêm</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    

</div>
<!-- end container-fluid -->
    
@endsection