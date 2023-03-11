const ctx = document.getElementById("chart");

new Chart(ctx, {
type: "bar",
data: {
labels: [
"JAN",
"FEB",
"MAR",
"APR",
"MAY",
"JUN",
"JUL",
"AUG",
"SEPT",
"OCT",
"NOV",
"DEC",
],
datasets: [
{
label: "Posts",
data: [10, 10, 10, 450],
type: "bar",
backgroundColor: "#000",
// this dataset is drawn on top
order: 1,
},
{
label: "Users",
data: [10, 20, 30, 500],
// this dataset is drawn below
order: 2,
backgroundColor: "#FF5E15",
},
],
},
options: {
plugins: {
title: {
display: true,
text: "Website Statistics",
},
},
borderRadius: 11,
scales: {
y: {
beginAtZero: true,
},
},
},
});
let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
    });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});
