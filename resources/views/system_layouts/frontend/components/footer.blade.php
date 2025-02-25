<div class="footer-widgets bg-deepgrey dark">
    <div class="container">
        <div class="row">
            <style>
                .responsive {
                    width: 30px !important;
                    height: auto;
                }
            </style>
            {{--<marquee class="cold-md-12">
                <ul class="col-md-12" style="display: inline !important;">
                <?php $lastfmData = get_last_fm_data(); ?>
                @foreach($lastfmData['recent_tracks'] as $track)
                    <li style="display: inline !important;" class="col-md-4">
                        <a target="_blank" href="{{ $track['url'] }}">
                            <img src="{{$track['image'][1]['#text']}}" alt="Italian Trulli" height="20" class="responsive">
                            {{$track['artist']['#text'] . ' - ' . $track['name']}} ({{$track['album']['#text']}})
                        </a>
                    </li>
                @endforeach
                </ul>
            </marquee>--}}

            {{--@if(config('navigationmenu.footer_navigation'))
                <div class="col-lg-4 widget">
                    <h3 class="widget-title">QUICK LINKS</h3>
                    <ul class="useful-links">
                        @foreach(config('navigationmenu.footer_navigation') as $key => $value)
                            <li class="mb-3">
                                <a href="{{$value['url_link']}}">
                                    {{$value['title']}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div><!-- / column-->
            @endif--}}

            {{--@if(config('social.social_media'))
                <div class="col-lg-4 widget">
                    <h3 class="widget-title">SOCIAL LINKS</h3>
                    <ul class="useful-links">
                        @foreach(config('social.social_media') as $key => $value)
                            <li class="mb-3">
                                <a href="{{$value['link']}}" target="_blank">
                                    <i class="{{$value['icon']}}"></i>
                                    {{$value['username']}} (on {{$value['title']}} )
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div><!-- / column-->
            @endif--}}

            {{--<div class="col-lg-4 widget">
                <h3 class="widget-title">RECENT PROJECTS</h3>
                <div class="project-widget">
                    <div class="project-small">
                        <a href="#x"><img src="{{ URL::asset('frontend_theme/basix/images/project-small1.jpg') }}" alt=""></a>
                        <a href="#x"><img src="{{ URL::asset('frontend_theme/basix/images/project-small2.jpg') }}" alt=""></a>
                        <a href="#x"><img src="{{ URL::asset('frontend_theme/basix/images/project-small3.jpg') }}" alt=""></a>
                        <a href="#x"><img src="{{ URL::asset('frontend_theme/basix/images/project-small4.jpg') }}" alt=""></a>
                        <a href="#x"><img src="{{ URL::asset('frontend_theme/basix/images/project-small5.jpg') }}" alt=""></a>
                        <a href="#x"><img src="{{ URL::asset('frontend_theme/basix/images/project-small6.jpg') }}" alt=""></a>
                        <a href="#x"><img src="{{ URL::asset('frontend_theme/basix/images/project-small7.jpg') }}" alt=""></a>
                        <a href="#x"><img src="{{ URL::asset('frontend_theme/basix/images/project-small8.jpg') }}" alt=""></a>
                    </div><!-- / project-small -->
                </div><!-- / project-widget -->
            </div><!-- / column-->--}}

        </div><!-- / row -->
    </div><!-- / container -->
</div>
<!-- / footer-widgets -->

<a href="#top" class="scroll-to-top is-hidden smooth-scroll" data-nav-status="toggle"><i class="md-icon dp18">expand_less</i></a>

<footer class="dark bg-inverse">
    <div class="container-fluid text-center">
        <p class="copyright-text">
            &copy;{{config('app.created_first_date')}} - {{date("Y")}}
            <a href="{{config('app.app_url')}}" target="_blank" style="color: white">
                {{config('app.created_by_copyrights')}}
            </a>.
            All Rights Reserved.
        </p>
        {{--<p>
            Theme: Copyright © 2017. BASIX by
            <a href="https://kingstudio.ro" target="_blank">KingStudio</a>.
            All Rights Reserved.
        </p>--}}
    </div>
    <!-- / container-fluid -->
</footer>
