function onClickButton(element) {
    event.preventDefault();
    document.querySelectorAll('.hide').classList.Add('hidden');
    switch (element) {
        case 'users':
            document.querySelector("#adminUsers").classList.remove('hidden');
            break;
        case 'accueil':
            document.querySelector("#adminAccueil").classList.remove('hidden');
            break;
    }
}





document.addEventListener('DOMContentLoaded', function() {

    document.getElementById('users').onclick = onClickButton('users');
    document.getElementById('accueil').onclick = onClickButton('accueil');

});