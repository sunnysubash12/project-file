//this code is use for the animation of image slider in the home page
var counter = 1;
setInterval(function () {
    document.getElementById("radio" + counter).checked = true;
    counter++;
    if (counter > 3) {
        counter = 1;
    }
}, 5000);