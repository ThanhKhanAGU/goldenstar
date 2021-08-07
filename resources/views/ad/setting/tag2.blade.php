@extends('ad.layout.index')
@section('content')
<div class="content">
<div class="container-fluid">
    <h3>THƯƠNG HIỆU NỔI BẬT</h3>
    <form id="tag2" target="view_home" action="ad/set/tag2" method="POST"  enctype='multipart/form-data'>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Tên Danh Mục</label>
                                <div class="col-lg-10 ">
                                    <input name="tag2" type="text" class="form-control text-uppercase font-weight-bold" value="{{$dt['tag2']}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <?php $dem = 0;?>
        @foreach (\App\Card::all()->where('id_tag',\App\Information::all()
            ->where('Ten','tag2')->first()->id)->sortBy('id') as $i=>$item)
            <div id="card_{{$i+1}}" class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12" >
                                <button onclick="close_tag(card_{{$i+1}})" style="position: relative; z-index: 20; right: -100%; top:-6%; border: none; background: rgb(185, 8, 8); color: white; border-radius: 5px">
                                    <i class="fas fa-window-close"></i>
                                </button>
                                <input type="hidden" name="id[{{$item->id}}]" value="{{$item->id}}">
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <div class="img-9-9">
                                            <img id="loadimg{{$i}}" style="width: 100%; height: 100%;" 
                                            src="assets_pages/images/img/{{$item->img}}" alt="">
                                        </div>
                                        <input name="img[{{$item->id}}]" onchange="loadimg(loadimg{{$i}},this)" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-8 col-form-label">Tiêu Đề</label>
                                    <div class="col-12 ">
                                        <input type="text" name="title[{{$item->id}}]" class="form-control font-weight-bold" value="{{$item->title}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-8 col-form-label">Nội Dung</label>
                                    <div class="col-12">
                                        <input type="text" name="content[{{$item->id}}]" class="form-control" value="{{$item->content}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            @endforeach
            <div id="addtag"></div>
            <div class="container">
                <button  type="submit" data-toggle="modal" data-target=".view_home_demo" style="font-size: 1.5em; margin-left: 10px" class="font-weight-bold text-uppercase float-right btn btn-primary">
                    <i class="fas fa-save"></i> LƯU THAY ĐỔI
                </button>
                <button onclick="addtag()" type="button"  style="font-size: 1.5em" class="font-weight-bold text-uppercase float-right btn btn-primary">
                    <i class="fas fa-plus-square"></i>
                </button>
            </div>
    </div>
    </form>
<img hidden src="assets_pages/images/img/default." alt="">
@include('ad.layout.select_icon')
<script>
    function loadimg(img,f)
    {
        var fr = new FileReader();
        fr.onload = function () {
            img.src = fr.result;
        }
        fr.readAsDataURL(f.files[0]);
        console.log("Đã Thực hiện");
    }
    function close_tag(id)
    {
        id.parentNode.removeChild(id);
    }
    var sl = parseInt("{{count(\App\Card::all()->where('id_tag',\App\Information::all()
            ->where('Ten','tag1')->first()->id))}}")
    var dem = {{$dem++}}
    function addtag()
    {
        console.log(123);
        var a = document.getElementById('addtag');
        sl++;
        a.outerHTML =`
        <div id="card_${sl}" class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12" style="position: relative">
                                <button onclick="close_tag(card_${sl})" style="position: relative; z-index: 20; right: -100%; top:-6%; border: none; background: rgb(185, 8, 8); color: white; border-radius: 5px">
                                    <i class="fas fa-window-close"></i>
                                </button>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <div class="img-9-9">
                                            <img id="loadimg${sl}" style="width: 100%; height: 100%;" 
                                            src="assets_pages/images/img/default.jpg" alt="">
                                        </div>
                                        <input name="img_n[]" onchange="loadimg(loadimg${sl},this)" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-8 col-form-label">Tiêu Đề</label>
                                    <div class="col-12 ">
                                        <input type="text" name="title_n[]"
                                        class="form-control font-weight-bold" value="DEMO">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-8 col-form-label">Nội Dung</label>
                                    <div class="col-12">
                                        <input type="text" name="content_n[]" class="form-control" value="Lorem ipsum dolor sit amet consectetur, adipisicing elit.">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div id="addtag"></div>
        `;
        size();
    }
</script>
<div class="modal fade view_home_demo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content embed-responsive" style="height: 90vh">
        <iframe name="view_home"></iframe>
    </div>
    </div>
</div>
@endsection
@section('css')
<link href="assets\libs\summernote\summernote-bs4.css" rel="stylesheet" type="text/css">
@endsection
