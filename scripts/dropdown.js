window.onload = function() {
    var dropdowns = document.getElementsByClassName('dropdown');
    for (var i = 0; i < dropdowns.length; i++) {
        (function() {
            var dropdown = dropdowns[i];
            var more = dropdown.getElementsByClassName('more')[0];
            var less = dropdown.getElementsByClassName('less')[0];
            var content = dropdown.getElementsByClassName('dropdown-content')[0];

            more.addEventListener('click', function() {
                content.style.display = 'block';
                more.style.display = 'none';
            });

            less.addEventListener('click', function() {
                content.style.display = 'none';
                more.style.display = 'block';
            });
        })();
    }
};