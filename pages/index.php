<?php 
//Conexão
require_once 'login/db_connect.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/style.css">
    <title>Portfolio</title>
</head>
<body>

    <section class="menu show">
        <div class="pessoal">
            <div class="content">
                <img src="../img/nycolas.png">
                <p>Nycolas</p>
            </div>
        </div>

        <div class="redes-sociais">
            <a href="https://github.com/Nycolas-Ramos" target="blank"><i class="fab fa-github-square"></i></a>

            <a href="https://www.instagram.com/marketing_lotus/" target="blank"><i class="fab fa-instagram"></i></a>

            <a href="https://www.linkedin.com/in/nycolas-ramos-2658b2206/" target="blank"><i class="fab fa-linkedin"></i></a>

            <a href="https://web.digitalinnovation.one/users/nycsenju?tab=achievements" target="blank"><i class="fas fa-caret-right"></i></a>
        </div>

        <div class="navegacao">
            <div class="itens">
                <a href="#home">
                    <div class="item">
                        <i class="fas fa-home"></i>
                        <p>Home</p>
                    </div>
                </a>
                <a href="#about">
                    <div class="item">
                        <i class="fas fa-user-alt"></i>
                        <p>About</p>
                    </div>
                </a>
                <a href="#skills">
                    <div class="item">
                    <i class="fas fa-file-contract"></i>
                    <p>Skills</p>
                    </div>
                </a>
                <a href="#contato">
                    <div class="item">
                    <i class="fas fa-envelope"></i>
                    <p>Contato</p>
                    </div>
                </a>
                <a href="#servicos">
                    <div class="item">
                    <i class="fas fa-handshake"></i>
                <p>Serviços</p>
                    </div>
                </a>
                
            </div>
        </div>
    </section><!-- Menu -->

    <i class="fas  menu"></i>

    <section id="home" class="home dir aparecerS">
            <p class="first" >Nycolas Ramos</p>
            <p class="second">Dev Full Stack Júnior  e Designer.</p>
    </section>

    <section id="about" class="about dir">
        <h1>About</h1>
        <hr>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>

        <div class="spec">
            <img src="../img/nycolas.png" alt="Nycolas" data-anima="left">
            <div class="text">
                <h1>
                    Social Media Designer / Full Stack Developer
                </h1>
                <p class="p1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                </p>
                    <br>
                <div class="content">
                    <p class="left">
                        <span class="i1"><i class="fas fa-chevron-right"></i>Birthday: </span> 1 May 1995
                        <br>
                        <span class="i1"><i class="fas fa-chevron-right"></i>Website: </span> www.example.com
                        <br>
                        <span class="i1"><i class="fas fa-chevron-right"></i>Phone: </span>+123 456 7890
                        <br>
                        <span class="i1"><i class="fas fa-chevron-right"></i>City: </span>New York, USA
                    </p>

                    <p class="right">
                        <span class="i1"><i class="fas fa-chevron-right"></i>Age: </span> 30
                        <br>
                        <span class="i1"><i class="fas fa-chevron-right"></i>Degree: </span>Master
                        <br>
                        <span class="i1"><i class="fas fa-chevron-right"></i>PhEmailone: </span>email@example.com
                        <br>
                        <span class="i1"><i class="fas fa-chevron-right"></i>Freelance: </span>Available
                    </p>
                </div>
                    <br>
                <p class="p1">
                    Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
                </p>
            </div>
        </div>
    </section>

    <section id="skills" class="skills dir">
        <h1>Skills</h1>
        <hr>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>

        <div class="skill-group">
            <div data-anima="right" class="skill">
                <p>HTML</p>
                <div class="porc">
                    <p>80%</p>
                    <div class="xp">
                        <div class="preenchimento oitenta"></div>
                    </div>
                </div>
            </div>

            <div data-anima="left" class="skill">
                <p>CSS</p>
                <div class="porc">
                    <p>70%</p>
                    <div class="xp">
                        <div class="preenchimento setenta"></div>
                    </div>
                </div>
            </div>

            <div data-anima="right" class="skill">
                <p>JS</p>
                <div class="porc">
                    <p>50%</p>
                    <div class="xp">
                        <div class="preenchimento""></div>
                    </div>
                </div>
            </div>

            <div data-anima="left" class="skill">
                <p>PHP</p>
                <div class="porc">
                    <p>50%</p>
                    <div class="xp">
                        <div class="preenchimento"></div>
                    </div>
                </div>
            </div>

            <div data-anima="right" class="skill">
                <p>MySQL</p>
                <div class="porc">
                    <p>30%</p>
                    <div class="xp">
                        <div class="preenchimento trinta"></div>
                    </div>
                </div>
            </div>

            <div data-anima="left" class="skill">
                <p>Photoshop</p>
                <div class="porc">
                    <p>60%</p>
                    <div class="xp">
                        <div class="preenchimento sessenta"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    
    <section id="contato" class="contato dir">
        <h1>Contato</h1>
        <hr>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        <div class="group">
            <div class="cont-map" data-anima="left">
                <div class="cont">
                    <i class="fas fa-street-view"></i>
                    <div class="text">
                        <h2>Endereço:</h2>
                        <p>Santa Maria - DF Qr.309 Conj.K lote.20 </p>
                    </div>
                </div>

                <div class="cont">
                    <i class="fas fa-envelope"></i>
                    <div class="text">
                        <h2>Email:</h2>
                        <p>nycsenju@gmail.com </p>
                    </div>
                </div>

                <div class="cont">
                    <i class="fas fa-mobile"></i>
                    <div class="text">
                        <h2>Telefone</h2>
                        <p>+55 (61)9 9855-3403</p>
                    </div>
                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.788150532427!2d-48.021784385590756!3d-16.024539932925556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935981d44dadb977%3A0xa713d50d193dae64!2sMinist%C3%A9rio%20Nova%20Arca!5e0!3m2!1spt-BR!2sbr!4v1628170166420!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="men" data-anima="left">
                <form action="" method="post">
                    <div class="info">
                        <label for="name" class="c"><p>Nome</p></label>
                        <input required type="text" id="name" name="name">

                        <label for="email" class="c"><p>Email</p></label>
                        <input required type="email" id="email" name="email">
                    </div>

                    <label for="men"><p>Mensagem</p></label>
                    <textarea required name="men" id="men" class="c" cols="30" rows="10"></textarea>

                    <button class="b" type="submit" name="submit">Enviar</button>
                </form>
            </div>
        </div>
    </section>

    <section id="servicos" class="servicos dir">
        <h1>Serviços</h1>
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum itaque rerum est fugiat culpa atque maxime amet eaque! Expedita quaerat odit exercitationem dolore quas provident aspernatur temporibus deleniti tempore veritatis?</p>

        <div class="group-s">
            <div class="servico-single" data-anima="left">
                <i class="fas fa-laptop-code"></i>
                <div class="text-s">
                    <p class="t">Desenvolvimento Web</p>
                    <p class="p">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
            </div>

            <div class="servico-single" data-anima="right">
                <i class="fas fa-laptop"></i>
                <div class="text-s">
                    <p class="t">Web Design</p>
                    <p class="p">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
            </div>

            <div class="servico-single"data-anima="left">
                <i class="fas fa-bullhorn"></i>
                <div class="text-s">
                    <p class="t">Design para Social Media</p>
                    <p class="p">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>

            </div>

            <div class="servico-single"data-anima="right">
                <i class="fab fa-uncharted"></i>
                <div class="text-s">
                    <p class="t">Desenvolvimento de Sistemas Web</p>
                    <p class="p">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>

            </div>

            <div class="servico-single" data-anima="left">
                <i class="fas fa-wrench"></i>
                <div class="text-s">
                    <p class="t">Manutenção de Sites e Sistemas</p>
                    <p class="p">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>

            </div>
        </div>
    </section>


    <footer id="rodape" class="dir">

    </footer>

    <!-- Jquery -->
    <script src="../js/jquery-3.6.0.min.js"></script>
    <!-- Jquery -->

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/f94afca80c.js" crossorigin="anonymous"> </script>
    <!-- FontAwesome -->

    <script>
        var el = document.querySelector("i.menu")
        var menu = document.querySelector("section.menu")

        verificacao()
        
        el.addEventListener("click", verificacao)

        function verificacao() {
            if (menu.classList.contains('show'))
            {
                menu.classList.remove('show')
                menu.classList.add('hide')

                el.classList.add('fa-bars')
                el.classList.remove('fa-times')
            }else{
                menu.classList.remove('hide')
                menu.classList.add('show')

                el.classList.add('fa-times')
                el.classList.remove('fa-bars')
            }
        }
    </script>

    <script src="../js/rolagem.js"></script>
</body>
</html>