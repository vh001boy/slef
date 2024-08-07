<html lang="en"><head>
  <meta charset="UTF-8">
  <title>告白熱氣球</title>

<style>
@charset "UTF-8";
* {
  position: relative;
  font-family: "Dancing Script", "微軟正黑體";
}

html, body {
  width: 100%;
  height: 100%;
  margin: 0px;
  margin-top: 0px;
  margin-left: 100px;
  padding: 0px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #01010e;
}

label {
  cursor: pointer;
}

.daybox {
  width: 70%;
  max-width: 600px;
  background-color: rgba(219, 33, 222, 0.15);
  box-shadow: 1px 5px 20px #A0CFF8;
  border-radius: 50% 50% 20px 20px;
}
.daybox:hover .bottom {
  height: 150px;
}
.daybox:hover .dayweather {
  opacity: 1;
  top: 0px;
}

.text_area {
  color: #D8DCDD;
  display: inline-block;
  position: absolute;
  bottom: 25px;
  left: 20px;
}
.text_area .temperature {
  font-size: 75px;
  line-height: 60px;
}
.text_area .infos {
   color: #fff;
  font-size: 20px;
  opacity: 0;
}

.top {
  height: 330px;
  background: linear-gradient(45deg, #333, #A0CFF8);
  background-size: 500% 500%;
  animation: daylight 10s ease infinite;
  transition-duration: 0.1s;
  border-radius: 50% 50% 10px 10px;
}
.top .BeHeart {
  position: absolute;
  width: 100%;
  max-width: 400px;
  height: 330px;
  left: 0px;
  top: 0px;
  border: none;
  background: linear-gradient(45deg, #EE1F92, #A0CFF8);
  background-size: 500% 500%;
  animation: daylight 10s ease infinite;
}
.top .BeHeart:before {
  position: absolute;
  content: "";
  left: 0px;
  top: 50;
  width: 400px;
  height: 330px;
  background: linear-gradient(45deg, #EE1F92, #A0CFF8);
  background-size: 500% 500%;
  animation: daylight2 10s ease infinite;
  transition-duration: 0.1s;
  border-radius: 200px 200px 0 0;
  transform: rotate(-45deg);
  transform-origin: 0 100%;
}
.top .BeHeart:after {
  position: absolute;
  content: "";
  right: 0px;
  top: 0;
  width: 400px;
  height: 330px;
  background: linear-gradient(45deg, #EE1F92, #A0CFF8);
  background-size: 500% 500%;
  animation: daylight3 10s ease infinite;
  border-radius: 200px 200px 0 0;
  transform: rotate(-45deg);
  transform-origin: 0 100%;
  right: 0;
  transform: rotate(45deg);
  transform-origin: 100% 100%;
  transition-delay: -5s;
}
@keyframes daylight {
  0% {
    background-position: 80% 10%;
  }
  50% {
    background-position: 10% 80%;
  }
  100% {
    background-position: 80% 10%;
  }
}
@keyframes daylight2 {
  0% {
    background-position: 60% 0%;
  }
  50% {
    background-position: 0% 60%;
  }
  100% {
    background-position: 60% 0%;
  }
}
@keyframes daylight3 {
  0% {
    background-position: 100% 0%;
  }
  50% {
    background-position: 20% 80%;
  }
  100% {
    background-position: 100% 0%;
  }
}
.top .temsvg {
  width: 150%;
  height: 100%;
}
.top .temsvg polyline {
  fill: none;
  stroke: #fff;
  opacity: 0.5;
}
.top .temsvg text {
  font-size: 15px;
  transform: translate(-7px, -5px);
  fill: #fff;
  letter-spacing: 3px;
  opacity: 0;
}
.top .temsvg circle {
  fill: #fff;
  opacity: 0.5;
}
.top .moon {
  width: 50px;
  height: 50px;
  border: none;
  border-radius: 100%;
  box-shadow: 15px -15px;
  position: absolute;
  left: -30px;
  top: 60px;
  animation: shadowmove 20s infinite;
}
@keyframes shadowmove {
  0% {
    box-shadow: 1px -1px #EEEE1F;
    transform: translate(-1px, 1px);
  }
  50% {
    box-shadow: 30px -30px #EEEE1F;
    transform: translate(-30px, 30px);
  }
  100% {
    box-shadow: 1px -1px #EEEE1F;
    transform: translate(-1px, 1px);
  }
}

.heart {
  position: absolute;
  width: 100px;
  height: 90px;
  left: 250px;
  top: 200px;
  border: none;
  animation: heartbeat 3s infinite;
}
.heart:before {
  position: absolute;
  content: "";
  left: 50px;
  top: 0;
  width: 50px;
  height: 80px;
  background: #EE1F92;
  border-radius: 50px 50px 0 0;
  transform: rotate(-45deg);
  transform-origin: 0 100%;
  box-shadow: 1px 5px 3px;
}
.heart:after {
  position: absolute;
  content: "";
  left: 50px;
  top: 0;
  width: 50px;
  height: 80px;
  background: #EE1F92;
  border-radius: 50px 50px 0 0;
  transform: rotate(-45deg);
  transform-origin: 0 100%;
  left: 0;
  transform: rotate(45deg);
  transform-origin: 100% 100%;
  box-shadow: 10px 5px 3px;
}

@keyframes heartbeat {
  0% {
    transform: translate(0px, 0px) scale(1.2);
  }
  50% {
    transform: translate(0px, -10px) scale(0.5);
  }
  100% {
    transform: translate(0px, 0px) scale(1.2);
  }
}
.snow {
  width: 5px;
  height: 5px;
  position: absolute;
  background-color: #B6F8FA;
  border: none;
  border-radius: 50%;
  left: 20px;
  bottom: 20px;
  animation: snow 1s infinite linear;
  transition-duration: 0.5s;
}

.snow1 {
  left: 50px;
  bottom: -10px;
  animation-delay: -0.8s;
}

.snow2 {
  left: 80px;
  bottom: 20px;
  animation-delay: -0.5s;
}

@keyframes snow {
  0% {
    transform: translate(0px, 0px);
    opacity: 1;
  }
  100% {
    transform: translate(0px, 20px);
    opacity: 0;
  }
}
.bottom {
  height: 10px;
  display: flex;
  justify-content: center;
  overflow: hidden;
  transition-duration: 2s;
}
.bottom .dayweather {
  display: inline-block;
  width: calc(100% / 7 - 5px);
  text-align: center;
  opacity: 0;
  transition-duration: 2s;
  top: 20px;
}
.bottom .dayweather h3 {
  font-size: 12px;
  color: #fff;
  font-weight: 400;
  letter-spacing: 1px;
}

.bottom .dayweather p {
  position: absolute;
  bottom: -5px;
  vertical-align: middle;
  font-size: 5px;
  opacity: 0.5;
  margin: auto;
}

@keyframes heartmove {
  0% {
    transform: translate(0px, 0px);
  }
  50% {
    transform: translate(0px, -10px);
  }
  100% {
    transform: translate(0px, 0px);
  }
}
.dayweather:nth-child(1) {
  transition-delay: 0s;
}
.dayweather:nth-child(1) a {
  cursor: alias;
  top: -10px;
}

.dayweather:nth-child(2) {
  transition-delay: 0.7s;
}

.dayweather:nth-child(3) {
  transition-delay: 0.9s;
}

.dayweather:nth-child(4) {
  transition-delay: 1.1s;
}

.dayweather:nth-child(5) {
  transition-delay: 1.3s;
}

.dayweather:nth-child(6) {
  transition-delay: 1.5s;
}

.dayweather:nth-child(7) {
  transition-delay: 0.5s;
}

.moon, .cloud {
  transition-duration: 1s;
}

.temsvg circle {
  transition: 0.5s;
}
.temsvg text {
  transition: 1s 0.5s;
}
.temsvg polyline {
  transition: 1.5s 0.5s;
}

#SwichNight {
  display: none;
}

#SwichNight:checked + .top .moon, #SwichNight:checked + .top .cloud {
  opacity: 0.5;
}
#SwichNight:checked + .top .temsvg circle, #SwichNight:checked + .top .temsvg polyline, #SwichNight:checked + .top .temsvg text {
  opacity: 1;
}
#SwichNight:checked + .top .infos {
  opacity: 0.5;
}


.snowflake {
  position: fixed;
  top: -10px;
  z-index: 9999;
  pointer-events: none;
  opacity: 0.8;
  color: #FFF;
}


/*audio{
      display: none;
    }*/

</style>

  <script>
  /* Add this js to your website */
function createSnowflake() {
  const snowflake = document.createElement('div');
  snowflake.classList.add('snowflake');
  snowflake.textContent = '•';
  snowflake.style.fontSize = Math.random() * 24 + 10 + 'px';
  snowflake.style.left = Math.random() * window.innerWidth + 'px';
  snowflake.style.animation = `fall ${Math.random() * 4 + 4}s linear infinite, sideWays ${Math.random() * 2 + 1}s ease-in-out infinite`;

  document.body.appendChild(snowflake);

  setTimeout(() => {
    snowflake.remove();
  }, Math.random() * 4000 + 4000);
}

document.styleSheets[0].insertRule('@keyframes fall { 0% { top: -50px; } 100% { top: 100vh; } }', document.styleSheets[0].cssRules.length);
document.styleSheets[0].insertRule('@keyframes sideWays { 0%, 100% { transform: translateX(0); } 50% { transform: translateX(20px); } }', document.styleSheets[0].cssRules.length);

setInterval(createSnowflake, 200);


</script>

  
  
</head>

<body translate="no">
	<!-- <audio autoplay="autoplay" loop="loop" preload="auto"
       src="mp4/127953810.mp4">
 	</audio> -->


  <div class="daybox">
  <label>      
    <input id="SwichNight" type="checkbox">
    <div class="top">
      <div class="BeHeart"></div>
      <div class="moon"> </div>
      <div class="heart" onclick="playAudio();" style="z-index: 999; text-align:center;line-height: 60px;color:#fff;">
      	<span style="z-index: 1000;">寶貝點我</span>
      </div>
      <div class="text_area">
        <div class="temperature">520</div>
        <div class="infos">
        	<BR>
          <div class="address">好愛與你的美一天</div>
          <div class="time">小米菓我愛你 </div>2024/08/10
        </div>
      </div>
      <svg class="temsvg" viewBox="200 40 200 200">
        <circle cx="140" cy="50" r="2"></circle>
        <text x="153" y="60">They say when you meet</text>
        <circle cx="90" cy="120" r="2"></circle>
        <text x="193" y="90">the love of your life time</text>
        <circle cx="200" cy="220" r="2"></circle>
        <text x="233" y="110"></text>
        <circle cx="310" cy="120" r="2"></circle>
        <text x="180" y="130">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stops,and that’s true!</text>
        <circle cx="260" cy="50" r="2"></circle>
        <text x="313" y="155"></text>
        <polyline points="200,80 140,50 90,120 200,220 310,120 260,50 200,80"></polyline>
      </svg>
    </div>
    <div class="bottom">
      <div class="dayweather">
        <h3>星期日</h3>
        <img alt="Love" src="img/00.png" width="75" height="75">
      </div>
      <div class="dayweather">
        <h3>星期一</h3>
        <img alt="Love" src="img/01.png" width="75" height="75">
      </div>
      <div class="dayweather">
        <h3>星期二</h3>
        <img alt="Love" src="img/02.png" width="75" height="75">
      </div>
      <div class="dayweather">
        <h3>星期三</h3>
        <img alt="Love" src="img/03.png" width="75" height="75">
      </div>
      <div class="dayweather">
        <h3>星期四</h3>
        <img alt="Love" src="img/04.png" width="75" height="75">
      </div>
      <div class="dayweather">
        <h3>星期五</h3>
        <img alt="Love" src="img/05.png" width="75" height="75">
      </div>
      <div class="dayweather">
        <h3>星期六</h3>
        <img alt="Love" src="img/06.png" width="75" height="75">
      </div>
    </div>
  </label>
</div>
  
  
  



</body></html>

<script type="text/javascript">

function playAudio() {
　const audio = document.createElement("audio");
　audio.src = "mp4/127953810.mp4";
　audio.loop="loop";
　audio.autoplay =true;
　audio.play();
}


</script>