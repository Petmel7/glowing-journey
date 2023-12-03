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











document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById("form");
    form.addEventListener('submit', formSend);

    async function formSend(event) {
        event.preventDefault();

        let error = formValidate(form);
        if (error === 0) {
            // Отримання даних форми та їх відправка
            console.log('Form submitted successfully!');
        } else {
            console.log('Form has errors. Please fill in all required fields.');
        }
    }

    function formValidate(form) {
        let error = 0;
        let formReq = document.querySelectorAll('._req');

        for (let index = 0; index < formReq.length; index++) {
            const input = formReq[index];

            formRemoveError(input);

            if (input.classList.contains('email')) {
                if (!emailTest(input)) {
                    formAddError(input);
                    error++;
                }
            } else if (input.getAttribute("type") === "checkbox" && !input.checked) {
                formAddError(input);
                error++;
            } else {
                if (input.value === '') {
                    formAddError(input);
                    error++;
                }
            }
        }

        return error;
    }

    function formAddError(input) {
        input.classList.add('_error');
    }

    function formRemoveError(input) {
        input.classList.remove('_error');
    }

    function emailTest(input) {
        return /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/.test(input.value);
    }
});


