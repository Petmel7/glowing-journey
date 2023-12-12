<!-- Modal -->

<div class="modal" id="myModal">
    <div class="modal-content">
        <a href="#" class="">
            <svg class="close">
                <use href="./images.svg/defs.svg#icon-x"></use>
            </svg>
        </a>
        <h2 class="modal-content--title">Leave an Application</h2>
        <p class="modal-content--text">Please use the form below to contact us. Enter your name, email, and message, and we'll get back to you shortly.</p>
        <form id="form" class="modal-form" method="post" action="sendmail.php">

            <input class="modal-form--input _req" type="text" placeholder="Name" name="name">
            <input class="modal-form--input _req email" type="email" placeholder="Email" name="email">
            <textarea class="modal-form--textarea" placeholder="Comment" name="comment"></textarea>

            <div class="teacher-options modal-form">
                <h3 class="teacher-options--title">Choose a teacher</h3>
                <label class="teacher-options--name">
                    <input class="teacher-options--checkbox " type="checkbox" value="Maria" name="teacher" require>
                    <span class="teacher-custom-checkbox"></span>
                    Maria
                </label>
                <label class="teacher-options--name">
                    <input class="teacher-options--checkbox " type="checkbox" value="Artem" name="teacher" require>
                    <span class="teacher-custom-checkbox"></span>
                    Artem
                </label>
                <label class="teacher-options--name">
                    <input class="teacher-options--checkbox " type="checkbox" value="Ilona" name="teacher" require>
                    <span class="teacher-custom-checkbox"></span>
                    Ilona
                </label>
                <label class="teacher-options--name">
                    <input class="teacher-options--checkbox " type="checkbox" value="Volodymyr" name="teacher" require>
                    <span class="teacher-custom-checkbox"></span>
                    Volodymyr
                </label>
            </div>

            <button class="teacher-options--button" type="submit">Send</button>
            <div class="loading-gif"></div>
        </form>
        <p class="teacher-options--text">By clicking on the “Send” button, you agree to our Privacy Policy and allow Promodo to use this information for marketing purposes.</p>
    </div>
</div>