function startMatch() {
    if (matchWords()) {
        isPlaying = true;
        time = currentLevel + 1;
        showWord(words);
        wordInput.value = '';
        score++;
    }
    if (score === -1) {
        scoreDisplay.innerHTML = 0;
        // scoreDisplay.style.color = 'red';
    } else {
        highScore.HTML = '';
        scoreDisplay.innerHTML = score;
        // scoreDisplay.style.color = 'green';
    }
}