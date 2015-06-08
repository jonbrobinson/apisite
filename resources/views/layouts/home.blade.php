<?php
$videos = array(
        "z16qdpmsqKU",
        "WbYwOaJpNSs",
        "BOGkaxewWKM",
        "jrl268IJI30"
);

$link = $_POST['link'];

public function getEmbeddedString ($link)
{
    $this->strin
}
?>
@extends('layouts.default')
@section('content')
    @foreach($videos as $vidLink)

    <div class="row">
        <div class="col-xs-12 col-md-6">
            <a href="#" class="thumbnail">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$vidLink?>" frameborder="0" allowfullscreen></iframe>
            </a>
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-md-6">
            <h1>Twitter</h1>
        </div>

        <div class="col-md-12">
            <a class="twitter-timeline" href="https://twitter.com/yoJayRowe" data-widget-id="607032484061011969">Tweets by @yoJayRowe</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

        </div>
    </div>
@stop

@section('javascript')

@stop