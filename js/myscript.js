//---------------------------------------------------main pic----------------------------------------------
let mainp = document.querySelectorAll('.mainpic');
let i = 0;

function mnext(){
	mainp[i].classList.remove('kk');
	i = (i + 1) % mainp.length;
	mainp[i].classList.add('kk');
}


setInterval(mnext, 4000);


//--------------------------------------------------slide container-----------------------------------------


let slides = document.querySelectorAll('.slide-container');
let index = 0;

function next(){
	slides[index].classList.remove('active');
	index = (index + 1) % slides.length;
	slides[index].classList.add('active');
}

function prev(){
	slides[index].classList.remove('active');
	index = (index - 1 + slides.length) % slides.length;
	slides[index].classList.add('active');
}

//autoplay

setInterval(next, 5000); //7 seconds



