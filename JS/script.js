const expirationDate = 'March 28, 2026 23:59:59';
let deadlineTime = new Date(expirationDate);

deadlineTime.setDate(deadlineTime.getDate());
let deadline = deadlineTime.getTime();

// Function to update countdown timer
function updateCountdown() {
    if (countdownInterval !== null) {
        // Getting current time in required format
        let now = new Date().getTime();
        let timeToLive = deadline - now;

        // Getting value of days, hours, minutes, seconds
        let days = Math.floor(timeToLive / (1000 * 60 * 60 * 24));
        let hours = Math.floor((timeToLive % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((timeToLive % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((timeToLive % (1000 * 60)) / 1000);

        let daysElements = document.getElementsByClassName("days");
        let hoursElements = document.getElementsByClassName("hours");
        let minutesElements = document.getElementsByClassName("minutes");
        let secondsElements = document.getElementsByClassName("seconds");

        // If you have many countdowns, you could fill all the tags using the classname
        Array.from(daysElements).forEach(el => el.innerHTML = days);
        Array.from(hoursElements).forEach(el => el.innerHTML = hours);
        Array.from(minutesElements).forEach(el => el.innerHTML = minutes);
        Array.from(secondsElements).forEach(el => el.innerHTML = seconds);

        // Output for over time
        if (timeToLive < 0) {
            countdownInterval && clearInterval(countdownInterval);
            Array.from(daysElements).forEach(el => el.innerHTML = 0);
            Array.from(hoursElements).forEach(el => el.innerHTML = 0);
            Array.from(minutesElements).forEach(el => el.innerHTML = 0);
            Array.from(secondsElements).forEach(el => el.innerHTML = 0);
        }
    }
}

// To call defined function every second
let countdownInterval = null;
updateCountdown();
countdownInterval = setInterval(updateCountdown, 1000);

//SECCION DE GALERIA
document.addEventListener("DOMContentLoaded", () => {
    const images = document.querySelectorAll(".gallery-container img");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    }, { threshold: 0.3 });

    images.forEach(img => observer.observe(img));
});
//DRESS-CODE
document.addEventListener("DOMContentLoaded", () => {
    const section = document.querySelector(".dress-section");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                section.classList.add("visible");
            }
        });
    }, { threshold: 0.3 });

    observer.observe(section);
});
//SEECION FRASE
document.addEventListener("DOMContentLoaded", () => {
    const frase = document.querySelector(".frase");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                frase.classList.add("visible");
            }
        });
    }, { threshold: 0.3 });

    observer.observe(frase);
});

// BOTÓN DEL FORMULARIO (REVISADO FINAL)
document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("rsvpForm");
    const alertBox = document.getElementById("thankYouMessage");

    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        const formData = new FormData(form);

        try {
            const response = await fetch("guardar_rsvp.php", {
                method: "POST",
                body: formData,
            });

            const result = await response.text();
            console.log(result); // <-- mira esto en la consola de tu navegador

            if (result.includes("success")) {
                alertBox.classList.add("show");
                form.reset();
                setTimeout(() => alertBox.classList.remove("show"), 2500);
                // Mostrar mensaje de agradecimiento animado
                const thankYou = document.getElementById("thankYouMessage");
                thankYou.style.display = "block";
                thankYou.style.animation = "fadeInOut 4s ease forwards";
                setTimeout(() => {
                    thankYou.style.display = "none";
                }, 4000);
            } else {
                alert("Ocurrió un error al guardar tu confirmación.");
                console.log(result);
            }
        } catch (error) {
            console.error("Error en el envío:", error);
            alert("Error de conexión con el servidor.");
        }
    });
});


//SECCION DE REGALOS
const verMasBtn = document.getElementById('verMasBtn');
const regalosDetalle = document.getElementById('regalosDetalle');

verMasBtn.addEventListener('click', () => {
    if (regalosDetalle.style.display === "block") {
        regalosDetalle.style.display = "none";
        verMasBtn.textContent = "Ver más 🎁";
    } else {
        regalosDetalle.style.display = "block";
        verMasBtn.textContent = "Ver menos ✨";
    }
});
