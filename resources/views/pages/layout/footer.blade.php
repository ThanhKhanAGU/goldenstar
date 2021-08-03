<!-- Footer start -->
<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 footer-widget footer-about-us">
                <h3 class="widget-title">Goldenstar Corp</h3>
                <!-- <p>We are a awward winning multinational company. We believe in quality and standard worldwide.</p> -->
                <h4>Địa chỉ</h4>
                <p>{{$dt['dc']}}</p>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Email:</h4>
                        <p>{{$dt['mail']}}</p>
                    </div>
                    <div class="col-md-6">
                        <h4>Phone No.</h4>
                        <p>{{$dt['sdt']}}</p>
                    </div>
                </div>
                <form action="#" role="form">
                    <div class="input-group subscribe">
                        <input type="email" class="form-control" placeholder="Email Address" required="">
                        <span class="input-group-addon">
                            <button class="btn" type="submit"><i class="fa fa-envelope-o"> </i></button>
                        </span>
                    </div>
                </form>
            </div>
            <!--/ end about us -->

        </div><!-- Row end -->
    </div><!-- Container end -->
</footer>
<!-- Footer end -->

<section id="copyright" class="copyright angle">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="footer-social unstyled">
                    <li>
                        <a title="Twitter" href="{{asset('/')}}">
                            <span class="icon-pentagon wow bounceIn">G</span>
                        </a>
                        <a title="Facebook" href="{{asset('/')}}">
                            <span class="icon-pentagon wow bounceIn">O</span>
                        </a>
                        <a title="Google+" href="{{asset('/')}}">
                            <span class="icon-pentagon wow bounceIn">L</span>
                        </a>
                        <a title="linkedin" href="{{asset('/')}}">
                            <span class="icon-pentagon wow bounceIn">D</span>
                        </a>
                        <a title="Pinterest" href="{{asset('/')}}">
                            <span class="icon-pentagon wow bounceIn">E</span>
                        </a>
                        <a title="Skype" href="{{asset('/')}}">
                            <span class="icon-pentagon wow bounceIn">N</span>
                        </a>
                        <a title="Dribble" href="{{asset('/')}}">
                            <span class="icon-pentagon wow bounceIn">S</span>
                        </a>
                        <a title="Dribble" href="{{asset('/')}}">
                            <span class="icon-pentagon wow bounceIn">T</span>
                        </a>
                        <a title="Dribble" href="{{asset('/')}}">
                            <span class="icon-pentagon wow bounceIn">A</span>
                        </a>
                        <a title="Dribble" href="{{asset('/')}}">
                            <span class="icon-pentagon wow bounceIn">R</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
            <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
        </div>
    </div>
    <!--/ Container end -->
</section>
<!--/ Copyright end -->