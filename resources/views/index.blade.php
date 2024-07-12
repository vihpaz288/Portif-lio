<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifólio - Vitória paz</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<style>
    /* fonte texto */
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

    /* :root{
    --main-color: #111111;
    --text-color: white;
    --bg-color-01: 
} */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        border: none;
        outline: none;
        scroll-behavior: smooth;
    }

    html {
        font-family: Montserrat, sans-serif;
        font-size: 16px;
    }

    body {
        background-color: #262626;
        color: white;
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        padding: 1.1rem;
        background-color: #666666;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 100;
    }

    .logo {
        font-size: 1.7rem;
        color: white;
        font-weight: 600;
        cursor: default;
    }

    .nav a {
        font-size: 1.2rem;
        color: white;
        padding: 0.5rem 1rem;
        transition: 0.4s;
    }

    .nav a:hover {
        color: #b6b6b6;
    }

    section {
        min-height: 100vh;
        padding: 6rem 6rem 2rem;
    }

    span {
        color: #f26a6e;
    }

    .home {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;
    }

    .home-img {
        width: 100%;
        border-right: solid 0.6rem #f26a6e;
        border-bottom: solid 0.6rem #f26a6e;
    }

    .home-content {
        width: 45%;
    }

    .home-content h1 {
        font-weight: 700;
        line-height: 1.3;
    }

    .home-content h3 {
        font-weight: 700;
        line-height: 1.3rem;
    }

    .home-content p {
        margin-top: 1.2rem;
        text-align: justify;
    }

    .conhecimentos h2,
    .projetos h2,
    .contato h2 {
        font-size: 2.2rem;
        margin-bottom: 1rem;
        text-align: center;
    }

   
    
    .conhecimento-box{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 25rem;
        margin-bottom: 1rem;
    }

    .conhecimento-container .conhecimento-box{
        padding: 2rem 1rem 2.5rem;
        border-radius: 1.2rem;
        text-align: center;
        background-color: #6a6a6a;
        transition: 0.5s ease;
    }

    .conhecimento-container .conhecimento-box:hover{

        border-color: #f26a6e;
        transition: scale(1.01);
    }

    .conhecimento-box i{
        font-size: 4.3rem;
        color: #f26a6e;
    }
    .conhecimento-box h3{
        font-size: 1.5rem;
    }

    .conhecimento-box p{
        margin: 0.5rem;
        letter-spacing: 0.1rem;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

</style>

<body>
    <header>
        <a href="" class="logo">Portifolio</a>
        <div class="nav">
            <a href="">Home</a>
            <a href="">Quem eu sou</a>
            <a href="">Experiências</a>
            <a href="">Conhecimentos</a>
            <a href="">Projeto</a>
            <a href="">Contato</a>
        </div>
    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h3>Olá,</h3>
            <h1>Vitória Paz</h1>
            <h3>Full-Stack <span>19 anos</span> <span>Ceara</span> </h3>

            <p>Meu objetivo é construir uma carreira sólida e prosperar como uma profissional exemplar. Além disso, desejo contribuir significativamente para projetos inovadores que possam impactar positivamente nossa sociedade.
                Estou determinada a realizar meus sonhos e desejos, transformando-me não apenas em uma grande profissional na área de desenvolvimento de sistemas, mas também em uma pessoa melhor a cada dia.</p>

            <div class="social-media">
                <a href=""><i class='bx bxl-instagram-alt'></i></a>
                <a href=""><i class='bx bxl-github'></i></a>
                <a href=""><i class='bx bxl-linkedin-square'></i></a>
                <a href=""><i class='bx bxs-envelope'></i></a>
            </div>

            <div>
                <a href="">Dowload CV</a>
            </div>
        </div>

        <div class="home-img">
            <img src="https://i.pinimg.com/originals/0b/01/3a/0b013a80c2762d2876dc2b899c0284a1.png" alt="">
        </div>
    </section>

    <!-- service -->
    <section class="conhecimentos" id="conhecimentos">
        <h2>Meus <span>Conhecimentos</span> </h2>
        <div class="conhecimento-container">
            <div class="conhecimento-box">
                <i class='bx bxs-file-doc'></i>
                <h3>Html</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam repudiandae quos nobis debitis aperiam aliquid dicta accusantium. Ipsum sapiente commodi asperiores distinctio nostrum facilis odio iure consequuntur deserunt omnis, repellendus delectus quia laboriosam provident minima inventore deleniti hic a laudantium praesentium! Sunt placeat dolor eos impedit eveniet nemo distinctio architecto.</p>
                <a href="" class="btn">Documentação</a>
            </div>

            <div class="conhecimento-box">
                <i class='bx bxs-file-doc'></i>
                <h3>Css</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam repudiandae quos nobis debitis aperiam aliquid dicta accusantium. Ipsum sapiente commodi asperiores distinctio nostrum facilis odio iure consequuntur deserunt omnis, repellendus delectus quia laboriosam provident minima inventore deleniti hic a laudantium praesentium! Sunt placeat dolor eos impedit eveniet nemo distinctio architecto.</p>
                <a href="" class="btn">Documentação</a>
            </div>

            <div class="conhecimento-box">
                <i class='bx bxs-file-doc'></i>
                <h3>Boostrap</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam repudiandae quos nobis debitis aperiam aliquid dicta accusantium. Ipsum sapiente commodi asperiores distinctio nostrum facilis odio iure consequuntur deserunt omnis, repellendus delectus quia laboriosam provident minima inventore deleniti hic a laudantium praesentium! Sunt placeat dolor eos impedit eveniet nemo distinctio architecto.</p>
                <a href="" class="btn">Documentação</a>
            </div>

            <div class="conhecimento-box">
                <i class='bx bxs-file-doc'></i>
                <h3>Mysql</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam repudiandae quos nobis debitis aperiam aliquid dicta accusantium. Ipsum sapiente commodi asperiores distinctio nostrum facilis odio iure consequuntur deserunt omnis, repellendus delectus quia laboriosam provident minima inventore deleniti hic a laudantium praesentium! Sunt placeat dolor eos impedit eveniet nemo distinctio architecto.</p>
                <a href="" class="btn">Documentação</a>
            </div>

            <div class="conhecimento-box">
                <i class='bx bxs-file-doc'></i>
                <h3>Laravel</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam repudiandae quos nobis debitis aperiam aliquid dicta accusantium. Ipsum sapiente commodi asperiores distinctio nostrum facilis odio iure consequuntur deserunt omnis, repellendus delectus quia laboriosam provident minima inventore deleniti hic a laudantium praesentium! Sunt placeat dolor eos impedit eveniet nemo distinctio architecto.</p>
                <a href="" class="btn">Documentação</a>
            </div>

            <div class="conhecimento-box">
                <i class='bx bxs-file-doc'></i>
                <h3>Jquery</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam repudiandae quos nobis debitis aperiam aliquid dicta accusantium. Ipsum sapiente commodi asperiores distinctio nostrum facilis odio iure consequuntur deserunt omnis, repellendus delectus quia laboriosam provident minima inventore deleniti hic a laudantium praesentium! Sunt placeat dolor eos impedit eveniet nemo distinctio architecto.</p>
                <a href="" class="btn">Documentação</a>
            </div>
        </div>
    </section>

    <!-- portifolio -->
    <section class="projetos" id="projetos">
        <div class="projetos-box">
            <img src="https://nfe.io/blog/app/uploads/2017/07/programas-para-controle-financeiro-gratis.png" alt="">
            <div class="projetos-layer">
                <h4>Controle financeiro</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus corporis quae aspernatur delectus minus veniam in ipsam dolores consequatur, alias eligendi vel fugit architecto velit commodi modi voluptas eum unde, non, harum laboriosam rem corrupti dolorum? Vitae, asperiores, dolor cupiditate fugit tenetur expedita rem necessitatibus libero est, dicta repellat voluptate porro natus excepturi debitis sit veritatis velit possimus sequi iusto! Incidunt libero quaerat natus quidem delectus labore nam, repellat laudantium quasi quas asperiores dolorem fugit, consequatur ipsam, sunt atque? Consequatur beatae in aut repudiandae, voluptatem dolores dicta repellendus sunt mollitia similique voluptates deleniti ab accusamus quis quam tempore. Rerum, fugit.</p>
                <a href=""><i class='bx bxs-file-doc'></i></a>
                <a href=""><i class='bx bx-code-alt'></i></a>
            </div>
        </div>

        <div class="projetos-box">
            <img src="https://www.acadesc.com.br/images/foto1.png" alt="">
            <div class="projetos-layer">
                <h4>Controle educacional</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus corporis quae aspernatur delectus minus veniam in ipsam dolores consequatur, alias eligendi vel fugit architecto velit commodi modi voluptas eum unde, non, harum laboriosam rem corrupti dolorum? Vitae, asperiores, dolor cupiditate fugit tenetur expedita rem necessitatibus libero est, dicta repellat voluptate porro natus excepturi debitis sit veritatis velit possimus sequi iusto! Incidunt libero quaerat natus quidem delectus labore nam, repellat laudantium quasi quas asperiores dolorem fugit, consequatur ipsam, sunt atque? Consequatur beatae in aut repudiandae, voluptatem dolores dicta repellendus sunt mollitia similique voluptates deleniti ab accusamus quis quam tempore. Rerum, fugit.</p>
                <a href=""><i class='bx bxs-file-doc'></i></a>
                <a href=""><i class='bx bx-code-alt'></i></a>
            </div>
        </div>

        <div class="projetos-box">
            <img src="https://www.juina.mt.leg.br/imagens/imagens-de-acesso/relatorios.png/image" alt="">
            <div class="projetos-layer">
                <h4>Controle de relatorio</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus corporis quae aspernatur delectus minus veniam in ipsam dolores consequatur, alias eligendi vel fugit architecto velit commodi modi voluptas eum unde, non, harum laboriosam rem corrupti dolorum? Vitae, asperiores, dolor cupiditate fugit tenetur expedita rem necessitatibus libero est, dicta repellat voluptate porro natus excepturi debitis sit veritatis velit possimus sequi iusto! Incidunt libero quaerat natus quidem delectus labore nam, repellat laudantium quasi quas asperiores dolorem fugit, consequatur ipsam, sunt atque? Consequatur beatae in aut repudiandae, voluptatem dolores dicta repellendus sunt mollitia similique voluptates deleniti ab accusamus quis quam tempore. Rerum, fugit.</p>
                <a href=""><i class='bx bxs-file-doc'></i></a>
                <a href=""><i class='bx bx-code-alt'></i></a>
            </div>
        </div>

        <div class="projetos-box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQb3uAWaKX563-JdJDT-ClOZrZ-EbQJg0Rusg&s" alt="">
            <div class="projetos-layer">
                <h4>Loja</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus corporis quae aspernatur delectus minus veniam in ipsam dolores consequatur, alias eligendi vel fugit architecto velit commodi modi voluptas eum unde, non, harum laboriosam rem corrupti dolorum? Vitae, asperiores, dolor cupiditate fugit tenetur expedita rem necessitatibus libero est, dicta repellat voluptate porro natus excepturi debitis sit veritatis velit possimus sequi iusto! Incidunt libero quaerat natus quidem delectus labore nam, repellat laudantium quasi quas asperiores dolorem fugit, consequatur ipsam, sunt atque? Consequatur beatae in aut repudiandae, voluptatem dolores dicta repellendus sunt mollitia similique voluptates deleniti ab accusamus quis quam tempore. Rerum, fugit.</p>
                <a href=""><i class='bx bxs-file-doc'></i></a>
                <a href=""><i class='bx bx-code-alt'></i></a>
            </div>
        </div>

        </div>
    </section>

    <!-- contact -->
    <section class="contato" id="contato">
        <h2>Entre <span>em</span> <span>contato</span></h2>
        <form action="">
            <div class="input-box">
                <input type="text" placeholder="Seu nome">
                <input type="text" placeholder="E-mail">
            </div>
            <div class="input-box">
                <input type="number" placeholder="Seu número">
                <input type="text" placeholder="Assunto">
            </div>
            <textarea name="" id="" cols="30" rows="8" placeholder="Menssagem"></textarea>
            <a href="" class="btn">Enviar menssagem</a>
        </form>
    </section>

    <footer>
        <p>© 2024 Vitoriapaz. Todos os direitos reservados.</p>
    </footer>

</body>

</html>