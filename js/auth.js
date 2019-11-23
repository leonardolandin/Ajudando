paths = ["/login.php", "/cadastrar.php", "/completar_cadastro.php", "/esqueceu_senha.php"]
for(i=0; i < paths.length; i++) {
    if(window.location.pathname == paths[i]) {
        setTimeout(function() {
            document.getElementById('popover-error').style.opacity = 0;
        }, 3000)

        email = localStorage.getItem('email')
        nome = localStorage.getItem('cadNome')
        senha = localStorage.getItem('cadSenha')
        nomeSocial = localStorage.getItem('cadNomeSocial')
        celular = localStorage.getItem('cadCelular')
        emailRecupera = localStorage.getItem('emailRecupera')
        
        if(window.location.pathname == "/login.php") {
            if(email != null) {
                document.getElementById('loginid').value = email;
            }
        }

        if(window.location.pathname == "/cadastrar.php") {
            if(nome != null && senha != null && nomeSocial != null && celular != null) {
                document.getElementById('cadname').value = nome;
                document.getElementById('passid').value = senha;
                document.getElementById('cadsocial').value = nomeSocial;
                document.getElementById('cadcell').value = celular;
            }
        }

        if(window.location.pathname == "/esqueceu_senha.php") {
            if(emailRecupera != null) {
                document.getElementById('emailRec').value = emailRecupera;
            }
        }
    }
}

if(window.location.pathname != "/login.php") {
    localStorage.removeItem('email')
}

if(window.location.pathname != "/cadastrar.php") {
    localStorage.removeItem('cadNome')
    localStorage.removeItem('cadSenha')
    localStorage.removeItem('cadNomeSocial')
    localStorage.removeItem('cadCelular')
}