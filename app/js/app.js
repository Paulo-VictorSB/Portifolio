$(document).ready(() => {
    const $containers = $(".container");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    $(entry.target).addClass("visible");
                }
            });
        },
        { threshold: 0.1 }
    );

    $containers.each(function () {
        observer.observe(this);
    });

    $("#menu-toggle").click(function () {
        $("#mobile-menu").slideToggle(300);
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 10) {
            $('#btn-topo').fadeIn(300);
        } else {
            $('#btn-topo').fadeOut(300);
        }
    });

    $('#btn-topo').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 600);
    });

    $('#enviar_mensagem').click(function (event) {
        event.preventDefault();
        enviar_mensagem();
    });

    async function enviar_mensagem() {
        const dados = {
            nome: $('#name').val(),
            email: $('#email').val(),
            mensagem: $('#mensagemform').val()
        };

        console.log('Enviando os seguintes dados:', dados);

        $.ajax({
            url: 'app/scripts/enviar_mensagem.php',
            method: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(dados),
            success: function (respostaDados) {
                console.log('Resposta do servidor:', respostaDados);

                if (respostaDados.status !== 200) {
                    if (respostaDados.erro) {
                        let mensagemErro = '';

                        if (respostaDados.erro.nome) mensagemErro += `${respostaDados.erro.nome}\n`;
                        if (respostaDados.erro.email) mensagemErro += `${respostaDados.erro.email}\n`;
                        if (respostaDados.erro.mensagem) mensagemErro += `${respostaDados.erro.mensagem}\n`;

                        $('#mensagem').text(mensagemErro);
                        $('#mensagem').removeClass('bg-success border border-success rounded text-white')
                        $('#mensagem').addClass('bg-danger border border-danger rounded text-white')
                        $('#mensagem').fadeIn(300);
                        $('#mensagem').animate({
                            right: '20px'
                        }, 500);
                        setTimeout(function () {
                            $('#mensagem').fadeOut(300);
                        }, 2000);

                    } else {
                        alert(respostaDados.resposta);
                    }
                    return;
                }

                $('#mensagem').text("Mensagem enviada com sucesso!");
                $('#mensagem').removeClass('bg-danger border border-danger rounded text-white')
                $('#mensagem').addClass('bg-success border border-success rounded text-white')
                $('#mensagem').fadeIn(300);
                $('#mensagem').animate({
                    right: '20px'
                }, 500);
                setTimeout(function () {
                    $('#mensagem').fadeOut(300);
                }, 2000);

                $('#name').val('');
                $('#email').val('');
                $('#mensagemform').val('');
            },
            error: function (xhr, status, erro) {
                console.error('Erro ao enviar a mensagem:', erro);
                alert(`Erro: ${erro}`);
            }
        });
    }

})



