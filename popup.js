const recenttweet = document.querySelector("body h2.articles");

setInterval(() => {
    const y = recenttweet.getBoundingClientRect().y;
    if (y < -100) {
        const popup = document.querySelector(".popup");
        popup.classList.add("visible");
    }
}, 500);