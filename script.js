document.getElementById("loginForm").onsubmit = function(e) {
    e.preventDefault(); // impede o envio automático

    // COMO TODOS OS CAMPOS TÊM "required", só chega aqui se tudo estiver preenchido
    window.location.href = "Pagina_inicial.html";
  };