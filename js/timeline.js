window.onload = function() {
    var containers = document.querySelectorAll('.container');
    for (var i = 0; i < containers.length; i++) {
        var circle = document.createElement('div');
        if (i !== containers.length - 1) {
            circle.className = 'circle';
        } else {
            circle.className = 'circle-img';
        }
        containers[i].insertBefore(circle, containers[i].firstChild);

        if (i !== containers.length - 1) {
            var line = document.createElement('div');
            line.className = 'line';
            containers[i].appendChild(line);
        }
    }
}