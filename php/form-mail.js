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

        let formData = new FormData(form);
        // formData.append('image', formImage.files[0]);

        if (error === 0) {
            // form.classList.add('_sending');
            // console.log('response',
            //     await fetch('sendmail.php', {
            //     method: 'POST',
            //     body: formData
            // })
            // );

            let response = await fetch('sendmail.php', {
                method: 'POST',
                body: formData
            });

            if (response.ok) {
                let result = await response.json();
                console.log('result', result);
                alert(result.message);
                form.inerHTML = '';
                form.reset();
                form.classList.remove('_sending');
            } else {
                alert('Помилка');
                form.classList.remove('_sending');
            }
            
        } else {
            alert('Заповніть форму будь-ласка');
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


