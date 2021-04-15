var audio, playbtn, title, poster, artists, seekslider, seeking = false, seekto,
	curtimetext, durtimetext, playlist_status,
	dir, playlist, ext, agent, playlist_artist, repeat, random;

//Initialization Of Array of Music, Title , Poster Image , Artists

dir = "music/";
playlist = ["Mere-Mehboob-Qayamat-Hoti", "Naah", "Phir-Mohabbat"];
title = ["Mere Mehboob Qayamat Hogi", "Naah", "Phir Mohabbat"];
poster = ["images/sanam.jfif", "images/harddy.jfif", "images/arijit.jfif"];
artists = ["Sanam Puri", "Harddy Sandhu", "Arijit Singh"];
playlist_index = 0;

//Used to run on every browser
ext = ".mp3";
agent = navigator.userAgent.toLowerCase();
if (agent.indexOf('firefox') != -1 || agent.indexOf('opera') != -1) {
	ext = ".ogg";
}

// Set object references
playbtn = document.getElementById("playpausebtn");
playlist_status = document.getElementById("playlist_status");
playlist_artist = document.getElementById("playlist_artist");
randomSong = document.getElementById("random");

// Audio Object
audio = new Audio();
audio.src = dir + playlist[0] + ext;
audio.loop = false;

//First Song Title and Artist
playlist_status.innerHTML = title[playlist_index];
playlist_artist.innerHTML = artists[playlist_index];

// Add Event Handling
playbtn.addEventListener("click", playPause);


//Functions
function fetchMusicDetail() {
	//Poster Image , Pause/Play Image
	$("#image").attr("src", poster[playlist_index]);

	//Title and Artist
	playlist_status.innerHTML = title[playlist_index];
	playlist_artist.innerHTML = artists[playlist_index];

	//Audio
	audio.src = dir + playlist[playlist_index] + ext;
	audio.play();
}
function getRandomNumber(min, max) {
	let step1 = max - min + 1;
	let step2 = Math.random() * step1;
	let result = Math.floor(step2) + min;
	return result;
}

function random() {
	let randomIndex = getRandomNumber(0, playlist.length - 1);
	playlist_index = randomIndex;
	fetchMusicDetail();
	document.querySelector(".playpause").classList.add("active");
}

function playPause() {

	if (audio.paused) {
		audio.play();
		document.querySelector(".playpause").classList.add("active");

	} else {
		audio.pause();
		document.querySelector(".playpause").classList.remove("active");
	}
}
let checkbox = document.querySelector('input[name=theme]');
checkbox.addEventListener('change', function () {
	if (this.checked) {
		document.documentElement.setAttribute('data-theme', 'dark');
	} else {
		document.documentElement.setAttribute('data-theme', 'light');
	}
})