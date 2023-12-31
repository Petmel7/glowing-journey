"use strict"

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById("form");
    form.addEventListener('submit', formSend);

    async function formSend(event) {
        event.preventDefault();

        let error = formValidate(form);

        let formData = new FormData(form);

        if (error === 0) {
            form.classList.add('_sending');

            try {
                const response = await fetch('sendmail.php', {
                    method: 'POST',
                    body: formData
                });

                if (response.ok) {
                    const result = await response.json();
                    alert(result.message);
                    form.reset();
                    form.classList.remove('_sending');

                } else {
                    alert('Error');
                    form.classList.remove('_sending');
                }

            } catch (error) {
                console.error('Error:', error);
                alert('The error occurred while submitting the form.');
                form.classList.remove('_sending');
            }
        
        } else {
            alert('Please fill out the form.');
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