function ganti_gambar2() {
    document.images['ereh'].src = 'assets/ereh2.png';
}

function ganti_gambar1() {
    document.images['ereh'].src = 'assets/ereh1.png';
}

document.querySelector('img[name="ereh"]').addEventListener('mouseover', function() {
    var audio = document.getElementById('hover-sound');
    audio.muted = false;
    audio.play();
});

document.querySelector('img[name="ereh"]').addEventListener('click', function() {
    document.getElementById('text').classList.add('show-text');
});

document.querySelector('img[name="ereh"]').addEventListener('click', function() {
    document.getElementById('click-text').style.display = 'none';
});