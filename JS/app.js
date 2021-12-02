function modeChange() {
    let mycss = document.querySelector("#maincss");
    let mycssa = document.querySelector("#maincss").getAttribute('href');
    let darkloc = "./CSS/darkStyle.css"
    let lightloc = "./CSS/style.css"

    if (mycssa == lightloc) {
        mycss.setAttribute('href', darkloc);
        document.querySelector("#modeChanger").innerHTML = "Light Mode";

    } else {
        mycss.setAttribute('href', lightloc);
        document.querySelector("#modeChanger").innerHTML = "Dark Mode";
    }
}

function modeChangea() {
    let mycss = document.querySelector("#maincss");
    let mycssa = document.querySelector("#maincss").getAttribute('href');
    let darkloc = "./CSS/darkStyle.css"
    let lightloc = "./CSS/style.css"

    if (mycssa == lightloc) {
        mycss.setAttribute('href', darkloc);
        document.querySelector("#modeChanger").innerHTML = "Light Mode";
        document.querySelector("#about").setAttribute('href', './CSS/darkabout.css');
    } else {
        mycss.setAttribute('href', lightloc);
        document.querySelector("#modeChanger").innerHTML = "Dark Mode";
        document.querySelector("#about").setAttribute('href', './CSS/about.css');
    }
}

function modeChangec() {
    let mycss = document.querySelector("#maincss");
    let mycssa = document.querySelector("#maincss").getAttribute('href');
    let darkloc = "./CSS/darkStyle.css"
    let lightloc = "./CSS/style.css"

    if (mycssa == lightloc) {
        mycss.setAttribute('href', darkloc);
        document.querySelector("#modeChanger").innerHTML = "Light Mode";
        document.querySelector("#contacts").setAttribute('href', './CSS/darkcontact.css');

    } else {
        mycss.setAttribute('href', lightloc);
        document.querySelector("#modeChanger").innerHTML = "Dark Mode";
        document.querySelector("#contacts").setAttribute('href', './CSS/contact.css');
    }
}

function modeChangep() {
    let mycss = document.querySelector("#maincss");
    let mycssa = document.querySelector("#maincss").getAttribute('href');
    let darkloc = "./CSS/darkStyle.css"
    let lightloc = "./CSS/style.css"

    if (mycssa == lightloc) {
        mycss.setAttribute('href', darkloc);
        document.querySelector("#modeChanger").innerHTML = "Light Mode";
        document.querySelector("#products").setAttribute('href', './CSS/darkproducts.css');

    } else {
        mycss.setAttribute('href', lightloc);
        document.querySelector("#modeChanger").innerHTML = "Dark Mode";
        document.querySelector("#products").setAttribute('href', './CSS/products.css');

    }
}