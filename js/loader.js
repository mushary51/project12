
var ctx = document.getElementById('circularLoader').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height;
var diff;
var sim;
function progressSim(){
  diff = ((al / 100)* Math.PI*2*10).toFixed(2);
  ctx.clearRect(0, 0, cw, ch);
  ctx.lineWidth = 17;
  ctx.fillStyle = '#4285f4';
  ctx.strokeStyle = "#4285f4";
  ctx.textAlign = "center";
  ctx.font="28px monospace";
  ctx.fillText(al+'%', cw*.52, ch*.5+5, cw+12);
  ctx.beginPath();
  ctx.arc(100, 100, 75, start, diff/10+start, false);
  ctx.stroke();
  if(al >= 100){
    clearTimeout(sim);

    myModal.show();
    loader.style.display ='none';
    confetti();
  }
  al++;
}

const win = document.querySelector("#winner");
const loader = document.querySelector(".loader-con");

var myModal = new bootstrap.Modal(document.getElementById('modal'), {
  keyboard: false
})

win.addEventListener('click', function(){
  loader.style.display ='block';
  sim = setInterval(progressSim, 20);
});









var sim ;
var countDownDate = new Date("feb 11, 2025 15:37:25").getTime();
var counter = document.getElementById("counter");

var x = setInterval(function() {

 
  var now = new Date().getTime();

 
  var distance = countDownDate - now;


  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);


  counter.innerHTML = days + "يوم " + hours + "ساعة "
  + minutes + "دقيقة " + seconds + "ثانية ";


  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "لقد انتهت المسابقة";
  }
}, 1000);











