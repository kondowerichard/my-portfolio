window.addEventListener('DOMContentLoaded', function() {
    var greetingElement = document.getElementById('greeting');
    var currentTime = new Date().getHours();
  
    if (currentTime >= 0 && currentTime < 12) {
      greetingElement.innerHTML = "Good morning! Rise and shine, it's a brand new day!";
    } else if (currentTime >= 12 && currentTime < 18) {
      greetingElement.innerHTML = "Good afternoon! Hope you're having a splendid day so far!";
    } else {
      greetingElement.innerHTML = "Good evening! Relax and unwind, the night is yours to enjoy!";
    }
  });
  