document.getElementById("level").innerHTML = calculateLevel();

function calculateLevel() {
    var birthDate = new Date(2000, 1, 28);
    var currentDate = new Date();
    var age = currentDate.getFullYear() - birthDate.getFullYear();
    var m = currentDate.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && currentDate.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}