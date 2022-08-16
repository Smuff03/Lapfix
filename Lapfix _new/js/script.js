
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();









// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
var data = google.visualization.arrayToDataTable([
['Task', 'Hours per Day'],
['Requests', 2],
['Appointments', 2],
['Completed', 4],
['Earning', 2]
]);

// Optional; add a title and set the width and height of the chart
var options = {'title':'My Average Day', 'width':550, 'height':350};

// Display the chart inside the <div> element with id="piechart"
var chart = new google.visualization.PieChart(document.getElementById('piechart'));
chart.draw(data, options);
}



const nameEl = document.querySelector("#name");
const emailEl = document.querySelector("#email");
const companyNameEl = document.querySelector("#company-name");
const messageEl = document.querySelector("#message");

const form = document.querySelector("#submit-form");

function checkValidations() {
let letters = /^[a-zA-Z\s]*$/;
const name = nameEl.value.trim();
const email = emailEl.value.trim();
const companyName = companyNameEl.value.trim();
const message = messageEl.value.trim();
if (name === "") {
document.querySelector(".name-error").classList.add("error");
document.querySelector(".name-error").innerText =
"Please fill out this field!";
} else {
if (!letters.test(name)) {
document.querySelector(".name-error").classList.add("error");
document.querySelector(".name-error").innerText =
"Please enter only characters!";
} else {

}
}
if (email === "") {
document.querySelector(".name-error").classList.add("error");
document.querySelector(".name-error").innerText =
"Please fill out this field!";
} else {
if (!letters.test(name)) {
document.querySelector(".name-error").classList.add("error");
document.querySelector(".name-error").innerText =
"Please enter only characters!";
} else {

}
}
}

function reset() {
nameEl = "";
emailEl = "";
companyNameEl = "";
messageEl = "";
document.querySelector(".name-error").innerText = "";
}

