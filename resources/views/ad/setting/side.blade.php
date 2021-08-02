@extends('ad.layout.index')
@section('content')
<h4 class="header-title mb-4">THÊM BÀI VIẾT</h4>

<form target="view_home" action="ad/set/side" method="POST" class="parsley-examples" enctype="multipart/form-data">
    @csrf
    @for($i=0;$i<3;$i++)
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">
            Bài Ghim số {{$i+1}}
        </label>
        <button onclick="getdata(pin{{$i}},n{{$i}},c{{$i}})" data-toggle="modal" data-target="#exampleModalLong" type="button" class="costom col-lg-10 btn btn-primary">
            <h5 id="n{{$i}}">
            {{$p->find($dt['pin'.($i+1)])->name}}
            </h5>
            <p id="c{{$i}}">
            {{$p->find($dt['pin'.($i+1)])->summary}}
            </p>    
        </button>
        <input value="{{$dt['pin'.($i+1)]}}" id="pin{{$i}}" type="hidden" name="pin[]">
    </div>
    @endfor

<!-- end Action  -->
    <div class="form-group mb-0">
        <button type="submit" data-toggle="modal" data-target=".view_home_demo" style="font-size: 1.5em" class="font-weight-bold text-uppercase float-right btn btn-primary">
            <i class="fas fa-save"></i> LƯU THAY ĐỔI
        </button>
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
        <table class="table" data-dismiss="modal">
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
<div class="modal fade view_home_demo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content embed-responsive" style="height: 90vh">
        <iframe name="view_home"></iframe>
    </div>
    </div>
</div>
@endsection
@section('js')
<script>
var data,data1,data2;
function getdata(i,n,c)
{
    data = i;
    data1 = n;
    data2 = c;
} 

function add_data(i,n,c)
{
    data.value = i;
    data1.innerText = n;
    data2.innerText = c;
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