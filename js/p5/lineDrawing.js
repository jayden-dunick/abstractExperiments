function setup() {
var myCanvas = createCanvas(screen.width, screen.height);
    myCanvas.parent("container");
    background(50);
    
}

//var x = 699;
//
//function draw() {
//  stroke(255);
//  if (mouseIsPressed === true) {
//    line(mouseX, mouseY, x, 600);
//  }
//}

document.addEventListener('contextmenu', event => event.preventDefault());

var x = 20;
var y = 20;

function draw() {
    fill(255);
    stroke(255);

    if (mouseIsPressed) {
        if (mouseButton === RIGHT) {
            x = mouseX;
            y = mouseY;
        }
        if (mouseButton === LEFT) {
            line(mouseX, mouseY, x, y);
        }
        if (mouseButton === CENTER) {
            background(50);
        }
    }

    print(mouseButton);
}

