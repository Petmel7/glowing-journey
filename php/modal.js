// Отримання елементів DOM
let modal = document.getElementById("myModal");
let btn = document.getElementById("openModal");
let span = document.getElementsByClassName("close")[0];

// Відкриття модального вікна при кліку на кнопку
btn.onclick = function() {
  modal.style.display = "block";
}

// Закриття модального вікна при кліку на "х"
span.onclick = function() {
  modal.style.display = "none";
}

// Закриття модального вікна при кліку на поза модальним вікном область
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
