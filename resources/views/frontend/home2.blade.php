<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Eleven Plus Stream</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet" />
    <link href="{{ asset('frontend2/css/style.css') }}" rel="stylesheet" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="{{ asset('frontend2/js/clappr.min.js') }}"></script>
    <link href="{{ asset('frontend2/css/custom.css') }}" rel="stylesheet" />
    <script type="text/javascript" src="{{ asset('frontend2/js/clappr-chromecast-plugin.min.js') }}"></script>
    <style class="clappr-style">
        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 400;
            src: local("Roboto"), local("Roboto-Regular"),
                url(https://cdn.jsdelivr.net/npm/clappr@latest/dist/38861cba61c66739c1452c3a71e39852.ttf) format("truetype");
        }

        body {
            background: #000 url(img/bgu.jpg) top center;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top: 50px">
            <div class="col-12 col-lg-8">
                <div class="embed-responsive embed-responsive-16by9">
                    <div id="player" class="embed-responsive-item">
                        <video id="vid1" class="video-js vjs-default-skin vjs-fluid"
                            poster="http://i.imgur.com/xxqm7EE.png" width="640" height="360" controls autoplay
                            preload="none"
                            data-setup='{ "techOrder": ["html5", "flash", "youtube"], "sources": [{ "type": "application/x-mpegURL", "src": "https://indiatodaylive.akamaized.net/hls/live/2014320/indiatoday/indiatodaylive/playlist.m3u8"}]}'></video>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="channel-list">
                    <ul class="nav nav-tabs nav-justified" style="margin-bottom: 15px">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" data-type="Bangla">Bangla</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-type="English">English</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-type="Hindi">Hindi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-type="Sports">Sports</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-type="Cartoon">Cartoon</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-type="Others">Others</a>
                        </li>
                    </ul>
                    <ul id="vidlink" class="thumbnail-slider d-flex flex-wrap">


                        <li class="Bangla">
                            {{-- @foreach ($channels as $channel) --}}
                                <a id="myLink" title="Click" href="javascript:;" class="channel"
                                data-link="https://indiatodaylive.akamaized.net/hls/live/2014320/indiatoday/indiatodaylive/playlist.m3u8"><img src="img/gtv.jpg" alt="" /></a>


                        </li>
                        {{-- @endforeach --}}
                    </ul>

                </div>

            </div>

        </div>
    </div>

    <script src="https://unpkg.com/video.js@7.10.2/dist/video.js"></script>
    <script src="https://unpkg.com/@videojs/http-streaming@2.4.2/dist/videojs-http-streaming.min.js"></script>
    <script src="{{ asset('frontend2/js/scripts.js') }}"></script>
</body>

</html>
