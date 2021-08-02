<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="max-width: 90vw; margin: 15vh auto; width: 60vh" id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            @foreach ($img as $key=>$i)
                @if ($key == 0)
                    <li data-target="#myCarousel" data-slide-to="{{$key}}" class="active"></li>
                @else
                    <li data-target="#myCarousel" data-slide-to="{{$key}}"></li>
                @endif
            @endforeach
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">    
        @foreach ($img as $i)
            <div class="item active ">
                <img style="width: 60vh;height: 60vh;" src="product/{{$i->img}}" alt="Los Angeles">
            </div>
        @endforeach
        {{-- <div class="item active ">
            <img style="width: 60vh;height: 60vh;" src="https://ttol.vietnamnetjsc.vn/images/2018/05/25/13/40/net-cuoi-be-gai-9-1527053440039156820618.jpg" alt="Los Angeles">
        </div>
        <div class="item ">
        <img style="width: 60vh;height: 60vh;" src="https://ttol.vietnamnetjsc.vn/images/2018/05/25/13/40/net-cuoi-be-gai-9-1527053440039156820618.jpg" alt="Chicago">
        </div>
        <div class="item">
        <img style="width: 60vh;height: 60vh;" src="https://ttol.vietnamnetjsc.vn/images/2018/05/25/13/40/net-cuoi-be-gai-9-1527053440039156820618.jpg" alt="New York"> --}}
        </div>
        </div>
    </div>
</body>
</html>