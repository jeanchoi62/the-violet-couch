function sayHelloToThisPerson(name) {
    alert('hello : ' + name);
}

sayHelloToThisPerson('Daisy');

function f() {
    document.getElementById("demo").innerHTML = "paragraph changed";
}

function g() {
    document.getElementById("blue").style.fontSize = "35px";
}

function h() {
    // change the image
    document.getElementById("close").src = '/close.png';
}

// load the header
async function loadHeader() {
    const response = await fetch("header.html");
    const text = await response.text();
    document.getElementById("h").innerHTML = text;
}




loadHeader();