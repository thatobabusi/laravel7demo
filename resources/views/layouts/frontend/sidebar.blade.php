<div class="{{--visible-md visible-lg visible-xl--}} col-md-4 col-lg-3">
    <div class="sidebar">


        <div class="widget hide-while-angular-is-loading">
            <h4 class="sr-only">ADS</h4>
            <a href="https://www.facebook.com/SoulDesignAgency/" target="_blank" class="col-md-12">
            <img src="{{URL::asset(random_pic())}}"
                 class="img-responsive col-md-12" alt="Advertisement" />
            </a>
        </div>

        @if(plugin_is_enabled('Blog Search'))
            <!-- search widget -->
            @include('partials.frontend.sidebar.search')
            <!-- end search widget -->
        @endif

        @if(plugin_is_enabled('Twitter Feed Plugin'))
            <!-- widget twitter feed-->
            @include('partials.frontend.sidebar.twitter')
            <!-- end twitter feed widget -->
        @endif

        @if(plugin_is_enabled('Instagram Feed Plugin'))
            <!-- widget twitter feed-->
            @include('partials.frontend.sidebar.instagram')
            <!-- end twitter feed widget -->
        @endif

        @if(plugin_is_enabled('Blog Recommended'))
            <!-- widget recommended -->
            @include('partials.frontend.sidebar.recommended')
            <!-- end recommended widget -->
        @endif

        @if(plugin_is_enabled('Blog Categories'))
            <!-- widget categories -->
            @include('partials.frontend.sidebar.categories')
            <!-- end categories widget -->
        @endif

        @if(plugin_is_enabled('Blog Tags'))
            <!-- widget tags -->
            @include('partials.frontend.sidebar.tags')
            <!-- end tags widget -->
        @endif

        @if(plugin_is_enabled('Blog Archives'))
            <!-- widget tags -->
            @include('partials.frontend.sidebar.archives')
            <!-- end tags widget -->
        @endif
    </div>
</div>
