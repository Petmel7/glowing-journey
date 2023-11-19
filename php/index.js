// document.querySelectorAll('input[type="checkbox"]').forEach(function(checkbox) {
//     checkbox.addEventListener('change', function() {
//         if (this.checked) {
//             this.parentNode.classList.add('checked');
//         } else {
//             this.parentNode.classList.remove('checked');
//         }
//     });
// });

document.querySelectorAll('.master-checkbox-input').forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        if (this.checked) {
            this.closest('.master-checkbox').classList.add('checked');
        } else {
            this.closest('.master-checkbox').classList.remove('checked');
        }
    });
});
