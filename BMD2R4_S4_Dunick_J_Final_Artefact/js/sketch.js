document.addEventListener('contextmenu', event => event.preventDefault());

function setup() {
var myCanvas = createCanvas(screen.width, screen.height);
    myCanvas.parent("container");    
}

function draw() {
  stroke(255);
  if (mouseIsPressed === true) {
    line(mouseX, mouseY, pmouseX, pmouseY);
  }
}