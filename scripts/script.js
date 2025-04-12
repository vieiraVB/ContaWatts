document.getElementById("botaouser").addEventListener("click", function() {
    document.getElementById("sidebar").style.width = "450px";
});
document.getElementById("closeBtn").addEventListener("click", function() {
    document.getElementById("sidebar").style.width = "0";
});

document.getElementById("botaoeditnome").addEventListener("click", function() {
    document.getElementById("editnome").style.width = "450px";
});
document.getElementById("closeBtnnome").addEventListener("click", function() {
    document.getElementById("editnome").style.width = "0";
});

document.getElementById("botaoeditusuario").addEventListener("click", function() {
    document.getElementById("editusuario").style.width = "450px";
});
document.getElementById("closeBtnusuario").addEventListener("click", function() {
    document.getElementById("editusuario").style.width = "0";
});

document.getElementById("botaoeditemail").addEventListener("click", function() {
    document.getElementById("editemail").style.width = "450px";
});
document.getElementById("closeBtnemail").addEventListener("click", function() {
    document.getElementById("editemail").style.width = "0";
});

document.getElementById("botaoeditcpf").addEventListener("click", function() {
    document.getElementById("editcpf").style.width = "450px";
});
document.getElementById("closeBtncpf").addEventListener("click", function() {
    document.getElementById("editcpf").style.width = "0";
});

$(document).ready(function(){
    $("form").submit(function(event){
        event.preventDefault(); // Impede o envio do formulário padrão
        var formData = $(this).serialize(); // Obtém os dados do formulário
        var target = $(this).attr("id").replace("formulario", "modal");
        $.ajax({
            type: "POST",
            url: "processamento.php", // URL do script PHP de processamento
            data: formData,
            success: function(response){
                alert(response); // Exibe uma mensagem de sucesso
                $("#" + target).css("display", "none"); // Fecha o modal após a edição ser concluída
            }
        });
    });
});