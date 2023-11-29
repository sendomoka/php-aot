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

// Jangan lupa ini diganti kalo mau ngedit content yang lain

buttons[0].classList.add('active');
document.getElementById('content-1').style.display = 'block';

// Jangan lupa ini diganti

var button1 = document.getElementById('btn1');
var button2 = document.getElementById('btn2');
var button3 = document.getElementById('btn3');
var button4 = document.getElementById('btn4');
var headerText = document.getElementById('header');

button1.addEventListener('click', function() {
    headerText.textContent = 'Setting';
});

button2.addEventListener('click', function() {
    headerText.textContent = 'Timeline';
});

button3.addEventListener('click', function() {
    headerText.textContent = 'Death';
});

button4.addEventListener('click', function() {
    headerText.textContent = 'User';
});

// Tambahin kalo mau nambah content baru
var leftButton = document.getElementById('leftbutton');
var content2 = document.getElementById('content-2');
var content2_1 = document.getElementById('content-2-1');

// Add a click event listener to the left button
leftButton.addEventListener('click', function() {
    // Hide content2 and show content2-1
    content2.style.display = 'none';
    content2_1.style.display = 'block';
    headerText.textContent = 'Timeline - Add Data';
});