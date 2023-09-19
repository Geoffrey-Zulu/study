// script.js

document.addEventListener("DOMContentLoaded", function () {
    // Sample study goals data
    const studyGoals = [
        {
            course: "Mobile Application Development",
            pagesSlides: 15,
            remaining: 10,
            days: 5,
        },
        {
            course: "Machine Learning Techniques",
            pagesSlides: 20,
            remaining: 15,
            days: 7,
        },
        {
            course: "Innovation and Entrepreneurship",
            pagesSlides: 10,
            remaining: 5,
            days: 3,
        },
    ];

    const tableBody = document.querySelector("tbody");

    // Loop through study goals data and create table rows
    studyGoals.forEach((goal) => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${goal.course}</td>
            <td>${goal.pagesSlides}</td>
            <td>${goal.remaining}</td>
            <td>${goal.days}</td>
        `;
        tableBody.appendChild(row);
    });
});
