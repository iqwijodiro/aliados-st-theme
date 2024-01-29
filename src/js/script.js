
function windowScroll() {
    const navbar = document.querySelector('#navbar');
   
    if (
        document.body.scrollTop >= 50 ||
        document.documentElement.scrollTop >= 50
    ) {

        navbar.classList.add('nav-sticky');
    } else {
        navbar.classList.remove('nav-sticky');
    }
    
}

window.addEventListener('scroll', (ev) => {
    ev.preventDefault();
    windowScroll()
})


//----------- Countdown 1-------------------------

const days = document.getElementById('days');
const hours = document.getElementById('hours');
const minutes = document.getElementById('minutes');
const seconds = document.getElementById('seconds');
const countdown = document.getElementById('countdown');
const year = document.getElementById('year');
const loading = document.getElementById('loading');

const currentYear = new Date().getFullYear();

const newYearTime = new Date(`March 01 ${currentYear} 00:00:00`);

// Año por venir
year.innerText = currentYear + 1;

// Mantiene el conteo
const updateCountdown = () => {
  const currentTime = new Date();
  const diff = newYearTime - currentTime;

  const d = Math.floor(diff / 1000 / 60 / 60 / 24);
  const h = Math.floor(diff / 1000 / 60 / 60) % 24;
  const m = Math.floor(diff / 1000 / 60) % 60;
  const s = Math.floor(diff / 1000) % 60;

  // inserta valores en el dom
  days.innerHTML = d;
  hours.innerHTML = h < 10 ? '0' + h : h;
  minutes.innerHTML = m < 10 ? '0' + m : m;
  seconds.innerHTML = s < 10 ? '0' + s : s;
}

// ejecuta cada 300ms
setInterval(updateCountdown, 300);


//----------- Countdown 2-------------------------

const days_2 = document.getElementById('days_2');
const hours_2 = document.getElementById('hours_2');
const minutes_2 = document.getElementById('minutes_2');
const seconds_2 = document.getElementById('seconds_2');
const countdown_2 = document.getElementById('countdown_2');
const year_2 = document.getElementById('year_2');
const loading_2 = document.getElementById('loading_2');

const currentYear_2 = new Date().getFullYear();

const newYearTime_2 = new Date(`Aug 01 ${currentYear} 00:00:00`);

// Año por venir
year_2.innerText = currentYear_2 + 1;

// Mantiene el conteo
const updateCountdown2 = () => {
  const currentTime = new Date();
  const diff = newYearTime_2 - currentTime;

  const d = Math.floor(diff / 1000 / 60 / 60 / 24);
  const h = Math.floor(diff / 1000 / 60 / 60) % 24;
  const m = Math.floor(diff / 1000 / 60) % 60;
  const s = Math.floor(diff / 1000) % 60;

  // inserta valores en el dom
  days_2.innerHTML = d;
  hours_2.innerHTML = h < 10 ? '0' + h : h;
  minutes_2.innerHTML = m < 10 ? '0' + m : m;
  seconds_2.innerHTML = s < 10 ? '0' + s : s;
}


// ejecuta cada 300ms
setInterval(updateCountdown2, 300);