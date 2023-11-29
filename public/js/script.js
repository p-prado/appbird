const img = document.querySelectorAll(".bird-audio-img");

img.forEach(img => {
    img.addEventListener("click", function(){
        console.log(this.dataset.target);
        const id = this.dataset.target;
        const audio = document.getElementById(id);
        const card = document.getElementById(`card-${id}`);
        if (audio.paused) {
            audio.play();
            card.classList.remove("paused");
            card.classList.add("playing");
        } else {
            audio.pause();
            card.classList.remove("playing");
            card.classList.add("paused");
        }
    })
});