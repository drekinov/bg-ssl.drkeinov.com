@extends('layouts.default')

@section('content')
    <div class="row">

        <div class="col-md-8">
            <p>About ...</p>
        </div>
        <div class="col-md-4">
        @if(!empty(Config::get('app.twitter_widget_id')))
            <a class="twitter-timeline" href="https://twitter.com/search?q=%23bgssl" data-widget-id="{{ Config::get('app.twitter_widget_id') }}" height="500">Tweets about "#bgssl"</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        @endif
        </div>
    </div>

@stop
