<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="assets\css\login.css" >
    <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets\css\app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">
    <title>Đăng nhập</title>
</head>
<body>
    @if(count($errors)>0)
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $err)
                    {{$err}} <br>
                @endforeach
            </div>
    @endif
    @if (session('thongbao'))
        <div class="alert alert-danger" role="alert">
            {{session('thongbao')}}
        </div>
    @endif
    <div class="flex">
        <div class="container-login">
            <header>Đăng nhập</header>
            <form action="ad/login" class="form-horizontal" enctype='multipart/form-data' method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="input-field">
                    <input type="text" name="email" required>
                    <label>Email or Username</label>
                </div>
                <div class="input-field">
                    <input class="pswrd" type="password" name="password" required>
                    <span class="show">SHOW</span>
                    <label>Password</label>
                </div>
                <div class="button">
                    <div class="inner">
                    </div>
                    <button>LOGIN</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    /*Chèn Fontawesome dô nghen:  https://kit.fontawesome.com/a076d05399.js*/

		var input = document.querySelector('.pswrd');
		var show = document.querySelector('.show');
		show.addEventListener('click', active);
		function active(){
			if(input.type === "password"){
				input.type = "text";
				show.style.color = "#1DA1F2";
				show.textContent = "HIDE";
			}else{
				input.type = "password";
				show.textContent = "SHOW";
				show.style.color = "#111";
			}
		}
	
</script>
</html>