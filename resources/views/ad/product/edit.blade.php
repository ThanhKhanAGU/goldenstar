@extends('ad.layout.index')
@section('content')
<h4 class="header-title mb-4">SỬA Sản Phẩm</h4>

<form action="ad/post/edit/{{$p->id}}" method="POST" class="parsley-examples" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="type" value="ps">
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">
            Tên
        </label>
        <div class="col-lg-10">
            <input name="name" id="name" 
            data-parsley-length="[5,255]" 
            placeholder="Tiêu đề bài viết..."
            value="{{$p->name}}"
            type="text" class="form-control" required="">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">
            Giá Bán
        </label>
        <div class="col-lg-10">
            <input name="price" id="price"
            placeholder="Giá bán sản phẩm..."
            value="{{$p->price}}"
            type="number" class="form-control" required="">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">
            Giá K.Mãi
        </label>
        <div class="col-lg-10">
            <input name="promotion_price" id="promotion_price"
            placeholder="Giá khuyễn mãi sản phẩm..."
            value="{{$p->promotion_price}}"
            type="number" class="form-control" >
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">
            Thương hiệu
        </label>
        <div class="col-lg-10">
            <select id="id_trademark" name="id_trademark" 
            class="form-control" value="{{$p->id_trademark}}">
            @foreach ($tr as $i)
                <option 
                @if ($p->id_trademark == $i->id)
                    selected = 'selected';
                @endif
                value="{{$i->id}}">{{$i->name}}</option>
            @endforeach 
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">
            Phân phối bởi
        </label>
        <div class="col-lg-10">
            <select id="id_distributor" name="id_distributor" 
            class="form-control" value="">
            @foreach ($di as $i)
            <option
                @if ($p->id_distributor == $i->id)
                    selected = 'selected';
                @endif
                 value="{{$i->id}}">{{$i->name}}</option>
            @endforeach 
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">
            Hình ảnh liên quan
        </label>
        <div class="col-lg-10">
            <input name="img[]" id="img" 
            type="file" onchange="imgs()" accept="image/*" multiple class="form-control">
            <div id="viewimg_2" style="margin-top: 3px; border: 1px solid #ccc; border-radius: 3px; padding: 5px">
            @foreach ($p->images as $i)
                <img height="75px" class="img_view_item" 
                width="100px" src="product/{{$i->img}}" alt="">
            @endforeach
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">
            Giới Thiệu
        </label>
        <div class="col-12">          
            <textarea name="content" id="content" 
            class="form-control" required="">
            {!!$p->content!!}
            </textarea>
        </div>
    </div> 

    
<!-- end Action  -->
    <div class="form-group mb-0">
        <div>
            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                Lưu thay đổi
            </button>
        </div>
    </div>
</form>
@endsection
@section('js')
<script src="assets/libs/ckeditor/ckeditor.js"></script>
<script>
    function imgs()
    {
        var view = document.getElementById("viewimg_2");
        var input = document.getElementById("img");
        view.innerHTML = "";
        for (let i = 0; i < input.files.length; i++) {
            view.innerHTML +=`<img height="75px" class="img_view_item" width="100px" src="" alt="">`;   
        }
        var img = document.getElementsByClassName("img_view_item");

        for (let i = 0; i < input.files.length; i++) {
            let fr = new FileReader();
            fr.onload = function () {
                img[i].src = fr.result;
            }
            fr.readAsDataURL(input.files[i]);
        }

        
         
    }
    function loadimg()
    {
        var f = document.getElementById('image');
        var img = document.getElementById('viewimg-img')
        var fr = new FileReader();
        fr.onload = function () {
            img.src = fr.result;
        }
        fr.readAsDataURL(f.files[0]);
        size();
    }
    CKEDITOR.replace('content',{
        filebrowserImageUploadUrl: "{{url('uploads-cheditor?_token='.csrf_token()) }}",
        filebrowserUploadMethod: "form",
        filebrowserBrowseUrl:"{{url('file-cheditor?_token='.csrf_token()) }}"
    });
    function size()
    {
        var mapElement = document.getElementsByClassName("img-6-9");
        for(i=0;i<mapElement.length;i++)
        {
            mapElement[i].style.height = mapElement[i].offsetWidth*6/9+"px";
        
        }
        var mapElement = document.getElementsByClassName("img-3-9");
        for(i=0;i<mapElement.length;i++)
        {
            mapElement[i].style.height = mapElement[i].offsetWidth*4/9+"px";
        
        }
    }
    window.addEventListener("resize",size);
    size();

</script>
<script src="assets\libs\switchery\switchery.min.js"></script>
<script src="assets\js\pages\form-advanced.init.js"></script>
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
    #cke_75{
        visibility: hidden;
    }
</style>   
<link href="assets\libs\switchery\switchery.min.css" rel="stylesheet" type="text/css">
@endsection