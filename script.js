function getFortune() {
    var question = document.getElementById("question").ariaValueMax;

    if(question.trim() === "") {
        alert("Please ask a question!");
        return;
    }

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if ( xhr.readyState === 4 && xhr.status === 200) {
            var fortune = xhr.responseText;
            document.getElementById("fortune").textContent = "Answer: " + fortune;
        }
    };
    xhr.open("GET", "fortune.php",true);
    xhr.send();
}