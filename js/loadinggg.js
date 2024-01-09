<<<<<<< HEAD
/* ------------------------ loading secreen ------------------------ */

window.addEventListener("load", () => {
    const loader = document.querySelector("#contaner_load");

    loader.classList.add("contaner_load-hidden");

    loader.addEventListener("transitioned", () => {
        document.body.removeChild("loader");
    })
=======
/* ------------------------ loading secreen ------------------------ */

window.addEventListener("load", () => {
    const loader = document.querySelector("#contaner_load");

    loader.classList.add("contaner_load-hidden");

    loader.addEventListener("transitioned", () => {
        document.body.removeChild("loader");
    })
>>>>>>> 59981d134991a3dd80065694facb5b8b7cddb377
})