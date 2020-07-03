function onClickButton(event) {

    addClass("Tutos");
    addClass("Users");
    addClass("Creation");
    addClass("Accueil");


    const value = event.currentTarget.getAttribute("value");
    const cible = document.getElementById(value);
    cible.classList.toggle("hidden");
}

function addClass(divName) {
    divName = document.getElementById("admin" + divName);
    divName.classList.toggle("hidden", true);
}

document.addEventListener('DOMContentLoaded', function() {

    document.getElementById('users').addEventListener("click", onClickButton);
    document.getElementById('accueil').addEventListener("click", onClickButton);
    document.getElementById('creations').addEventListener("click", onClickButton);
    document.getElementById('tuto').addEventListener("click", onClickButton);
});