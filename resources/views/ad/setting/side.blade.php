@extends('ad.layout.index')
@section('content')
<h4 class="header-title mb-4">THÊM BÀI VIẾT</h4>

<form action="ad/set/side" method="POST" class="parsley-examples" enctype="multipart/form-data">
    @csrf
    @for($i=0;$i<3;$i++)
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">
            Bài Ghim số {{$i+1}}
        </label>
        <button onclick="" data-toggle="modal" data-target="#exampleModalLong" type="button" class="costom col-lg-10 btn btn-primary">
            <h5>tên</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, eum. Accusamus cupiditate ipsa odit dignissimos omnis, esse labore autem sunt, dolores facere consequatur veniam aspernatur, officiis pariatur laboriosam libero consectetur.</p>    
        </button>
        <input id="pin{{$i}}" type="hidden" name="pinn[]">
    </div>
    @endfor

<!-- end Action  -->
    <div class="form-group mb-0">
        <div>
            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                Lưu Lại Thay đôi
            </button>
        </div>
    </div>
</form>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên</th>
                <th scope="col">Tóm tắt</th>
                <th scope="col">L.Xem</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($p->where('type','ps') as $key=> $item)
                <tr onclick="add_data('{{$item->id}}','{{$item->name}}','{{$item->summary}}')">
                    <td>{{$key+1}}</td>
                    <td >
                        <div class="td_co">
                            {{$item->name}}
                        </div>
                    </td>
                    <td >
                        <div class="td_co">
                            {{$item->summary}}
                        </div>
                    </td>
                    <td>{{$item->view}}</td>
                </tr>
            @endforeach
            </tbody>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script>
var data 
function getdata(x)
{
    data = x;
} 

function add_data(n,c)
{

}

</script>
@endsection
@section('css')
<style>
    .img-6-9 img,.img-3-9 img{
    width: 100%;
    background-size: cover; 
    overflow: hidden;
    }
    .img-6-9,.img-3-9{
        overflow: hidden;
        border-radius: 3px;
    }
    #viewimg_2 img{
       margin: 3px;
       border-radius:5px;
       box-shadow: 2px 3px 5px #333;  
    }
    .costom{
        overflow: hidden;
    }
    .costom *
    {
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }
    .td_co{
        max-height:5rem ;
        overflow: hidden;
    }
</style>   
<link href="assets\libs\switchery\switchery.min.css" rel="stylesheet" type="text/css">
@endsection