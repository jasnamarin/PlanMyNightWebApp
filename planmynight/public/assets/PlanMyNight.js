function toSignUpPage() {
    window.location.href = "signUpPage.html";
}

function mapViewOnLoad() {
    L.mapquest.key = 'RqHWAPqGGxE6CbzOEy1IkIaCRqggRr8a';

        var map = L.mapquest.map('map', {
        center: [44.8125, 20.4612],
        layers: L.mapquest.tileLayer('map'),
        zoom: 13
        });

        // L.mapquest.directions().route({
        // start: '350 5th Ave, New York, NY 10118',
        // end: 'One Liberty Plaza, New York, NY 10006'
        // });
}

function login() {
    window.location.href = "main.html";
}

function makePlan() {
    alert("make a plan");
}

function showUserInfo() {
    document.getElementById("user-info-logo").style.display = "none";
    document.getElementById("user-info").style.display = "block";
}

function hideUserInfo() {
    document.getElementById("user-info").style.display = "none";
    document.getElementById("user-info-logo").style.display = "block";
}