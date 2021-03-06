$("#formcontato").submit(function(event) {
    event.preventDefault();
    if (validar()) {
        request();
    }
});

$('input, textarea').keypress(function(e) {
    if (e.which == 13 && validar()) {
        request();
        return false;
    }
});

function request() {
    $.ajax({
        url: "../php/envia.php",
        method: "POST",
        data: $(this).serialize(),
        dataType: "json",
        beforeSend: function() {
            antesEnvio();
        },
        success: function() {
            sucessoRequest();
        },
        error: function() {
            erroRequest();
        }
    });
}

function antesEnvio() {
    $('input,textarea').blur();
    $("#notificacao").fadeIn("slow");
    $("#txtnotif").html("");
    $("#titnotif").html("Enviando...");
    $("#notificacao").attr('class', 'notificacao info');
}

function sucessoRequest() {
    $("#titnotif").html("Seu formulário foi enviado com sucesso!");
    $("#txtnotif").html("Logo faremos contato :)");
    $("#notificacao").attr('class', 'notificacao boa');
    $("#notificacao").fadeIn("slow");
    $("input").val("");
    $("textarea").val("");
    setTimeout(function() {
        $("#notificacao").fadeOut("slow");
    }, 6500);
}

function erroRequest() {
    $("#titnotif").html("Sua mensagem não foi enviada!");
    $("#txtnotif").html("Por favor, tente contato pelo nosso E-mail, ou telefone.");
    $("#notificacao").attr('class', 'notificacao ruim');
    $("#notificacao").fadeIn("slow");

    setTimeout(function() {
        $("#notificacao").fadeOut("slow");
    }, 6500);
}

function validar() {
    var nome = $("#nome");
    var email = $("#email");
    var telefone = $("#telefone").val();
    var mensagem = $("#mensagem");
    var valido = true;
    var filtro = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

    if (nome.val() === "") {
        $("#valida_nome").html("<p class='palerta'><span class='glyphicon glyphicon-info-sign'></span> Preencha o Campo Nome</p>");
        $("#valida_nome").fadeIn();
        valido = false;
    } else {
        $("#valida_nome").fadeOut();
    }

    if (email.val() === "") {
        $("#valida_email").html("<p class='palerta'><span class='glyphicon glyphicon-info-sign'></span> Preencha o Campo E-mail</p>");
        $("#valida_email").fadeIn();
        valido = false;
    } else if (!filtro.test(email.val())) {
        $("#valida_email").html("<p class='palerta'><span class='glyphicon glyphicon-info-sign'></span> Preencha com um e-mail válido</p>");
        $("#valida_email").fadeIn();
        valido = false;
    } else if (filtro.test(email.val())) {
        $("#valida_email").fadeOut();
    }

    if (telefone === "") {
        $("#valida_telefone").html("<p class='palerta'><span class='glyphicon glyphicon-info-sign'></span> Preencha o campo Telefone</p>");
        $("#valida_telefone").fadeIn();
        valido = false;
    } else if (telefone.toString().length < 8 || telefone.toString().length > 11) {
        $("#valida_telefone").html("<p class='palerta'><span class='glyphicon glyphicon-info-sign'></span> Insira uma quantidade de números correta (entre 8 e 11 caracteres)</p>");
        $("#valida_telefone").fadeIn();
        valido = false;
    } else if (telefone.toString().length >= 8 && telefone.toString().length <= 11) {
        $("#valida_telefone").fadeOut();

    }

    if (mensagem.val() === "") {
        $("#valida_mensagem").html("<p class='palerta'><span class='glyphicon glyphicon-info-sign'></span> Preencha o campo Mensagem</p>");
        $("#valida_mensagem").fadeIn();
        valido = false;
    } else {
        $("#valida_mensagem").fadeOut();

    }
    return valido;
}
