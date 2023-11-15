document.querySelectorAll('input[type="checkbox"]').forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        if (this.checked) {
            this.parentNode.classList.add('checked');
        } else {
            this.parentNode.classList.remove('checked');
        }
    });
});