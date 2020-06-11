function toggleMenu() {
    var element = document.getElementById("myMenu");
    var idk = document.getElementById("cars");
    element.classList.toggle("menuToggled");
    idk.classList.toggle("menuToggled");
}

var height = document.getElementById("rift");
var me = height.scrollHeight;

var mmm = me - height.clientHeight; 

$('#rift').scroll(function(){
    $("#rift2").css("opacity", 1 - $('#rift').scrollTop() / 3);
  });