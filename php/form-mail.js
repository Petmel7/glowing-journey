"use strict"

// document.addEventListener('DOMContentLoaded', function () {
//     const form = document.getElementById("form");
//     form.addEventListener('submit', formSend);

//     async function formSend(event) {
//         event.preventDefault();

//         let error = formValidate(form);
//         console.log("Errors:", error);
//     }

//     function formValidate(form) {
//         let error = 0;
//         let formReq = document.querySelectorAll('._req');
//         console.log("Form:", form);

//         for (let index = 0; index < formReq.length; index++) {
//             const input = formReq[index];

//             formRemoveError(input);

//             if (input.classList.contains('email')) {
//                 if (emailTest(input)) {
//                     formAddError(input);
//                         error++;
//                 }
//             } else if (input.getAttribute("type") === "checkbox" && input.checked === false) {
//                 formAddError(input);
//                     error++;
//             } else {
//                 if (input.value === '') {
//                     formAddError(input);
//                         error++;
//                 }
//             }
//         }
//     }

//     function formAddError(input) {
//         // input.parentElement.classList.add('_error');
//         input.classList.add('_error');
//     }

//     function formRemoveError(input) {
//         // input.parentElement.classList.remove('_error');
//         input.classList.remove('_error');
//     }

//     function emailTest(input) {
//         return /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/.test(input.value);
//     }
// });











// document.addEventListener('DOMContentLoaded', function () {
//     const form = document.getElementById("form");
//     form.addEventListener('submit', formSend);

//     async function formSend(event) {
//         event.preventDefault();

//         let error = formValidate(form);

//         let formData = new FormData(form);

//         if (error === 0) {
//             form.classList.add('_sending');

//             try {
//                 const response = await fetch('sendmail.php', {
//                     method: 'POST',
//                     body: formData
//                 });

//                 if (response.ok) {
//                     const result = await response.json();
//                     console.log('result', result);
//                     alert(result.message);
//                     formPreview.innerHTML = '';
//                     form.reset();
//                     form.classList.remove('_sending');
//                 } else {
//                     alert('Помилка');
//                     form.classList.remove('_sending');
//                 }
//             } catch (error) {
//                 console.error('Error:', error);
//                 alert('Сталася помилка під час відправки форми');
//                 form.classList.remove('_sending');
//             }
        
//         } else {
//             alert('Заповніть форму будь-ласка');
//         }
//     }

//     function formValidate(form) {
//         let error = 0;
//         let formReq = document.querySelectorAll('._req');

//         for (let index = 0; index < formReq.length; index++) {
//             const input = formReq[index];

//             formRemoveError(input);

//             if (input.classList.contains('email')) {
//                 if (!emailTest(input)) {
//                     formAddError(input);
//                     error++;
//                 }
//             } else if (input.getAttribute("type") === "checkbox" && !input.checked) {
//                 formAddError(input);
//                 error++;
//             } else {
//                 if (input.value === '') {
//                     formAddError(input);
//                     error++;
//                 }
//             }
//         }

//         return error;
//     }

//     function formAddError(input) {
//         input.classList.add('_error');
//     }

//     function formRemoveError(input) {
//         input.classList.remove('_error');
//     }

//     function emailTest(input) {
//         return /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/.test(input.value);
//     }
// });









// document.addEventListener('DOMContentLoaded', function () {
//     const form = document.getElementById("form");
//     form.addEventListener('submit', formSend);

//     async function formSend(event) {
//         event.preventDefault();

//         let error = formValidate(form);

//         let formData = new FormData(form);

//     if (error === 0) {
//         form.classList.add('_sending');

//         try {
//             const response = await fetch('sendmail.php', {
//                 method: 'POST',
//                 body: formData
//             });

//             const clonedResponse = response.clone();
//             console.log('clonedResponse.text()', clonedResponse.text())

//             if (response.ok) {
//                 const result = await clonedResponse.json();
//                 console.log('result', result);
//                 alert(result.message);
//                 formPreview.innerHTML = '';
//                 form.reset();
//                 form.classList.remove('_sending');
//             } else {
//                 alert('Помилка');
//                 form.classList.remove('_sending');
//             }
//         } catch (error) {
//             console.error('Error:', error);
//             alert('Сталася помилка під час відправки форми');
//             form.classList.remove('_sending');
//         }
//     } else {
//         alert('Заповніть форму будь-ласка');
//     }
// }



// document.addEventListener('DOMContentLoaded', function () {
//     const form = document.getElementById("form");
//     form.addEventListener('submit', formSend);

//     async function formSend(event) {
//         event.preventDefault();

//         let error = formValidate(form);

//         let formData = new FormData(form);

//         if (error === 0) {
//             form.classList.add('_sending');

//             try {
//                 const response = await fetch('sendmail.php', {
//                     method: 'POST',
//                     body: formData
//                 });

//                 const clonedResponse = response.clone();

//                 if (response.ok) {
//                     const result = await clonedResponse.text(); // Отримання текстового вмісту відповіді
//                     console.log('result', result);
//                     alert(result); // Виведення текстового вмісту у спливаюче вікно
//                     // form.innerHTML = '';
//                     form.reset();
//                     form.classList.remove('_sending');
//                 } else {
//                     alert('Помилка');
//                     form.classList.remove('_sending');
//                 }
//             } catch (error) {
//                 console.error('Error:', error);
//                 alert('Сталася помилка під час відправки форми');
//                 form.classList.remove('_sending');
//             }
//         } else {
//             alert('Заповніть форму, будь ласка');
//         }
//     }

//     function formValidate(form) {
//         let error = 0;
//         let formReq = document.querySelectorAll('._req');

//         for (let index = 0; index < formReq.length; index++) {
//             const input = formReq[index];

//             formRemoveError(input);

//             if (input.classList.contains('email')) {
//                 if (!emailTest(input)) {
//                     formAddError(input);
//                     error++;
//                 }
//             } else if (input.getAttribute("type") === "checkbox" && !input.checked) {
//                 formAddError(input);
//                 error++;
//             } else {
//                 if (input.value === '') {
//                     formAddError(input);
//                     error++;
//                 }
//             }
//         }

//         return error;
//     }

//     function formAddError(input) {
//         input.classList.add('_error');
//     }

//     function formRemoveError(input) {
//         input.classList.remove('_error');
//     }

//     function emailTest(input) {
//         return /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/.test(input.value);
//     }
// });










// document.getElementById("form").addEventListener("submit", function(event) {
//     event.preventDefault();
//     var formData = new FormData(this);

//     var xhr = new XMLHttpRequest();
//     xhr.open("POST", "sendmail.php", true);
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState === XMLHttpRequest.DONE) {
//             if (xhr.status === 200) {
//                 alert("Повідомлення успішно відправлене!");
//                 // Очистити форму після відправки
//                 document.getElementById("form").reset();
//             } else {
//                 alert("Помилка під час відправки повідомлення.");
//             }
//         }
//     };
//     xhr.send(formData);
// });









document.getElementById("form").addEventListener("submit", function(event) {
    event.preventDefault();

    let formData = new FormData(this);

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "sendmail.php", true);
    
    xhr.onload = function() {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response && response.message) {
                alert(response.message);
                document.getElementById("form").reset(); // Очистити форму після відправки
            } else {
                alert("Помилка під час відправки повідомлення.");
            }
        } else {
            alert("Сталася помилка під час відправлення повідомлення. Спробуйте знову.");
        }
    };

    xhr.onerror = function() {
        alert("Сталася помилка під час відправлення повідомлення. Спробуйте знову.");
    };

    xhr.send(formData);
});

