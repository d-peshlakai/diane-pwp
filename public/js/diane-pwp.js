
var title = document.getElementsByClassName('word');
var titleArray = [];
var currentWord = 0;

title[currentWord].style.opacity = 1;
for (var i = 0; i < title.length; i++) {
	splitLetters(title[i]);
}

function changeWord() {
	var cw = wordArray[currentWord];
	var nw = currentWord == words.length-1  ?
		wordArray[0] : wordArray[currentWord+1];
}
for (var i = 0; i < nw.length; i++) {
	nw[i].className = 'letter behind';
	nw[0].parentElement.style.opacity = 1;
	animateLetterIn(nw, i);
}

currentWord = (currentWord == wordArray.length-1) ? 0 : currentWord+1;
}

function animateLetterOut(cw, i) {
	setTimeout(function() {
		cw[i].className = 'letter out';
	}, i*80);
}

function animateLetterIn(nw, i) {
	setTimeout(function() {
		nw[i].className = 'letter in';
	}, 340+(i*80));
}