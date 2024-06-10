<html>
  <head>
    <title>TVBD Sports</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="{{asset('frontend/playerjs.css')}}" />
    <script src="{{asset('frontend/playerjs.js')}}" type="text/javascript"></script>
  </head>
  <body>
    <!--nav><center><img src="" height="50px" width="256px"></center></nav-->
    <main>
      <div id="channels">
        <h2 class="category">Global</h2>
        <div class="channel_collapse">
          <div
            class="channel"
            onclick="play('https://indiatodaylive.akamaized.net/hls/live/2014320/indiatoday/indiatodaylive/playlist.m3u8')"
          >
            <img alt="Stream" src="//i.imgur.com/ceD3hoF.jpg" />
            <p>1</p>
          </div>
        </div>

        <h2 class="category">11plus.live</h2>
        <div class="channel_collapse">
          <div
            class="channel"
            onclick="play('http://tv.11plus.live/live/tsports/index.m3u8')"
          >
            <img alt="Tsports" src="img/tp.jpg" />
            <p>Tsports</p>
          </div>
          <div
            class="channel"
            onclick="play('http://tv.11plus.live/live/stersports1hd/index.m3u8')"
          >
            <img alt="Star Sports 1" src="img/sp1.jpg" />
            <p>Star Sports 1</p>
          </div>
          <div
            class="channel"
            onclick="play('http://tv.11plus.live/live/starsports2/index.m3u8')"
          >
            <img alt="Star Sports 2" src="img/sp1.jpg" />
            <p>Star Sports 2</p>
          </div>
        </div>
      </div>
      <div id="player"></div>
    </main>
    <script>
      var player = new Playerjs({
        id: "player",
        file: "http://172.17.50.112/live/antbd1002/index.m3u8",
        poster:
          "//raw.githubusercontent.com/tvbd/tvbd.github.io/master/img/icc.webp",
      });
    </script>
    <script>
      var coll = document.getElementsByClassName("category");
      var i;

      for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
          this.classList.toggle("active");
          var content = this.nextElementSibling;
          if (content.style.maxHeight) {
            content.style.maxHeight = null;
          } else {
            content.style.maxHeight = content.scrollHeight + "px";
          }
        });
      }
      function play(file) {
        try {
          player.api("file", file);
          player.api("play");
          if (screen.width < 641) {
            window.scroll({
              top: 0,
              left: 0,
              behavior: "smooth",
            });
          }
        } catch (err) {
          alert(err);
        }
      }
    </script>
  </body>
</html>
