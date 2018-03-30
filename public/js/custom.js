function renderArray() {
    var myArray = [
        "If anything can go wrong, it will.",
        "Left to themselves, things tend to go from bad to worse.",
        "If there is a possibility of several things going wrong, the one that will cause the most damage will be the first to go wrong.",
        "The number of the departure gate is inversely proportional to the time available to get there."
    ];

    var randomItem = myArray[Math.floor(Math.random() * myArray.length)];

    document.getElementById('laws').innerHTML = randomItem;
}

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('time').innerHTML =
        h + ":" + m + ":" + s;
    setTimeout(startTime, 500);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i
    };
    return i;
}
