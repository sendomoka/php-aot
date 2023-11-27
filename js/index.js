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

document.getElementById('nextpage2').addEventListener('click', function() {
    var container2 = document.querySelector('.container2');
    container2.style.display = 'flex';
    container2.scrollIntoView({behavior: "smooth"});
});

document.getElementById('playButton').addEventListener('click', function() {
    this.style.display = 'none';
    document.getElementById('willyspeech').play();
});

document.getElementById('playButton').addEventListener('click', function() {
    document.getElementById('upperimage').classList.add('fadeOut');
    this.style.display = 'none';
    document.getElementById('willyspeech').play();
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

document.getElementById('willyspeech').addEventListener('ended', function() {
    document.getElementById('upperimage').classList.remove('fadeOut');
    document.getElementById('upperimage').classList.add('fadeIn');
    document.getElementById('speechfull').style.display = 'none';
    document.getElementById('speechshort').style.display = 'block';
});

document.getElementById('nextpage3').addEventListener('click', function() {
    var container3 = document.querySelector('.container3');
    container3.style.display = 'flex';
    container3.scrollIntoView({behavior: "smooth"});
    setTimeout(function() {
        document.getElementById('image-text-1').style.display = 'flex';
        document.getElementById('image-text-1').style.animationPlayState = 'running';
    }, 4000);

    setTimeout(function() {
        document.getElementById('rock').play();
    }, 4000);

    setTimeout(function() {
        document.getElementById('arrowright-1').style.display = 'block';
        document.getElementById('arrowright-1').style.animationPlayState = 'running';
    }, 5500);
});

document.getElementById('arrowright-1').addEventListener('click', function(){
    document.getElementById('camera').play();

    setTimeout(function() {
        document.getElementById('image-text-2').style.display = 'flex';
        document.getElementById('image-text-2').style.animationPlayState = 'running';
    }, 3000);

    setTimeout(function() {
        document.getElementById('arrowright-2').style.display = 'block';
        document.getElementById('arrowright-2').style.animationPlayState = 'running';
    }, 4000);
});

document.getElementById('arrowright-2').addEventListener('click', function(){
    document.getElementById('whisper').play();

    setTimeout(function() {
        document.getElementById('image-text-3').style.display = 'flex';
        document.getElementById('image-text-3').style.animationPlayState = 'running';
    }, 3000);

    setTimeout(function() {
        document.getElementById('arrowright-3').style.display = 'block';
        document.getElementById('arrowright-3').style.animationPlayState = 'running';
    }, 5000);
});

document.getElementById('arrowright-3').addEventListener('click', function(){
    document.getElementById('whisper').play();

    setTimeout(function() {
        document.getElementById('image-text-4').style.display = 'flex';
        document.getElementById('image-text-4').style.animationPlayState = 'running';
    }, 1000);

    setTimeout(function() {
        document.getElementById('arrowright-4').style.display = 'block';
        document.getElementById('arrowright-4').style.animationPlayState = 'running';
    }, 2000);
});

document.getElementById('nextpage4').addEventListener('click', function() {
    var container2 = document.querySelector('.container4');
    container2.style.display = 'flex';
    container2.scrollIntoView({behavior: "smooth"});
});