
document.querySelectorAll('.master-checkbox-input').forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        if (this.checked) {
            this.closest('.master-checkbox').classList.add('checked');
        } else {
            this.closest('.master-checkbox').classList.remove('checked');
        }
    });
});
