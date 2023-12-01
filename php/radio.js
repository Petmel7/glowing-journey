// const radioButtons = document.querySelectorAll('.teacher-options--checkbox');

// radioButtons.forEach(button => {
//   button.addEventListener('change', function() {
//     if (this.checked) {
//       console.log('Вибрано:', this.value);
//       // Додайте сюди вашу логіку для обробки вибору радіо кнопок
//     }
//   });
// });


// const radioButtons = document.querySelectorAll('.teacher-options--checkbox');

// radioButtons.forEach(button => {
//   button.addEventListener('change', function() {
//     if (this.checked) {
//       // Знімаємо позначку з попередньої вибраної кнопки
//       document.querySelectorAll('.teacher-options--name').forEach(elem => {
//         elem.classList.remove('checked');
//       });

//       // Встановлюємо позначку в поточно вибраній кнопці
//       this.closest('.teacher-options--name').classList.add('checked');

//       console.log('Вибрано:', this.value);
//     }
//   });
// });



// const radioButtons = document.querySelectorAll('.teacher-options--checkbox');

// radioButtons.forEach(button => {
//   button.addEventListener('change', function() {
//     if (this.checked) {
//       // Знімаємо позначку з попередньої вибраної кнопки
//       document.querySelectorAll('.teacher-options--name').forEach(elem => {
//         elem.classList.remove('checked');
//       });

//       // Встановлюємо позначку в поточно вибраній кнопці
//       this.closest('.teacher-options--name').classList.add('checked');

//       console.log('Вибрано:', this.value);
//     }
//   });
// });




// const radioButtons = document.querySelectorAll('.teacher-options--checkbox');

// radioButtons.forEach(button => {
//   button.addEventListener('change', function() {
//     if (this.checked) {
//       if (!this.classList.contains('checked')) {
//         document.querySelectorAll('.teacher-options--name').forEach(elem => {
//           elem.classList.remove('checked');
//         });
//         this.closest('.teacher-options--name').classList.add('checked');
//         console.log('Вибрано:', this.value);
//       } else {
//         this.checked = false;
//         this.classList.remove('checked');
//         console.log('Знято вибрання:', this.value);
//       }
//     }
//   });
// });



const checkboxes = document.querySelectorAll('.teacher-options--checkbox');

checkboxes.forEach(checkbox => {
  checkbox.addEventListener('change', function() {
    if (this.checked) {
      checkboxes.forEach(otherCheckbox => {
        if (otherCheckbox !== this) {
          otherCheckbox.checked = false;
        }
      });
    }
  });
});



