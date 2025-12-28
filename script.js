document.getElementById("loginForm").onsubmit = function(e) {
    e.preventDefault(); // impede o envio automático
  
    // COMO TODOS OS CAMPOS TÊM "required", só chega aqui se tudo estiver preenchido
    window.location.href = "Pagina_inicial.html";
  };

  // Funcionalidade de ver e ocultar senha
  function mostrarsenha()
  {
    var inputpass = document.getElementById('senha')
    var btnpass = document.getElementById('btpass')

    if (inputpass.type === 'password')
    {
      inputpass.setAttribute('type','text')
      btnpass.classList.replace('bi-eye', 'bi-eye-slash')
    }
    else
    {
      inputpass.setAttribute('type', 'password')
      btnpass.classList.replace('bi-eye-slash', 'bi-eye')
    }
  }