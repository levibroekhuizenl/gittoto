var hour1 = new Date().getHours();

// between 7 PM and 7 AM respectively
if(hour1 >= 21 || hour1 <= 10) {
    document.getElementById("input1").style.display = "hidden";
    document.getElementById("submit1").style.display = "hidden";
} else {
    document.getElementById("input1").style.display = "none";
    document.getElementById("submit1").style.display = "none";
}

var hour2 = new Date().getHours();

// between 7 PM and 7 AM respectively
if(hour2 >= 20 || hour2 <= 10) {
    document.getElementById("input2").style.display = "hidden";
    document.getElementById("submit2").style.display = "hidden";
} else {
    document.getElementById("input2").style.display = "none";
    document.getElementById("submit2").style.display = "none";
}

var hour3 = new Date().getHours();

// between 7 PM and 7 AM respectively
if(hour3 >= 20 || hour3 <= 10) {
    document.getElementById("input3").style.display = "hidden";
    document.getElementById("submit3").style.display = "hidden";
} else {
    document.getElementById("input3").style.display = "none";
    document.getElementById("submit3").style.display = "none";
}

var hour4 = new Date().getHours();

// between 7 PM and 7 AM respectively
if(hour4 >= 20 || hour4 <= 10) {
    document.getElementById("input4").style.display = "hidden";
    document.getElementById("submit4").style.display = "hidden";
} else {
    document.getElementById("input4").style.display = "none";
    document.getElementById("submit4").style.display = "none";
}