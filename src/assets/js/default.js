const words = ["The Calm of the ocean & the comfort of home."];
let i = 0;
let j = 0;
let currentWord = "";
let isDeleting = false;

function type() {
  currentWord = words[i];

  if (j <= currentWord.length) {
    document.getElementById("typewriter").textContent = currentWord.substring(0, j);
    j++;
  } else {
    return; // Stop the function when all words are typed
  }

  setTimeout(type, 100);
}

type();
