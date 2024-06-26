<div class="collapse bg-inverse" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 py-4">
                <h4 class="text-white">{{ __('main.about') }}</h4>
                <p class="text-muted"></p>
            </div>
            <div class="col-sm-4 py-4">
                <h4 class="text-white">{{ __('main.menu') }}</h4>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-inverse bg-inverse">
    <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand">{{ __('main.title') }}</a>
        @include('layouts.partials.change-language')
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</div>