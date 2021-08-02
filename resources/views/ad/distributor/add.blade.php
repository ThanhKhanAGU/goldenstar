@extends('ad.layout.index')
@section('content')
<h4 class="header-title mb-4">THÊM NHÀ PHÂN PHỐI</h4>

<form action="ad/distributor/add" method="POST" class="parsley-examples" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">
            Tên
        </label>
        <div class="col-lg-10">
            <input name="name" id="name" 
            data-parsley-length="[5,255]" 
            placeholder="Tên Nhà Phân phối..."
            value=""
            type="text" class="form-control" required="">
        </div>
    </div>
   
<!--  Action  -->
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">
            Sdt
        </label>
        <div class="col-lg-10">
            <input name="telephone" id="telephone" 
            data-parsley-length="[6,12]" 
            placeholder="Số điện thoại..."
            value=""
            type="text" class="form-control" required="">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">
            Email
        </label>
        <div class="col-lg-10">
            <input name="email" id="email" 
            data-parsley-length="[5,255]" 
            placeholder="Email ..."
            value=""
            type="email" class="form-control" required="">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">
            Địa  chỉ
        </label>
        <div class="col-lg-10">
            <input name="place" id="place" 
            data-parsley-length="[5,255]" 
            placeholder="Địa điểm hoạt động..."
            value=""
            type="text" class="form-control" required="">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">
            Hình ảnh liên quan
        </label>
        <div class="col-lg-10">
            <input name="img[]" id="img" 
            type="file" onchange="imgs()" accept="image/*" multiple class="form-control">
            <div id="viewimg_2" style="margin-top: 3px; border: 1px solid #ccc; border-radius: 3px; padding: 5px"></div>
        </div>

    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">
            Giới Thiệu
        </label>
        <div class="col-12">          
            <textarea name="content" id="content" 
            class="form-control" required="">
            </textarea>
        </div>
    </div> 

    
<!-- end Action  -->
    <div class="form-group mb-0">
        <div>
            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                Thêm
            </button>
            <button type="reset" class="btn btn-secondary waves-effect waves-light">
                Cancel
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