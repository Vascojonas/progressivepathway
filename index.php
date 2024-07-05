<?php
require get_theme_file_path('/header.php');
?>

<div class="container-fluid p-0">
    <div class="carousel__container mb-1">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?= get_theme_file_uri('/img/flow/Sobre a Flow_page-0002.jpg') ?>"
                        alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= get_theme_file_uri('/img/flow/Sobre a Flow_page-0003.jpg') ?>"
                        alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= get_theme_file_uri('/img/flow/Sobre a Flow_page-0004.jpg') ?>"
                        alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= get_theme_file_uri('/img/flow/Sobre a Flow_page-0005.jpg') ?>"
                        alt="Second slide">
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <div class="flow__content-container mt-3">
        <div class="slido w-50 text-center p-3">
            <a target="_blank" class="text-white  w-100 h-100" href="https://www.menti.com/">Metimeter</a>
        </div>

        <div class="slido flow__content w-50 text-center text-white p-3">
            <a target="_blank" class="text-white  w-100 h-100" href="http://18.203.245.11/">Estado
                FLOW</a>
        </div>

        <div class="flow__content w-50 text-center p-3">
            <a target="_blank" class="text-white  w-100 h-100" href="http://flowplay.learnit.co.mz/">Dinâmicas</a>
        </div>

    </div>

    <div class="flexisession__container">
        <div class="w-100 text-center mt-3">
            <span class="flexisession__title ">Flexi Session</span>
        </div>

        <div class="card__flexisession-container">

            <div class="flexisession__card">
                <div class="up__content">
                    <img src="<?= get_theme_file_uri('img/estado-flow.png') ?>" alt="">
                </div>

                <div class="bottom__content ">
                    <span class="">Estado de Flow</span>

                    <p>
                        Sessão Auto-Conhecimento e Reflexão <br />
                        Local – Piscina <br />
                        Com Frederico Ferreira <br />
                    </p>


                    <a class="btn-standard btn-light-red" href="<?=site_url('estado-flow')?>">Saiba mais</a>
                </div>
            </div>

            <div class="flexisession__card">
                <div class="up__content">
                    <img src="<?= get_theme_file_uri('img/shift.png') ?>" alt="">
                </div>

                <div class="bottom__content ">
                    <span class="">Shift</span>

                    <p>
                        Sessão Preparação para mudança <br />
                        Local – Jardim <br />
                        Com Michela Simão <br />
                    </p>


                    <a class="btn-standard btn-light-red" href="<?=site_url('shift')?>">Saiba mais</a>
                </div>
            </div>

            <div class="flexisession__card">
                <div class="up__content">
                    <img src="<?= get_theme_file_uri('img/vulnerabilidade.jpg') ?>" alt="">
                </div>

                <div class="bottom__content ">
                    <span class="">Circulo de Empatia</span>

                    <p>
                        Sessão Interactiva e de Comunicação <br />
                        Local – Jardim <br />
                        Com Matilde Cardoso <br />
                    </p>

                    <a class="btn-standard btn-light-red" href="<?=site_url('vulnerabilidade')?>">Saiba mais</a>
                </div>
            </div>

            <div class="flexisession__card">
                <div class="up__content">
                    <img src="<?= get_theme_file_uri('img/5af.png') ?>" alt="">
                </div>

                <div class="bottom__content ">
                    <span class="">Alto desempenho</span>

                    <p>
                        Sessão Auto-Conhecimento e Reflexão <br />
                        Local – Jardim <br />
                        Com Pedro Mendes <br />
                    </p>


                    <a class="btn-standard btn-light-red"
                        href="<?=site_url('comportamentos-de-uma-equipa-coesa')?>">Saiba mais</a>
                </div>
            </div>
        </div>


    </div>







</div>


<?php wp_footer(); ?>
</body>

</html>