<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paulo Barbosa Dev</title>
    <link rel="shortcut icon" href="app/src/icons/P.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Css -->
    <link rel="stylesheet" href="app/css/style.css">
    <!-- Font-Aewsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- Js -->
    <script src="app/js/app.js"></script>
</head>

<body>

    <div id="mensagem" class="ms-3 py-2 px-2" style="display:none; position: fixed; top: 20px; right: -500px; z-index: 999;">

    </div>

    <header>
        <div class="container">
            <div class="row mt-2 align-items-center">
                <div class="col text-center d-none d-md-block">
                    <a href="#sobre" class="text-decoration-none mx-2">Sobre mim</a>
                    <a href="#container-carousel" class="text-decoration-none mx-2">Tecnologias</a>
                    <a href="#formacao" class="text-decoration-none mx-2">Formação</a>
                    <a href="#projetos" class="text-decoration-none mx-2">Projetos</a>
                    <a href="#contato" class="text-decoration-none mx-2">Contato</a>
                </div>

                <div class="col d-md-none text-end">
                    <button id="menu-toggle" class="btn btn-primary">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>

            <div id="mobile-menu" class="d-md-none text-center mt-3" style="display: none;">
                <a href="#sobre" class="text-decoration-none d-block my-2">Sobre mim</a>
                <a href="#container-carousel" class="text-decoration-none d-block my-2">Tecnologias</a>
                <a href="#formacao" class="text-decoration-none d-block my-2">Formação</a>
                <a href="#projetos" class="text-decoration-none d-block my-2">Projetos</a>
                <a href="#contato" class="text-decoration-none d-block my-2">Contato</a>
            </div>
            <hr>
        </div>
    </header>

    <div class="container" id="sobre">
        <div class="row">
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center p-0">
                <img id="img-perfil" src="app/src/perfil.png" alt="Imagem de perfil"
                    style="max-height: 50%;">
            </div>

            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                <div class="sobre text-lg-start text-center">
                    <h1 class="fw-bolder text-white">PAULO BARBOSA</h1>
                    <h3 class="fst-italic fw-bold">DESENVOLVEDOR WEB FULL-STACK</h3>
                    <p>Iniciei minha jornada no desenvolvimento web como freelancer, onde consolidei e ampliei minhas
                        habilidades em front-end e back-end. Atualmente, estou em um processo de transição de carreira,
                        buscando me estabelecer de forma sólida como desenvolvedor web. Nos últimos meses, atuei
                        intensivamente como freelancer, entregando soluções completas e personalizadas para clientes.
                    </p>
                    <div id="downloads" class="text-lg-start text-center">
                        <a href="app/src/PAULO BARBOSA.docx" class="btn text-white"><i class="fa-solid fa-file"></i> CV</a>
                        <a href="https://www.linkedin.com/in/paulo-victorsb/" target="_blank" class="btn text-white"><i
                                class="fa-brands fa-linkedin"></i> Linkedin</a>
                        <a href="https://github.com/Paulo-VictorSB" target="_blank" class="btn text-white"><i
                                class="fa-brands fa-github"></i> Github</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div id="container-carousel" class="container my-5">
        <div id="carousel-wrapper">
            <h3 class="text-center pb-5 fw-bold">Tecnologias</h3>
            <div id="row-carousel" class="carousel-track pb-5">
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/html.png" alt="HTML5" class="img-fluid">
                    <h6>HTML</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/css.png" alt="CSS3" class="img-fluid">
                    <h6>CSS</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/bootstrap.png" alt="Bootstrap" class="img-fluid">
                    <h6>Bootstrap</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/js.png" alt="JavaScript" class="img-fluid">
                    <h6>JavaScript</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/social.png" alt="jQuery" class="img-fluid">
                    <h6>jQuery</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/php.png" alt="PHP" class="img-fluid">
                    <h6>Php</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/mysql.png" alt="MySQL" class="img-fluid">
                    <h6>MySQL</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/laravel.svg" alt="Laravel" class="img-fluid">
                    <h6>Laravel</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/git.png" alt="Git" class="img-fluid">
                    <h6>Git</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/github.png" alt="GitHub" class="img-fluid">
                    <h6>GitHub</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/scrum.png" alt="Scrum" class="img-fluid">
                    <h6>Scrum</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/cloud-api.png" alt="Api" class="img-fluid">
                    <h6>Api</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/html.png" alt="HTML5" class="img-fluid">
                    <h6>HTML</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/css.png" alt="CSS3" class="img-fluid">
                    <h6>CSS</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/bootstrap.png" alt="Bootstrap" class="img-fluid">
                    <h6>Bootstrap</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/js.png" alt="JavaScript" class="img-fluid">
                    <h6>JavaScript</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/social.png" alt="jQuery" class="img-fluid">
                    <h6>jQuery</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/php.png" alt="PHP" class="img-fluid">
                    <h6>Php</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/mysql.png" alt="MySQL" class="img-fluid">
                    <h6>MySQL</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/laravel.svg" alt="Laravel" class="img-fluid">
                    <h6>Laravel</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/git.png" alt="Git" class="img-fluid">
                    <h6>Git</h6>
                </div>
                <div class="col carrossel-element text-center text-white">
                    <img src="app/src/icons/github.png" alt="GitHub" class="img-fluid">
                    <h6>GitHub</h6>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div id="formacao" class="container">
        <div class="row fw-bold text-center">
            <h3>Formação</h3>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                <div class="card h-100">
                    <div class="card-header">
                        <h4>Analise e desenvolvimento de sistemas - UNIFG</h4>
                    </div>
                    <div class="card-body">
                        <p>11/24 à 05/27</p>
                        <p>Desempenhando diversas funções relacionadas ao desenvolvimento, manutenção e susporte de
                            sistemas computacionais, com as principais funcionalidades que envolvem programação, analise
                            de dados, testes e garantir que o sistema funcione corretamente para atender às necessidades
                            do clientes.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                <div class="card">
                    <div class="card-header">
                        <h4>Desenvolvimento Web Compacto e Completo - UDEMY</h4>
                    </div>
                    <div class="card-body">
                        <p>06/24 à 06/25</p>
                        <p>Aprendendo as principais tecnologias para desenvolvimento de páginas e aplicações WEB</p>
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>JavaScript para DOM</li>
                            <li>Bootstrap 5</li>
                            <li>PHP 8</li>
                            <li>REST APIs</li>
                            <li>MySQL & SQL</li>
                            <li>MVC</li>
                            <li>Git & Github</li>
                            <li>NodeJS</li>
                            <li>CodeIgniter 4</li>
                            <li>Lavaravel</li>
                            <li>Hospedagem WEB através do cPanel</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div id="projetos" class="container">
        <div class="row fw-bold text-center">
            <h3>Projetos</h3>
        </div>
        <div class="row mb-3">


            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                <div class="card border-dark">
                    <div class="card-header text-center">
                        <h4>PapoLive</h4>
                    </div>
                    <div class="card-body">
                        <img src="app/src/images/PapoLive.png" alt="" class="img-fluid border border-dark rounded">
                        <p class="my-3">PapoLive é um sistema de chat em tempo real que permite a criação de usuários e salas com ou sem senha, garantindo segurança e privacidade.

                            Desenvolvido com PHP (API RESTful), JavaScript (Fetch/AJAX), Bootstrap e MySQL, o sistema oferece uma experiência fluida e responsiva, com gerenciamento de sessões e interface intuitiva para qualquer dispositivo.</p>
                    </div>
                    <div class="card-footer">
                        <div class="row my-3">
                            <div class="col">
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">Php</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">Ajax</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">CSS</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">Bootstrap</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">MySQL</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">APIRestful</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex flex-column flex-md-row">
                                <a href="https://pbarbosaprojetos.byethost31.com/"
                                    class="technology-used flex-grow-1 rounded px-3 m-1 text-decoration-none"
                                    target="_blank"><i class="fa-solid fa-link"></i> Acessar</a>
                                <a href="https://github.com/Paulo-VictorSB/PapoLive"
                                    class="technology-used flex-grow-1 rounded px-3 m-1 text-decoration-none"
                                    target="_blank"><i class="fa-solid fa-code"></i> Repositório</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Encurtei -->
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                <div class="card border-dark">
                    <div class="card-header text-center">
                        <h4>Encurtei Online</h4>
                    </div>
                    <div class="card-body">
                        <img src="app/src/images/EncurteiOnline.png" alt="" class="img-fluid border border-dark rounded">
                        <p class="my-3">Encurtei é um encurtador de links 100% gratuito, criado para facilitar o compartilhamento de URLs de forma rápida, segura e profissional.

                            Com encurtamento instantâneo, links personalizáveis e suporte a HTTPS, a ferramenta funciona sem cadastro e garante links permanentes — ideais para campanhas, QR Codes, redes sociais e muito mais.</p>
                    </div>
                    <div class="card-footer">
                        <div class="row my-3">
                            <div class="col">
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">Php</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">Ajax</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">CSS</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">Bootstrap</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">MySQL</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">APIRestful</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex flex-column flex-md-row">
                                <a href="https://encurtei.online/"
                                    class="technology-used flex-grow-1 rounded px-3 m-1 text-decoration-none"
                                    target="_blank"><i class="fa-solid fa-link"></i> Acessar</a>
                                <a href="https://github.com/Paulo-VictorSB/encurtei"
                                    class="technology-used flex-grow-1 rounded px-3 m-1 text-decoration-none"
                                    target="_blank"><i class="fa-solid fa-code"></i> Repositório</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">


            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                <div class="card border-dark">
                    <div class="card-header text-center">
                        <h4>KeyWorlds - App!</h4>
                    </div>
                    <div class="card-body">
                        <img src="app/src/images/keyworlds.png" alt="" class="img-fluid border border-dark rounded">
                        <p class="my-3">KeyWorlds é um jogo desenvolvido para testar e aprimorar sua digitação e
                            reconhecimento de caracteres. O desafio consiste em digitar corretamente as sequências
                            exibidas na tela, compostas por letras maiúsculas, minúsculas, números e caracteres
                            especiais. Não há tempo limite, mas a variedade de caracteres torna a experiência
                            desafiadora e envolvente!</p>
                    </div>
                    <div class="card-footer">
                        <div class="row my-3">
                            <div class="col">
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">Php</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">jQuery</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">CSS</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">Bootstrap</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">MySQL</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">MVC</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex flex-column flex-md-row">
                                <a href="https://keyworlds.byethost32.com/?route=index"
                                    class="technology-used flex-grow-1 rounded px-3 m-1 text-decoration-none"
                                    target="_blank"><i class="fa-solid fa-link"></i> Acessar</a>
                                <a href="https://github.com/Paulo-VictorSB/KeyWorldsApp"
                                    class="technology-used flex-grow-1 rounded px-3 m-1 text-decoration-none"
                                    target="_blank"><i class="fa-solid fa-code"></i> Repositório</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mt-3 mt-lg-0">
                <div class="card border-dark h-100">
                    <div class="card-header text-center">
                        <h4>GERContatos</h4>
                    </div>
                    <div class="card-body">
                        <img src="app/src/images/GERcontatos.png" alt="" class="img-fluid border border-dark rounded">
                        <p class="my-3">Um app de gerenciamento de contatos permite adicionar, editar, excluir e
                            pesquisar contatos de forma simples. Além disso, oferece a opção de exportar a lista de
                            contatos para um arquivo CSV, facilitando o backup e a transferência de dados.</p>
                    </div>
                    <div class="card-footer">
                        <div class="row my-3">
                            <div class="col">
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">Php</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">jQuery</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">CSS</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">Bootstrap</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">MySQL</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex flex-column flex-md-row">
                                <a href="https://gercontatos.byethost32.com/?route=index"
                                    class="technology-used flex-grow-1 rounded px-3 m-1 text-decoration-none"
                                    target="_blank"><i class="fa-solid fa-link"></i> Acessar</a>
                                <a href="https://github.com/Paulo-VictorSB/GERContatos"
                                    class="technology-used flex-grow-1 rounded px-3 m-1 text-decoration-none"
                                    target="_blank"><i class="fa-solid fa-code"></i> Repositório</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">


            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mt-3">
                <div class="card border-dark">
                    <div class="card-header text-center">
                        <h4>Weather-App</h4>
                    </div>
                    <div class="card-body">
                        <img src="app/src/images/weatherapp.png" alt="" class="img-fluid border border-dark rounded">
                        <p class="my-3">O Weather-App é um projeto desenvolvido com HTML, CSS e JavaScript, que utiliza
                            uma API gratuita de previsão do tempo para fornecer informações atualizadas sobre o clima. O
                            aplicativo permite ao usuário consultar a temperatura, condições climáticas e outros dados
                            relevantes de qualquer cidade de forma prática e intuitiva.</p>
                    </div>
                    <div class="card-footer">
                        <div class="row my-3">
                            <div class="col">
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">HTML</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">CSS</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">JavaScript</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">API</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex flex-column flex-md-row">
                                <a href="https://paulo-victorsb.github.io/Weather-App/"
                                    class="technology-used flex-grow-1 rounded px-3 m-1 text-decoration-none"
                                    target="_blank"><i class="fa-solid fa-link"></i> Acessar</a>
                                <a href="https://github.com/Paulo-VictorSB/Weather-App"
                                    class="technology-used flex-grow-1 rounded px-3 m-1 text-decoration-none"
                                    target="_blank"><i class="fa-solid fa-code"></i> Repositório</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mt-3">
                <div class="card border-dark h-100">
                    <div class="card-header text-center">
                        <h4>GERContatos</h4>
                    </div>
                    <div class="card-body">
                        <img src="app/src/images/RESTapicountry.png" alt="" class="img-fluid border border-dark rounded">
                        <p class="my-3">Bem-vindo ao repositório Visualizador de Informações de Países via REST API!
                            Este projeto permite aos usuários explorar informações detalhadas sobre países, consumindo
                            uma REST API. A aplicação é desenvolvida em PHP e Bootstrap, proporcionando uma interface
                            simples e elegante.</p>
                    </div>
                    <div class="card-footer">
                        <div class="row my-3">
                            <div class="col">
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">CSS</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">Bootstrap</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">Php</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">cURL</button>
                                <button class="technology-used rounded py-1 px-3 m-1 m-lg-0">REST Api</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex flex-column flex-md-row">
                                <a href="https://Rest-api-country-information.byethost32.com/?route=index"
                                    class="technology-used flex-grow-1 rounded px-3 m-1 text-decoration-none"
                                    target="_blank"><i class="fa-solid fa-link"></i> Acessar</a>
                                <a href="https://github.com/Paulo-VictorSB/Rest-api-country-information/tree/main"
                                    class="technology-used flex-grow-1 rounded px-3 m-1 text-decoration-none"
                                    target="_blank"><i class="fa-solid fa-code"></i> Repositório</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
        <a href="https://github.com/Paulo-VictorSB?tab=repositories" target="_blank">Veja mais no meu Github!</a>
        <hr>
    </div>

    <div id="contato" class="container my-5">
        <div class="row fw-bold text-center mb-4">
            <h3>Contato</h3>
        </div>

        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <a href="mailto:paulovdbarbosa@gmail.com" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-envelope fa-2x icons-contato"></i>
                    <p class="mt-2 technology-used rounded py-1 px-3 m-1 m-lg-0">paulovdbarbosa@gmail.com</p>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <a href="https://www.linkedin.com/in/paulo-victorsb/" target="_blank"
                    class="text-decoration-none text-dark">
                    <i class="fa-brands fa-linkedin fa-2x icons-contato"></i>
                    <p class="mt-2 technology-used rounded py-1 px-3 m-1 m-lg-0">LinkedIn</p>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <a href="tel:+5511999999999" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-phone fa-2x icons-contato"></i>
                    <p class="mt-2 technology-used rounded py-1 px-3 m-1 m-lg-0">(81) 99990-6183</p>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <a href="https://github.com/Paulo-VictorSB" target="_blank" class="text-decoration-none text-dark">
                    <i class="fa-brands fa-github fa-2x icons-contato"></i>
                    <p class="mt-2 technology-used rounded py-1 px-3 m-1 m-lg-0">GitHub</p>
                </a>
            </div>
        </div>

        <div class="container w-75 my-5">
            <div class="row fw-bold text-center mb-4">
                <h3>Me envie uma mensagem!</h3>
            </div>

            <form method="post">
                <div class="row g-3">
                    <div class="col-12 col-md-6">
                        <label for="name" class="form-label">
                            <p>Nome</p>
                        </label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Seu nome" required>
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="email" class="form-label">
                            <p>E-mail</p>
                        </label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="seu@email.com"
                            required>
                    </div>

                    <div class="col-12">
                        <label for="mensagem" class="form-label">
                            <p>Mensagem</p>
                        </label>
                        <textarea name="mensagem" id="mensagemform" rows="4" class="form-control"
                            placeholder="Sua mensagem..." required></textarea>
                    </div>

                    <div class="col-12 text-center mt-3">
                        <button type="button" class="btn btn-primary" id="enviar_mensagem">Enviar</button>
                    </div>
                </div>
            </form>
        </div>


        <hr>
    </div>

    <div class="container">
        <div class="row py-3">
            <div class="col text-center">
                <h5>Paulo Barbosa &copy; 2025 - <?= DATE('Y') ?></h5>
            </div>
        </div>
    </div>

    <button id="btn-topo" class="btn btn-primary"
        style="display: none; position: fixed; bottom: 20px; right: 20px; z-index: 999;">
        <i class="fa-solid fa-arrow-up"></i>
    </button>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>