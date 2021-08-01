{{-- @extends('ad.layout.index')
@section('content')

<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">
                  Danh sách tin tức
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
                                <th>#</th>
                                <th>Tiêu Đề</th>
                                <th>Tóm tắt</th>
                                <th>NB</th>
                                <th>View</th>
                                <th>Cmt</th>
                                <th>Edit</th>
                                <th>Del</th>
                            </tr>
                        </thead>

                        <tbody>
                            
                            @foreach ($tintuc as $tt)
                                <tr>
                                    <td>{{$tt->id}}</td>
                                    <td>{{$tt->TieuDe}}</td>
                                    <td>{{$tt->TomTat}}</td>
                                    <td>
                                        <a target="view_demo" href="ad/tintuc/noibat_changes/{{$tt->id}}">
                                              <input id="noibat_ckb" type="checkbox"
                                              @if ($tt->NoiBat==1)
                                                  checked="checked"
                                              @endif
                                              data-plugin="switchery" data-color="#1bb99a" data-size="small">
                                        </a>
                                    </td>

                                    <td>
                                        <a target="view_demo" href="page/{{$tt->id.'/'.$tt->TieuDeKhongDau}}.html" style="width: 40px">
                                          <button data-toggle="modal" data-target="#view_page" type="button" class="btn btn-icon waves-effect waves-light btn-primary"> 
                                            <i class=" fas fa-eye"></i>
                                          </button>
                                        </a>
                                    </td>
                                    <td>
                                        <a target="view_demo" href="ad/tintuc/cmt/{{$tt->id}}" style="width: 40px">
                                          <button style="position: relative;overflow:visible" data-toggle="modal" data-target="#view_page" type="button" class="btn btn-icon waves-effect waves-light btn-secondary"> <i class="far fa-comment-alt"></i> 
                                            @if ($tt->count_cmt()>0)
                                              <span style="font-size: 1em; position: absolute; top: -.5rem;right: -.5rem;" class="badge badge-pink rounded-circle noti-icon-badge">{{$tt->count_cmt()}}</span>
                                            @endif
                                          </button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="ad/tintuc/edit/{{$tt->id}}" style="width: 40px"><button type="button" class="btn btn-icon waves-effect waves-light btn-success"> <i class="fas fa-pencil-alt   "></i> </button></a>
                                    </td>
                                    <td>
                                        <button onclick='loadmes("{{$tt->id}}","{{$tt->TieuDe}}")' data-toggle="modal" data-target="#xacthuc_deleted" type="button" class="btn btn-icon waves-effect waves-light btn-danger"> <i class="mdi mdi-delete"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="button-list">
                        <a href="ad/tintuc/add"><button type="button" class="btn btn-primary waves-effect width-md waves-light">Thêm</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    

</div>
<!-- end container-fluid -->


<div id="view_page" onclick="location.reload()"  class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-body embed-responsive " style="height: 90vh">
          <iframe name="view_demo" class="embed-responsive-item" src="" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="xacthuc_deleted" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thông Báo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
              <span>Bạn thực sự muốn xóa: </span>
              <b id="tieudebaixoa"></b>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
          <div id="btn-xoa-id"></div>
        </div>
      </div>
    </div>
  </div> 
</div>
  <script>
        function loadmes(id, tieude)
        {
            document.getElementById("tieudebaixoa").innerText = tieude

            document.getElementById("btn-xoa-id").outerHTML = 
            `<a href="ad/tintuc/del/${id}">
                <button type="button" class="btn btn-primary">Xóa</button>
            </a>`;
        }
        
  </script>
  <script src="assets\js\vendor.min.js"></script>
  <script src="assets\libs\switchery\switchery.min.js"></script>
  <script src="assets\libs\bootstrap-touchspin\jquery.bootstrap-touchspin.min.js"></script>
  <script src="assets\js\pages\form-advanced.init.js"></script>


@endsection

@section('css')

<!-- App css -->
<link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
<link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
<link href="assets\css\app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">
<link href="assets\libs\switchery\switchery.min.css" rel="stylesheet" type="text/css">   
@endsection --}}
<form action="test" method="post">
  @csrf
  <input type="file" name="image">
  <input type="submit" value="supmit">
</form>