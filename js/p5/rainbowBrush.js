var h = 0;

function setup() {
var myCanvas = createCanvas(screen.width, screen.height);
    myCanvas.parent("container");
    background(50);
    x1 = 0;
    x2 = 0;
    
}


function draw() {
    colorMode(HSB, 100);
    fill(h,80,80, 80)
    noStroke();
    ellipse(mouseX, mouseY, 30, 30);
    h = h + 1;
    if(h>100) {
        h = 0;
    }
        if (mouseIsPressed) {
        if (mouseButton === RIGHT) {
        colorMode(RGB, 100);
            background(18);
        }
        if (mouseButton === LEFT) {
           colorMode(RGB, 100);
            background(18);
        }
        if (mouseButton === CENTER) {
            colorMode(RGB, 100);
            background(18);
        }
    }

}

document.addEventListener('contextmenu', event => event.preventDefault());

addEventListener("mousedown", function(e){ if(e.button == 1){ e.preventDefault(); } });

