console.log("hello");
const filterItems = document.querySelectorAll(".filter-item a");
const groupNames = document.querySelectorAll(".group-name");

filterItems.forEach(element => {
    element.addEventListener("click", function () {
        groupNames.forEach(e => {
            var card = e.parentNode;  // Move the card variable declaration here
            card.style.display = "block";
            if (!(element.textContent === e.textContent)) {
                card.style.display = "none";
            }
            if (element.textContent === "View All") {
                card.style.display = "block";
                console.log("view all");
            }
        });
    });
});

// modal

