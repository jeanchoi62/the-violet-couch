// create an array of objects of pictures from album
const picsList = [
    {id: 0, picName: "bullet.jpeg"},
    {id: 1, picName: "facetime.jpeg"},
    {id: 2, picName: "heart-ears.jpeg"},
    {id: 3, picName: "me-and-daisy.png"},
    {id: 4, picName: "wedding.jpeg"},
];

function goLeft(current) {
    var t = 0;
    for (let i = 0; i < picsList.length; i++) {
        // split and get 
        if (picsList[i].picName == current) {
            t = i;
            break;
        } 
    }
    if (t == 0) {
        t = picsList.length - 1;
    } else {
        t -= 1;
    }
    document.getElementById("displayed-image").src = "images/personal-pictures/" + picsList[t].picName;
};

function goRight(current) {
    var t = 0;
    for (let i = 0; i < picsList.length; i++) {
        // split and get 
        if (picsList[i].picName == current) {
            t = i;
            break;
        } 
    }
    if (t == (picsList.length - 1)) {
        t = 0;
    } else {
        t += 1;
    }
    document.getElementById("displayed-image").src = "images/personal-pictures/" + picsList[t].picName;
};

// when left button is clicked go left
document.getElementById("picture-left-button").onclick = function() {
    const d = document.getElementById("displayed-image").src;
    const myArray = d.split("/");
    let word = myArray[myArray.length-1];
    const n = word.split(".");
    let num = n[0];
    goLeft(word);
};

// when right button is clicked go right
document.getElementById("picture-right-button").onclick = function() {
    const d = document.getElementById("displayed-image").src;
    const myArray = d.split("/");
    let word = myArray[myArray.length-1];
    const n = word.split(".");
    let num = n[0];
    goRight(word);
};