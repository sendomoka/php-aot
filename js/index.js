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

document.getElementById('playButton').addEventListener('click', function() {
    this.style.display = 'none';
    document.getElementById('sound').play();
});

document.getElementById('playButton').addEventListener('click', function() {
    document.getElementById('upperimage').classList.add('fadeOut');
    this.style.display = 'none';
    document.getElementById('sound').play();
    document.getElementById('speechfull').style.display = 'block';
    document.getElementById('speechshort').style.display = 'none';

    var delays = [5000, 6880, 5000, 4630, 4870, 7000, 4140, 6750, 7800, 7950, 9060, 5840, 5640,];
    var parts = document.getElementsByClassName('speech-part');
    var cumulativeDelay = 0;
    for (let i = 0; i < parts.length; i++) {
        cumulativeDelay += delays[i % delays.length];
        setTimeout(function() {
            parts[i].style.display = 'block';
        }, cumulativeDelay);
    }
});

document.getElementById('sound').addEventListener('ended', function() {
    document.getElementById('upperimage').classList.remove('fadeOut');
    document.getElementById('upperimage').classList.add('fadeIn');
    document.getElementById('speechfull').style.display = 'none';
    document.getElementById('speechshort').style.display = 'block';
});