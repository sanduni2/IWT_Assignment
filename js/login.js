let password = document.getElementById('password');
let toggleBtn = document.getElementById('toggleBtn');



toggleBtn.onclick = function(){
	if (psw.type === 'password') {
		psw.setAttribute('type', 'text');
		toggleBtn.classList.add('hide');

	} else {
		psw.setAttribute('type', 'password'); 
		toggleBtn.classList.remove('hide');
	}
}