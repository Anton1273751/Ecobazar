const endDate = new Date();

endDate.setHours(endDate.getHours() + 24);

const chas = document.querySelector(".timer__hours");
const min = document.querySelector(".timer__minuts");
const sec = document.querySelector(".timer__second");

function updateTime() {
  let now = new Date();
  let timeLeft = endDate - now;
  if (timeLeft < 0) {
    clearInterval(timer);
    console.log("Время истекло");
  }

  let hours = Math.floor(timeLeft / (1000 * 60 * 60));
  let minuts = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
  chas.textContent = hours;
  min.textContent = minuts;
  sec.textContent = seconds;
}

let timer = setInterval(updateTime, 1000);
