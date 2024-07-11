<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifólio - Vitória paz</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- cdn font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- cdn font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    /* fonte menu */
    @import url('https://fonts.googleapis.com/css2?family=Arsenal+SC:ital,wght@0,400;0,700;1,400;1,700&family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&family=Rajdhani:wght@300;400;500;600;700&display=swap');
    /* fonte logo */
    @import url('https://fonts.googleapis.com/css2?family=Acme&family=Arsenal+SC:ital,wght@0,400;0,700;1,400;1,700&family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&family=Rajdhani:wght@300;400;500;600;700&family=Satisfy&display=swap');
    /* fonte frase */
    @import url('https://fonts.googleapis.com/css2?family=Playwrite+HR:wght@100..400&display=swap');
    /* fonte texto */
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    nav {
        display: flex;
        height: 60px;
        width: 100%;
        background-color: #111111;
        align-items: center;
        justify-content: space-between;
        padding: 0 50px 0 100px;
        flex-wrap: wrap;
    }

    nav .logo {
        color: white;
        font-size: 30px;
        font-weight: 600;
        font-family: "Acme", sans-serif;
        font-weight: 400;
        font-style: normal;

    }

    nav ul {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
    }

    nav ul li {
        margin: 0 5px;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
        font-size: 17px;
        font-weight: 500;
        padding: 8px 15px;
        border-radius: 5px;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        font-family: "Rajdhani", sans-serif;
        font-weight: 300;
        font-style: normal;
    }

    nav ul li a:hover {
        background: #c3c3c3;
        font-family: "Rajdhani", sans-serif;
        font-weight: 300;
        font-style: normal;
    }

    nav .menu-btn i {
        color: white;
        cursor: pointer;
        display: none;
    }

    section {
        font-family: Montserrat, sans-serif;
        font-optical-sizing: auto;
        width: 100%;
    }



    @media(max-width: 920px) {
        nav .menu-btn i {
            display: block;
        }

        nav ul {
            position: fixed;
            top: 80px;
            left: -100vh;
            background-color: #111111;
            height: 100vh;
            width: 100%;
            text-align: center;
            display: block;
            transition: all 0.3s ease;

        }

        nav ul.open {
            left: 0;
        }

        nav ul li {
            width: 100%;
            margin: 50px 0;

        }

        nav ul li a {
            font-size: 20px;
            font-family: "Rajdhani", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        nav ul li a:hover {
            background: none;
            color: #c3c3c3;
        }

    }
</style>

<body>
    <nav>
        <div class="logo">Vitória paz</div>
        <div class="menu-btn">
            <i class="fa fa-bars fa-2x" onclick="menuShow()"></i>
        </div>
        <ul>
            <li> <a href="">Quem eu sou</a> </li>
            <li> <a href="">Experiência</a> </li>
            <li> <a href="">Conhecimentos</a> </li>
            <li> <a href="">Projetos</a> </li>
            <li> <a href="">Contato</a> </li>
        </ul>
    </nav>
    <section class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <div class="d-flex justify-content-evenly" style="padding: 10px;  font-family: Playwrite HR cursive;
  font-optical-sizing: auto;
  
  font-style: normal; font-size:20px;">
            <p>"Quero viver uma vida em que, no dia da minha morte, eu me sinta feliz e não com medo."</p>
        </div>
        <div class="fw-semibold" style=" margin:10px; font-family: Montserrat, sans-serif;
  font-optical-sizing: auto;">
            <p>Quem eu sou</p>
        </div>
        <div class="d-flex justify-content-between" style="font-family: Montserrat, sans-serif;
  font-optical-sizing: auto;">
            <div class="resumo">
                <p>Sou Vitória Paz, natural de Maracanaú, Ceará, e aos 20 anos já possuo uma sólida formação em tecnologia. Iniciei minha jornada acadêmica no IFCE, onde me graduei em Técnica em Informática. Atualmente, estou cursando Análise e Desenvolvimento de Sistemas na UNINASSAU, buscando aprimorar ainda mais meu conhecimento e habilidades na área.
                    Sou reconhecida por minha pontualidade, honestidade e determinação. Estes valores são fundamentais em minha busca por um crescimento contínuo, tanto profissional quanto pessoal. Identifico-me profundamente com a área de tecnologia, onde vejo não apenas uma carreira, mas uma paixão e um propósito. </p>
                <p>Estou consciente de áreas que precisam de desenvolvimento, como lidar com ansiedade, negatividade e o hábito de pensar demais, e estou comprometida em trabalhar nessas questões para alcançar meu potencial pleno.</p>
                <p>Meu objetivo é construir uma carreira sólida e prosperar como uma profissional exemplar. Além disso, desejo contribuir significativamente para projetos inovadores que possam impactar positivamente nossa sociedade.
                    Estou determinada a realizar meus sonhos e desejos, transformando-me não apenas em uma grande profissional na área de desenvolvimento de sistemas, mas também em uma pessoa melhor a cada dia.</p>
            </div>
            <div class="foto">
                <img src="https://i.pinimg.com/236x/e2/dd/e4/e2dde421cf5953264c826c3aab7d97a6.jpg" alt="">
            </div>
        </div>
        <div class="experiencia">
            <div class="fw-semibold">
                <p>Experiência Profissional: Estágio na Secretaria de Educação de Maracanaú</p>
            </div>
            <div class="ResumoExperiencia">
                <p>Durante meu estágio na Secretaria de Educação de Maracanaú, tive a oportunidade de trabalhar no setor de tecnologia, onde desenvolvi habilidades significativas em jQuery, Laravel e Bootstrap. Utilizei esses conhecimentos de forma prática em projetos como o sistema de controle educacional.
                    Ao longo desse período, pude imergir na rotina de desenvolvedores, adquirindo um entendimento prático do ciclo de desenvolvimento de software e dos desafios enfrentados na área. Essa experiência não apenas fortaleceu minha capacidade técnica, mas também consolidou meu interesse em seguir uma carreira dedicada ao desenvolvimento de sistemas.</p>
            </div>
            </class>
            <div class="conhecimentos">
                <div class="fw-semibold">
                    <p> Conhecimentos em Tecnologia:</p>
                </div>
                <p>Possuo habilidades sólidas em HTML, CSS, jQuery, Bootstrap, Laravel e MySQL.</p>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4 " style="margin-bottom: 50px;">
                <div class="col">
                    <div class="card h-100">
                        <img src="https://s2-techtudo.glbimg.com/7YOBBhghbMF9wsUuBP7UcUh2yXI=/0x342:2439x2307/1008x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2021/n/3/FbrmyhQneVYWGUPIe8vA/adalovelace.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Projeto sobre Ada Lovelace</h5>
                            <p class="card-text">Como meu primeiro trabalho significativo em programação, desenvolvi este projeto como parte do meu curso. Ele destaca a história e o legado de Ada Lovelace, reconhecida como a primeira programadora da história. Ada Lovelace foi uma matemática e escritora britânica do século XIX, conhecida por seu trabalho com o matemático Charles Babbage em sua máquina analítica, precursora dos modernos computadores.

                                O projeto inclui um resumo detalhado da vida de Ada Lovelace, explorando suas contribuições pioneiras para a ciência da computação. Além disso, integra vídeos que ilustram seu impacto e importância na história da tecnologia.

                                Este projeto é não apenas uma introdução à programação, mas também uma homenagem à figura inspiradora de Ada Lovelace e seu papel fundamental no desenvolvimento inicial da computação.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://static.smg.edu.br/wp-content/uploads/2020/12/livros-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Controle Educacional: Sistema de Gestão Escolar</h5>
                            <p class="card-text">Desenvolvi e implementei um sistema abrangente de gestão educacional utilizando jQuery, Laravel, HTML e Bootstrap. Este sistema permite que professores cadastrem alunos, gerenciem disciplinas e atribuam atividades, proporcionando uma plataforma interativa para avaliação de desempenho dos estudantes. Os alunos podem visualizar e entregar tarefas de maneira eficiente, promovendo uma experiência educacional integrada. Utilizei tecnologias modernas para garantir segurança, escalabilidade e usabilidade. Este projeto demonstra minha capacidade em desenvolver soluções robustas para facilitar o aprendizado e a administração educacional.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://www.tilibra.com.br/storage/products/md/calculadora-de-mesa-12-digitos-grande-tc07-preta_210871-e1.jpg?c=fc16e928305e309d12db1d20321f9e67" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sistema de Controle Financeiro Pessoal</h5>
                            <p class="card-text">Desenvolvi e implementei um sistema completo de controle financeiro pessoal, projetado para oferecer aos usuários uma gestão eficaz de suas finanças. Através da plataforma, os usuários podem realizar cadastro, gerenciar contas bancárias, registrar despesas e receitas, e visualizar seu saldo atualizado em tempo real. Utilizei tecnologias como Laravel, MySQL, HTML, CSS, Bootstrap, Jquery para garantir uma interface intuitiva e responsiva. O sistema também oferece funcionalidades de relatórios, permitindo aos usuários imprimir análises detalhadas de suas finanças para uma melhor avaliação e planejamento financeiro. Este projeto demonstra minha habilidade em desenvolver soluções práticas e funcionais para ajudar indivíduos a alcançarem seus objetivos financeiros pessoais.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_882649-MLU73675137671_122023-O.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Controle de Relatórios (Desenvolvido com Laravel, jQuery e Bootstrap)</h5>
                            <p class="card-text">Desenvolvi este sistema utilizando Laravel, jQuery e Bootstrap para gerenciar eficientemente relatórios, tópicos e prazos. Com funcionalidades como cadastro de relatórios com título, descrição e prazo, além da associação a tópicos específicos, o sistema permite a visualização e ação imediata sobre relatórios pendentes, possibilitando a marcação de conclusão e a identificação visual de status (feito, atrasado, no prazo).

                                Destaco também a capacidade do sistema em gerar relatórios detalhados sobre o progresso, incluindo gráficos que exibem o número de tópicos cadastrados e utilizados, bem como o status dos relatórios (falta, atraso, concluído). O sistema permite a geração de relatórios em PDF, proporcionando uma solução completa e eficaz para gestão de projetos e tarefas.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://blog.lojacomac.com.br/wp-content/uploads/2023/06/Como-Montar-uma-Loja-de-Roupas-capa.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Loja Virtual (Desenvolvida com Laravel, jQuery, Bootstrap e CSS)</h5>
                            <p class="card-text">Desenvolvi uma Loja Virtual completa utilizando Laravel, jQuery, Bootstrap e CSS, oferecendo uma experiência robusta tanto para administradores quanto para clientes. No sistema administrativo, é possível cadastrar e gerenciar produtos, acompanhar gráficos de vendas, incluindo os mais vendidos e menos vendidos, e gerenciar pedidos, atualizando status para "em rota" e "entregue" com acesso aos detalhes dos clientes.

                                Para os clientes, a loja oferece um processo simplificado de compra, incluindo cadastro com verificação de maioridade, adição de itens ao carrinho com controle de estoque, cadastro de cartão e endereço, edição de dados pessoais, e visualização detalhada de pedidos com status atualizado.

                                Destaco a funcionalidade de controle de estoque em tempo real, onde a quantidade de itens é automaticamente atualizada após a conclusão da compra, garantindo precisão e eficiência operacional.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center" style="margin-bottom: 50px;">
                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                    <div class="instagram">
                        <i class="fa-brands fa-instagram"></i>
                        <a class="fst-italic" href="" style="text-decoration: none; color:#111111;">DevVitoriaPaz</a>
                    </div>
                    <div class="gitHub">
                        <i class="fab fa-github"></i>
                        <a class="fst-italic" href="" style="text-decoration: none; color:#111111;">ViihPaz</a>
                    </div>
                    <div class="linkedin">
                        <i class="fa-brands fa-linkedin"></i>
                        <a class="fst-italic" href="" style="text-decoration: none; color:#111111;">VitoriaPaz</a>
                    </div>
                    <div class="email">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <a class="fst-italic" href="" style="text-decoration: none; color:#111111;">pazvitoria151@gmail.com</a>
                    </div>
                </div>
            </div>
    </section>
    <footer class="d-flex justify-content-around">
        <p class="fw-semibold">© 2024 Vitoriapaz. Todos os direitos reservados.</p>
    </footer>
</body>
<!-- link bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    var ul = document.querySelector('nav ul');
    var menuBtn = document.querySelector('.menu-btn i');

    function menuShow() {
        if (ul.classList.contains('open')) {
            ul.classList.remove('open');
        } else {
            ul.classList.add('open');

        }
    }
</script>

</html>