const musicCards = document.querySelectorAll('.music-card');
const audio = document.getElementById('audio-player');
const playerThumb = document.getElementById('player-thumb');
const playerTitle = document.getElementById('player-title');
const playerArtist = document.getElementById('player-artist');
const btnPlayPause = document.getElementById('btn-play-pause');
const btnStop = document.getElementById('btn-stop');

let isPlaying = false;

musicCards.forEach(card => {
    card.addEventListener('click', () => {
        const src = card.getAttribute('data-src');
        const thumb = card.getAttribute('data-thumb');
        const title = card.getAttribute('data-title');
        const artist = card.getAttribute('data-artist');

        if(audio.src !== src) {
            audio.src = src;
            playerThumb.src = thumb;
            playerTitle.textContent = title;
            playerArtist.textContent = artist;
        }

        audio.play();
        isPlaying = true;
        btnPlayPause.textContent = '⏸️';
    });
});

btnPlayPause.addEventListener('click', () => {
    if (!audio.src) return; // sem música carregada
    if (isPlaying) {
        audio.pause();
        btnPlayPause.textContent = '▶️';
    } else {
        audio.play();
        btnPlayPause.textContent = '⏸️';
    }
    isPlaying = !isPlaying;
});

btnStop.addEventListener('click', () => {
    audio.pause();
    audio.currentTime = 0;
    btnPlayPause.textContent = '▶️';
    isPlaying = false;
});

// Quando terminar a música, mudar botão para play
audio.addEventListener('ended', () => {
    btnPlayPause.textContent = '▶️';
    isPlaying = false;
});
