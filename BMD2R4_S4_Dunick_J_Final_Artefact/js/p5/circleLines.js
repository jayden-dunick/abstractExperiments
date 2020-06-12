var cont = document.getElementById('container')
var x = 10;
var y = 10;
var x2 = cont.clientWidth;
var y2 = cont.clientHeight;

function setup() {
    var myCanvas = createCanvas(screen.width, screen.height);
     myCanvas.parent("container");
    background(50);
}

function draw() {    
     stroke(1);
 line(x,y, mouseX, mouseY);
    stroke(255);
    line(x2-10, y2-10, mouseX, mouseY);
    x++;
    x2--;
}
document.addEventListener('contextmenu', event => event.preventDefault());

addEventListener("mousedown", function(e){ if(e.button == 1){ e.preventDefault(); } });
