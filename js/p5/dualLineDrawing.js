function setup() {
    var myCanvas = createCanvas(screen.width, screen.height);
     myCanvas.parent("container");
    background(50);
    x1 = 0;
    x2 = 0;
}

function draw() {    
     stroke(1);
    line(x1-40, 10, mouseX, mouseY);
    line(x1-30, 10, mouseX, mouseY);
    line(x1-20, 10, mouseX, mouseY);
    line(x1-10, 10, mouseX, mouseY);
    line(x1, 10, mouseX, mouseY);
    line(x1+10, 10, mouseX, mouseY);
    line(x1+20, 10, mouseX, mouseY);
    line(x1+30, 10, mouseX, mouseY);
    line(x1+40,  10, mouseX, mouseY);
     stroke(255);
    line(x2-40, screen.height-150, mouseX, mouseY);
    line(x2-30, screen.height-150, mouseX, mouseY);
    line(x2-20, screen.height-150, mouseX, mouseY);
    line(x2-10, screen.height-150, mouseX, mouseY);
    line(x2, screen.height-150, mouseX, mouseY);
    line(x2+10, screen.height-150, mouseX, mouseY);
    line(x2+20, screen.height-150, mouseX, mouseY);
    line(x2+30, screen.height-150, mouseX, mouseY);
    line(x2+40, screen.height-150, mouseX, mouseY);
 
       if (mouseIsPressed) {
        if (mouseButton === RIGHT) {
            x1 = mouseX;
        }
        if (mouseButton === LEFT) {
            x2 = mouseX;
        }
        if (mouseButton === CENTER) {
            background(50);
        }
    }
}

document.addEventListener('contextmenu', event => event.preventDefault());

addEventListener("mousedown", function(e){ if(e.button == 1){ e.preventDefault(); } });
