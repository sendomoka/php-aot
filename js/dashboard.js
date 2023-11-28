var buttons = document.querySelectorAll('.kiri button');

buttons.forEach(function(button) {
    button.addEventListener('click', function() {
        buttons.forEach(function(btn) {
            btn.classList.remove('active');
        });

        this.classList.add('active');

        var contents = document.querySelectorAll('[id^="content-"]');
        contents.forEach(function(content) {
            content.style.display = 'none';
        });

        var contentId = 'content-' + this.id.replace('btn', '');
        document.getElementById(contentId).style.display = 'block';
    });
});

buttons[0].classList.add('active');
document.getElementById('content-1').style.display = 'block';