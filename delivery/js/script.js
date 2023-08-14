const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});




// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})







const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})



const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})
function validarFormulario() {
                    
	var nombreInput = document.getElementById("nombreInput");
	var apellidoInput = document.getElementById("apellidoInput");
	var CorreoElectronicoInput = document.getElementById("emailInput");
	var verificarEmailInput = document.getElementById("verificarEmailInput");
	var ContraseñaInput = document.getElementById("passwordInput");

  // Validar los campos
  if (nombreInput.value.trim() === "") {
	alert("Por favor, ingresa tu nombre completo.");
	return false; // Detener el envío del formulario
  }

  if (apellidoInput.value.trim() === "") {
	alert("Por favor, ingresa tu apellido.");
	return false; // Detener el envío del formulario
  }

  if (CorreoElectronicoInput.value.trim() === "") {
	alert("Por favor, ingresa un correo electrónico válido.");
	return false; // Detener el envío del formulario
  }

  if (VerificaInput.value !== verificarEmailInput.value) {
	alert("Los correos electrónicos no coinciden.");
	return false; // Detener el envío del formulario
  }

  if (ContraseñaInput.value.trim() === "" && ContraseñaInput.value.trim()<8) {
	alert("Por favor, ingresa una contraseña.");
	return false; // Detener el envío del formulario
  }

  // Si todas las validaciones son exitosas, se envía el formulario
  return true;

}
