
@extends('pages.layout.main')
@section('content')
<style>
    .header{
      background: black;
    }
    #main-container{
      margin-top: 3rem;
    }
  </style>
  <section id="main-container" class="portfolio-static portfolio portfolio-box">
      <div class="container">
          <div class="row">
              <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                  <div id="Demo" class="row wow fadeInDown" data-wow-delay=.5s>
                    @foreach ($p as $i)
                    <div class="col-lg-3 col-sm-4 col-xs-6 portfolio-static-item product tr_{{$i->id_trademark}} di_{{$i->id_distributor}}">
                        <div class="grid ">
                            <figure class="effect-oscar img-9-9">
                                  @if (count(\App\Images::where(['id_post' => $i->id])->get()))
                                  <img id="img_{{$i->id}}" style="width: 100%;height: 100%;" src="product/{{\App\Images::where(['id_post' => $i->id])->pluck('img')->first()}}" alt="">
                                  @else
                                  <img id="img_{{$i->id}}" style="width: 100%;height: 100%;" src="product/default.jpg" alt="">
                                  @endif
                                  <figcaption>
                                      <div onclick="img_load(img_{{$i->id}})">
                                        <a class="link icon-pentagon" data-toggle="modal"
                                        data-target="#viewimg" >
                                            <i class="fa fa-search"></i>                              
                                        </a> 
                                      </div>            
                                  </figcaption>			
                            </figure>
                            <a href="products/{{$i->id}}" class="portfolio-static-desc">
                              <h3 style="height: 3.5rem; overflow: hidden;">{{$i->name}}</h3>
                              @if ($i->price % 3 != 0)
                                  <p style="height: 1rem;"></p>
                                  <p class="price text text-right">@money($i->price) VND</p> 
                              @else
                                  <p style="height: 1rem;" class="text-right price-old">@money($i->price) VND</p>
                                  <p class="price text-right" >@money($i->promotion_price) VND</p>
                              @endif
                          </a>					
                        </div><!--/ grid end -->
                    </div><!--/ item 1 end -->
                    @endforeach
                  </div>                
                    <div class="row">
                        <div id="pagination-container"></div>
                    </div>
            
              </div>

              
              
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <div class="sidebar sidebar-right">
                      <!-- category start -->
                      <div class="widget widget-categories wow fadeInUp" data-wow-delay=.5s>
                          <h3 class="widget-title">THƯƠNG HIỆU</h3>
                          <ul class="category-list clearfix">
                                    <li>
                                        <span class="tr" onclick="fill('product')">
                                            Tất cả
                                        </span>
                                        <span class="posts-count"> 
                                           ({{count($p)}})
                                        </span>
                                    </li>
                              @foreach ($tr as $i)
                                  <li>
                                      <span class="tr" onclick="fill('tr_{{$i->id}}')">
                                        {{$i->name}}
                                      </span>
                                      <span class="posts-count"> 
                                          (
                                              <script>
                                                  document.write(document.getElementsByClassName('tr_{{$i->id}}').length)
                                              </script>
                                          )
                                      </span>
                                  </li>
                              @endforeach
                          </ul>
                      </div><!-- category end -->
                  </div><!--/ Sidebar end -->
              </div><!--/ Sidebar col end -->
          </div><!-- Content row end -->
          
      </div><!-- Container end -->
  </section><!-- Portfolio end -->
  
  <div class="gap-40"></div>
  
  <div class="modal fade" id="viewimg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-lg">
          <div class="modal-body">
            <div style="width: 100%; display: flex">
                <img id="img" style="margin: auto" width="100%" src="" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  
  
  
  <style>
      .price{
          font-size: 1.6rem;
          color: #f71b10;
      }
      .price-old{
          color:#555; 
          font-size: .9em; 
          height: 1rem; 
          text-decoration: line-through;
          font-style: italic;
          overflow: visible
      }
      .tr{
        cursor: pointer;
      }
      .tr:hover{
          color: orangered;
          font-weight: bold
        }
  </style>
  
  
  @endsection
  @section('js')
      <script>
          function fill(id){
            var a = document.getElementsByClassName("product")
            for (let i = 0; i < a.length; i++) {
                a[i].style.display="none"
            }
            var a = document.getElementsByClassName(id)
            for (let i = 0; i < a.length; i++) {
                a[i].style.display= "block"
            }
          }
          function img_load(url)
          {
              document.getElementById('img').src = url.src;
          }
    </script>
  @endsection
  
  