function onClickButton(event) {
    return console.log(event.currentTarget);
}





document.addEventListener('DOMContentLoaded', function() {

    document.getElementById('users').addEventListener("click", onClickButton(this));
    document.getElementById('accueil').addEventListener("click", onClickButton(this));

});