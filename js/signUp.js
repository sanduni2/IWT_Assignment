let password = document.getElementById('password');
let toggleBtn = document.getElementById('toggleBtn');

let lowerCase = document.getElementById('lower');
let upperCase = document.getElementById('upper');
let digit = document.getElementById('number');
let specialChar = document.getElementById('special');
let minLength = document.getElementById('length');

function checkPassword(data){
	const lower = new RegExp('(?=.*[a-z])');
	const upper = new RegExp('(?=.*[A-Z])');
	const number = new RegExp('(?=.*[0-9])');
	const special = new RegExp('(?=.*[!@#\$%\^&\*])');
	const length = new RegExp('(?=.{8,})');

	if(lower.test(data)){
		lowerCase.classList.add('valid');
	} else {
		lowerCase.classList.remove('valid');
	}

	if(upper.test(data)){
		upperCase.classList.add('valid');
	} else {
		upperCase.classList.remove('valid');
	}

	if(number.test(data)){
		digit.classList.add('valid');
	} else {
		digit.classList.remove('valid');
	}

	if(special.test(data)){
		specialChar.classList.add('valid');
	} else {
		specialChar.classList.remove('valid');
	}

	if(length.test(data)){
		minLength.classList.add('valid');
	} else {
		minLength.classList.remove('valid');
	}
}



toggleBtn.onclick = function(){
	if (password.type === 'password') {
		password.setAttribute('type', 'text');
		rpass.setAttribute('type', 'text');
		toggleBtn.classList.add('hide');

	} else {
		password.setAttribute('type', 'password'); 
		rpass.setAttribute('type', 'password');
		toggleBtn.classList.remove('hide');
	}
}


function togglePopup(){
	document.getElementById("popup-1").classList.toggle("active");
}
