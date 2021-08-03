@extends('ad.layout.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="welcome col-12">
            Welcome!
        </div>
    </div>
</div>
<style>
    
    .welcome{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 12vw;
        height: 60vh;
        line-height: 60vh;
        overflow: hidden;
        text-align: center;
        animation: show 1s linear;
        position: relative;
    }
    @keyframes show {
    0% 
    {
        opacity: 0;
        bottom: -5vh
    }
    25% 
    {
        opacity: 0;
        bottom: -4vh
    }
    100% {
        opacity: 1;
        bottom:0;
    }
    }
</style>
@endsection