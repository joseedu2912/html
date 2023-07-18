const userNameField = document.querySelector("[name=name]"); //contienen la informacion de cada input
const lastNamePField = document.querySelector("[name=lastNameP]");
const lastNameMField = document.querySelector("[name=lastNameM]");
const emailField = document.querySelector("[name=email]");
const passwordField = document.querySelector("[name=password]");
const password2Field = document.querySelector("[name=password2]");
const emailInicio = document.querySelector("[name=email-inicio]");
const passInicio = document.querySelector("[name=password-inicio]");

//guarda el estado de cada boton
const btnSignIn = document.getElementById("sign-in"),
      btnSignUp = document.getElementById("sign-up"),
      formRegister = document.querySelector(".register"),
      formLogin = document.querySelector(".login");

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
}
// registra si se dio click al boton para cambiar de vista
btnSignIn.addEventListener("click", e =>{
    formRegister.classList.add("hide");
    formLogin.classList.remove("hide");
})

// registra si se dio click al boton para cambiar de vista
btnSignUp.addEventListener("click", e =>{
    formLogin.classList.add("hide");
	formRegister.classList.remove("hide");
})

//metodo para verificar que el cursor este en el imput correcto
const validateEmptyField = (message, e) =>{
	const field = e.target;
	const fieldvalue = e.target.value;
	const exprecion = expresiones.correo; 
	if (fieldvalue.trim().length == 0 ){
		field.classList.add("invalid");
		field.nextElementSibling.classList.add("error");
		field.nextElementSibling.innerText = message;
	}else{
		field.classList.remove("invalid");
		field.nextElementSibling.classList.remove("error");
		field.nextElementSibling.innerText ="";
	}
}

// metodos de cada validacion

const validateNameFormat = e =>{
	const field = e.target;
	const fieldValue = e.target.value;
	const exprecion = expresiones.nombre; 
	if(fieldValue.trim().length > 0 && !exprecion.test(fieldValue) ){
		field.classList.add("invalid");
		field.nextElementSibling.classList.add("error");
		field.nextElementSibling.innerText ="Nombre no valido";
	}else{
		field.classList.remove("invalid");
		field.nextElementSibling.classList.remove("error");
		field.nextElementSibling.innerText ="";
	}
}

const validateLastaNamePFormat = e =>{
	const field = e.target;
	const fieldValue = e.target.value;
	const exprecion = expresiones.nombre; 
	if(fieldValue.trim().length > 0 && !exprecion.test(fieldValue) ){
		field.classList.add("invalid");
		field.nextElementSibling.classList.add("error");
		field.nextElementSibling.innerText ="Apellido Paterno no valido";
	}else{
		field.classList.remove("invalid");
		field.nextElementSibling.classList.remove("error");
		field.nextElementSibling.innerText ="";
	}
}

const validateLastaNameMFormat = e =>{
	const field = e.target;
	const fieldValue = e.target.value;
	const exprecion = expresiones.nombre; 
	if(fieldValue.trim().length > 0 && !exprecion.test(fieldValue) ){
		field.classList.add("invalid");
		field.nextElementSibling.classList.add("error");
		field.nextElementSibling.innerText ="Apellido Materno no valido";
	}else{
		field.classList.remove("invalid");
		field.nextElementSibling.classList.remove("error");
		field.nextElementSibling.innerText ="";
	}
}

const validateEmailFormat = e =>{
	const field = e.target;
	const fieldValue = e.target.value;
	const exprecion = expresiones.correo; 
	if(fieldValue.trim().length > 0 && !exprecion.test(fieldValue)){
		field.classList.add("invalid");
		field.nextElementSibling.classList.add("error");
		field.nextElementSibling.innerText = "Favor de ingresar un email valido";
	}else{
		field.classList.remove("invalid");
		field.nextElementSibling.classList.remove("error");
		field.nextElementSibling.innerText ="";
	}
}

const validatepasswordFormat = e =>{
	const field = e.target;
	const fieldValue = e.target.value;
	const exprecion = expresiones.password; 
	if(fieldValue.trim().length > 0 && !exprecion.test(fieldValue) ){
		field.classList.add("invalid");
		field.nextElementSibling.classList.add("error");
		field.nextElementSibling.innerText ="Contraseña invalida";
	}else{
		field.classList.remove("invalid");
		field.nextElementSibling.classList.remove("error");
		field.nextElementSibling.innerText ="";
	}
}

/* se manda a llamar a los metodos para validar que este el cursor en el input correcto */
userNameField.addEventListener("blur", (e) => validateEmptyField ("El campo nombre es requerido", e));
lastNamePField.addEventListener("blur", (e) => validateEmptyField ("El campo apellido paterno es requerido", e));
lastNameMField.addEventListener("blur", (e) => validateEmptyField ("El campo apellido paterno es requerido", e));
emailField.addEventListener("blur", (e) => validateEmptyField ("El campo email es requerido", e));
passwordField.addEventListener("blur", (e) => validateEmptyField ("El campo password es requerido", e));
emailInicio.addEventListener("blur", (e) => validateEmptyField ("El campo email es requerido", e));
passInicio.addEventListener("blur", (e) => validateEmptyField ("El campo password es requerido", e));
emailInicio.addEventListener("blur", (e) => validateEmptyField ("El campo email es requerido", e));


/* se mandan a llamar las validaciones de cada input */
userNameField.addEventListener("input" , validateNameFormat);
lastNamePField.addEventListener("input", validateLastaNamePFormat);
lastNameMField.addEventListener("input", validateLastaNameMFormat);
emailField.addEventListener("input" , validateEmailFormat);
passwordField.addEventListener("input", validatepasswordFormat);
passInicio.addEventListener("input" , validatepasswordFormat);
emailInicio.addEventListener("input" , validateEmailFormat);

