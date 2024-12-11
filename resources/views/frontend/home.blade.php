<marquee style="color: #ffe933; font-size: 24px; font-weight: bold;" scrollamount="15">
    {{$setting->headline}}
</marquee>
@php
    $setting = App\Models\Setting::select('logo')->first();

@endphp
<!DOCTYPE html>
<html>

<head>

     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />


    <title> {{$setting->site_name}}</title>
    <link rel="shortcut icon" href="{{asset($setting->favicon)}}">
    <link rel="icon" type="image/png" href="{{asset($setting->favicon)}}">

    <link href="https://vjs.zencdn.net/8.16.1/video-js.css" rel="stylesheet" />


    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" />
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://unpkg.com/video.js@7.10.2/dist/video.js"></script>
    <script src="https://unpkg.com/@videojs/http-streaming@2.4.2/dist/videojs-http-streaming.min.js"></script>

    <style class="clappr-style">
        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 400;
            src: local("Roboto"), local("Roboto-Regular"), url(https://cdn.jsdelivr.net/npm/clappr@latest/dist/38861cba61c66739c1452c3a71e39852.ttf) format("truetype")
        }

        body {
            background: #000 top center;
        }
    </style>

</head>

<body>

    <div class="navbar navbar dark:#000">
        <div class="container d-flex justify-content-between">
            <a href="/"><img src="{{asset($setting->logo)}}" width="60px" height="60px" alt="Test Logo"></a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="btn btn-outline-secondary btn-lg" type="submit"
                    style="border-radius: 50%; width: 50px; height: 50px;">

                    <span><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"
                            style="margin: 2px -4px; font-size: 1.3em;">
                            <path d="M192 277.4h189.7l-43.6 44.7L368 352l96-96-96-96-31 29.9 44.7 44.7H192v42.8z">
                            </path>
                            <path
                                d="M255.7 421.3c-44.1 0-85.5-17.2-116.7-48.4-31.2-31.2-48.3-72.7-48.3-116.9 0-44.1 17.2-85.7 48.3-116.9 31.2-31.2 72.6-48.4 116.7-48.4 44 0 85.3 17.1 116.5 48.2l30.3-30.3c-8.5-8.4-17.8-16.2-27.7-23.2C339.7 61 298.6 48 255.7 48 141.2 48 48 141.3 48 256s93.2 208 207.7 208c42.9 0 84-13 119-37.5 10-7 19.2-14.7 27.7-23.2l-30.2-30.2c-31.1 31.1-72.5 48.2-116.5 48.2zM448.004 256.847l-.849-.848.849-.849.848.849z">
                            </path>
                        </svg></span>
                    {{ __('') }}
                </button>
            </form>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top: 50px">
            <div class="col-12 col-lg-8 mt-4">

                <div class="embed-responsive embed-responsive-16by9">
                    <div id="player" class="embed-responsive-item">
                        <video id="vid1" class="video-js vjs-default-skin vjs-fluid" tabindex="0"
                            crossorigin="anonymous" poster="http://i.imgur.com/xxqm7EE.png" width="640" height="264"
                            controls autoplay preload="auto"
                            data-setup='{ "techOrder": ["html5", "flash", "youtube"], "sources": [{ "type": "application/x-mpegURL","src": "https://indiatodaylive.akamaized.net/hls/live/2014320/indiatoday/indiatodaylive/playlist.m3u8"}]}'></video>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="channel-list">

                    <ul class="nav nav-tabs nav-justified" style=" margin-bottom: 15px;">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" data-type="Bangla">Random</a>
                        </li>

                        @foreach(App\Models\Category::all() as $category)
                            @if ($category->status != 0)
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-type="{{ $category->id }}">{{ $category->name }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                    <ul id="vidlink" class="thumbnail-slider d-flex flex-wrap">

                        @foreach(App\Models\Channel::all()->take(8) as $channel)
                            @if ($channel->name && $channel->status != 0)

                                <li class="Bangla">
                                    <a id="myLink" title="Click" href="javascript:;" class="channel"
                                        data-link="{{ $channel->slug }}"><img src=" {{ asset($channel->logo) }}" alt="" /></a>

                                </li>
                            @endif

                        @endforeach

                        @foreach(App\Models\Channel::all() as $channel)
                            @if ($channel->status != 0)
                                <li class="{{ $channel->category_id }}"><a id="myLink" title="Click" href="javascript:;"
                                        class='channel' data-link="{{ $channel->slug }}"><img src="{{ asset($channel->logo) }}"
                                            alt=""></a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>


            <div class="col-12 col-lg-4">
                <a href='https://www.versicherungen.at/private-krankenversicherung/'>priv. Krankenversicherung</a>
                <script type='text/javascript'
                    src='https://www.freevisitorcounters.com/auth.php?id=a6e947911c99b145025eea021d5ee9441b9220e0'></script>
                <script type="text/javascript"
                    src="https://www.freevisitorcounters.com/en/home/counter/1265233/t/6"></script>
            </div>

            <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
            <script src="{{asset('frontend/js/hls.js')}}"></script>
            <script src="{{asset('frontend/js/scripts2aec.js')}}"></script>

            <script src="{{asset('frontend/js/scripts.js')}}"></script>
            <script src="{{asset('frontend/js/player.js')}}"></script>
            <script src="{{asset('frontend/js/clappr.min.js')}}"></script>
            <script src="{{asset('frontend/js/clappr-chromecast-plugin.min.js')}}"></script>
            <script src="{{asset('frontend/js/dash.all.min.js')}}"></script>
            <script src="{{asset('frontend/js/Youtube.js')}}"></script>
            <script src="{{asset('frontend/js/Youtube.min.js')}}"></script>

            <script src="https://cdn.jsdelivr.net/npm/@commonninja/node-sdk@1.1.37/dist/src/index.min.js"></script>
            <script src="https://cdn.commoninja.com/sdk/latest/commonninja.js" defer=""></script>
            <script src="https://cdn.commoninja.com/scripts/sdk/main.js" id="cn-main-script" async=""></script>

            <script>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        toastr.error("{{$error}}")
                    @endforeach
                @endif
            </script>
            <script>
                $(document).ready(function () {
                    $('.auto_click').click();
                })
            </script>
</body>

</html>
