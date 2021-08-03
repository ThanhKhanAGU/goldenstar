@extends('ad.layout.index')
@section('content')
<h4 class="header-title mb-4">Danh sách nhà phân phối</h4>
<div class="container-fluid">
  <div class="row">
      <div class="col-12">
          <div class="card" >
              <div class="card-body ">
                <table id="key-datatable" class="table dt-responsive " style="width: 100%">
                    <thead>
                        <tr style="text-align: center">
                          <th>STT</th>
                          <th >Tên</th>
                          <th >SĐT</th>
                          <th >Đ.Chỉ</th>
                          <th >Mail</th>
                          <th >Xem</th>
                          <th >Sửa</th>
                          <th >Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $dem=0; ?>
                      @foreach ($p as $i)
                      <tr id='{{$i->id}}' class="text-center">
                        <td><?php echo $dem++;?></td>
                        <td>
                          <h6 style="white-space: nowrap; width: 15em;overflow: hidden; text-overflow: ellipsis">
                            {{$i->name}}</h6>
                          <p style="white-space: nowrap; width: 15em;overflow: hidden; text-overflow: ellipsis">
                            {!!$i->content!!}</p>
                        </td>
                        <td>{{$i->telephon}}</td>
                        <td>{{$i->place}}</td>
                        <td>{{$i->email}}</td>
                        <td>
                          <a target="view_demo" href="distributors/{{$i->id}}" style="width: 40px">
                            <button data-toggle="modal" data-target="#view_page" type="button" class="btn btn-icon waves-effect waves-light btn-secondary"> 
                              <i class=" fas fa-eye"></i>
                            </button>
                          </a>
                        </td>
                        <td>
                          <a href="ad/distributor/edit/{{$i->id}}">
                            <button class="btn btn-primary" href="#">
                              <i class="fa fa-edit"></i>
                            </button>
                          </a>
                        </td>
                        <td>
                          <button data-toggle="modal" onclick="del('{{$i->id}}','{{$i->name}}')" data-target="#del_item" class="btn btn-danger" href="#">
                            <i class="fa fa-trash"></i>
                          </button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                
                </table>
              </div>
          </div>
          <a href="ad/distributor/add">
            <button type="button" class="btn btn-primary block">
              <i class="fa fa-plus"></i> Thêm bài viết
            </button>
          </a>
      </div>
  </div>
  <!-- end row -->


<!-- Modal Xác Nhận-->
<div class="modal fade" id="del_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Thông Báo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Bạn Thật sự muốn xóa nội dung <b id="mess_title"></b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">hủy</button>
        <a href="" id="urldelte">
          <button type="button" class="btn btn-danger" >Xóa</button>
        </a>
      </div>
    </div>
  </div>
</div>

<div id="view_page" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-body embed-responsive " style="height: 90vh">
          <iframe name="view_demo" class="embed-responsive-item" src="" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</div>
<script>
  function del(id,name)
  {
      document.getElementById("mess_title").innerText = name;
      document.getElementById("urldelte").href = "ad/distributor/del/"+id;
  }
</script>
</div>
@endsection
@section('js')
<script src="assets\libs\switchery\switchery.min.js"></script>
<script src="assets\js\pages\form-advanced.init.js"></script>

<script src="assets\libs\datatables\jquery.dataTables.min.js"></script>
<script src="assets\libs\datatables\dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets\libs\datatables\dataTables.buttons.min.js"></script>

<!-- Responsive examples -->
<script src="assets\libs\datatables\dataTables.responsive.min.js"></script>



<!-- Datatables init -->
<script src="assets\js\pages\datatables.init.js"></script>
<script>
  window.addEventListener('resize', function () { 
    "use strict";
    var a = document.getElementsByTagName("body")[0];
    b = a.innerHTML
    a.innerHTML = "";
    a.innerHTML = b;
});
</script>
<style>
  td::after{
    
  }
</style>
@endsection
@section('css')  
<link href="assets\libs\switchery\switchery.min.css" rel="stylesheet" type="text/css">
<link href="assets\libs\datatables\dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
<link href="assets\libs\datatables\dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
<link href="assets\libs\datatables\responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
<link href="assets\libs\datatables\select.bootstrap4.min.css" rel="stylesheet" type="text/css"> 

<!-- App css -->
<link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
<link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
<link href="assets\css\app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">
@endsection