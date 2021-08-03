
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
                    @foreach ($p as $key=>$i)
                    <div  id="k_{{$key}}" 
                    class=" col-lg-3 col-sm-4 col-xs-6 portfolio-static-item 
                    product tr_{{$i->id_trademark}}
                    di_{{$i->id_distributor}}">
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
                              @if ($i->promotion_price)
                                <p style="height: 1rem;" class="text-right price-old">@money($i->price) VND</p>
                                <p class="price text-right" >@money($i->promotion_price) VND</p>
                              @else
                                <p style="height: 1rem;"></p>
                                <p class="price text text-right">@money($i->price) VND</p> 
                              @endif
                          </a>					
                        </div><!--/ grid end -->
                    </div><!--/ item 1 end -->
                    @endforeach
                  </div>                
                    <div class="row">
                        <nav aria-label="Page navigation example">
                            <div id="view_pagi" class="pagination">
                            </div>
                          </nav>
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
      .fill{
        display: none;
      }
      .p{
        display: none;
      }
      .page-item
      {
          width: 30px;
          height: 30px;
          line-height: 30px;
          border: 1px solid orangered;
          display: inline-block;
          text-align: center;
          margin: 0px;
          cursor: pointer;
          transition: 100ms all linear
      }
      .page-item.active
      {
        color: white;
        background: orangered;
      }
      .page-item:hover{
        color: white;
        background: orangered;
      }
  </style>
  
  
  @endsection
  @section('js')
      <script>
          function fill(id){
            var a = document.getElementsByClassName("product")
            for (let i = 0; i < a.length; i++) {
               a[i].classList.remove("p")
               if(a[i].classList.contains(id))
               {
                    a[i].classList.remove("fill")
               }else
               {
                    a[i].classList.add("fill")
               }
            }
            pary(1);
          }
          function img_load(url)
          {
              document.getElementById('img').src = url.src;
          }
          function pary(page_select)
          {
            var a = document.getElementsByClassName("product");
            var b =[];
            for (let i = 0; i < a.length; i++) {
                if(!a[i].classList.contains("fill"))
                {
                    b.push(a[i])
                    
                }   
            }
            let sl_page = parseInt(b.length/12) + ((b.length%12>0)?1:0);
            let view_pagi = document.getElementById("view_pagi");
            view_pagi.innerHTML = "Trang:";
            for (let i = 0; i < sl_page; i++) {
                view_pagi.innerHTML+=`
                <div onclick="pary(${i+1})" class="page-item ${(i==(page_select-1))?'active':''}">${i+1}</div>`
            }

            for (let i = 0; i < b.length; i++) {
                
                if(12*(page_select-1)<=i&&i<12*(page_select))
                {
                    b[i].classList.remove("p")
                }else
                {
                    b[i].classList.add("p")
                }

            }
            size();
          }
          pary(1)
    </script>
  @endsection
  
  