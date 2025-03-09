function verSenha(){
    var senha = document.getElementById("senha");
    if(senha.type==="password"){
        senha.type="text";
    }
    else{
        senha.type="password";
    }
}


window.onload = function erroh1() {
    var erro = new URLSearchParams(window.location.search);
    if (erro.has("erro") && erro.get("erro") == '1') {
        document.getElementById('erro').style.visibility = "visible";
        document.getElementById('erro').style.position = "fixed";
        console.log("ta certo meu bom");
    }
};