// Seleciona todos os botões de "EDICT" e adiciona um evento de clique a cada um
document.querySelectorAll(".js-div-display").forEach(button => {
	button.addEventListener('click', function(event) {
			//event.preventDefault();  // Impede o envio do formulário
			
			// Exibe a div escondida
			document.querySelector(".js-div-hide").classList.add("js-show-div");

			console.log("teste");
	});
});


