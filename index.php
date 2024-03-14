<?php
require get_theme_file_path('/header.php');
?>

<div class="container-fluid p-0">
    <div class="carousel__container mb-1">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?= get_theme_file_uri('/img/header.png') ?>" alt="First slide">
                </div>
                <div class="carousel-item">
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


    <div class="flow__content-container">
        <div class="slido w-50 text-center">
            <a target="_blank" href="https://app.sli.do/event/r4qH4CKXU5FEumxrzp56W6"><img
                    src="<?= get_theme_file_uri('img/slido.png') ?>" alt=""></a>
        </div>

        <div class="flow__content w-50 text-center">
            <a href="<?= get_theme_file_uri('Workbook Vodacom participante.pdf') ?>"><img
                    src="<?= get_theme_file_uri('img/flow.png') ?>" alt=""></a>
        </div>

    </div>

    <div class="flexisession__container">
        <div class="w-100 text-center mt-3">
            <span class="flexisession__title ">Flexi Session</span>
        </div>

        <div class="card__flexisession-container">

            <div class="flexisession__card">
                <div class="up__content">
                    <img src="<?= get_theme_file_uri('img/Poder.png') ?>" alt="">
                </div>

                <div class="bottom__content ">
                    <span class="">O poder da atitude</span>

                    <p>
                        Sessão Auto-Conhecimento e Reflexão <br />
                        Local – Sky Bar (16º piso) <br />
                        Com Cléria Cossa <br />
                    </p>


                    <a class="btn-standard btn-light-red" href="<?=site_url('poder-da-atitude')?>">Saiba mais</a>
                </div>
            </div>

            <div class="flexisession__card">
                <div class="up__content">
                    <img src="<?= get_theme_file_uri('img/DISC.png') ?>" alt="">
                </div>

                <div class="bottom__content ">
                    <span class="">DISC</span>

                    <p>
                        Sessão Auto-Conhecimento e Reflexão <br />
                        Local – Mezanine <br />
                        Com Simone Segatto <br />
                    </p>


                    <a class="btn-standard btn-light-red" href="<?=site_url('disc')?>">Saiba mais</a>
                </div>
            </div>

            <div class="flexisession__card">
                <div class="up__content">
                    <img src="<?= get_theme_file_uri('img/Vulne.png') ?>" alt="">
                </div>

                <div class="bottom__content ">
                    <span class="">VULNERABILIDADE</span>

                    <p>
                        Sessão Interactiva e de Comunicação <br />
                        Local – Sala Mafalala <br />
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
                    <span class="">COMPORTAMENTOS DE UMA EQUIPA COESA</span>

                    <p>
                        Sessão Auto-Conhecimento e Reflexão <br />
                        Local – Mezanine <br />
                        Com Michela Simão <br />
                    </p>


                    <a class="btn-standard btn-light-red"
                        href="<?=site_url('comportamentos-de-uma-equipa-coesa')?>">Saiba mais</a>
                </div>
            </div>
        </div>


    </div>


    <div class="speaker__container d-none">
        <div class="d-flex justify-content-center">
            <span class="main__title text-center">
                Speakers
            </span>
        </div>

        <div class="speaker__carousel">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= get_theme_file_uri('/img/speaker.png') ?>"
                            alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= get_theme_file_uri('/img/speaker.png') ?>"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= get_theme_file_uri('/img/speaker.png') ?>"
                            alt="Third slide">
                    </div>
                </div>
                <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->
            </div>
        </div>
    </div>

    <div class="card__container ">

        <div class="d-flex justify-content-center w-100">
            <p class="content-title">
                Our leaders bring Purpose and Spiritto everything we do to enable growth and accelerate our
                transformation, creating an inclusive environmentwhere everyone can thrive and feel they belong.
            </p>
        </div>

        <div class="card__topic">
            <span class="main__title">Earn customer loyaltyt</span>
            <strong>This means as a leader you:</strong>

            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Deepen team connection to our customers
                    and communities
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Foster authentic relationships with customers
                    and partners that build trust
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Explicitly take customer-centric decisions and
                    take personal ownership to achieve results
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Simplify processes through digitalisation and
                    promote a digital mindset and digital first
                    customer experience
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Stay focused on the big priorities, know when
                    to make meaningful trade-offs and
                    demonstrate brilliant execution
                </span>
            </div>

        </div>

        <div class="card__topic">
            <span class="main__title">Create the future</span>
            <strong>This means as a leader you:</strong>

            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Create an inspiring vision for your team
                    to drive strategy and performance
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Show ambition and courage, empowering
                    others to go beyond the plan
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Are bold and challenge teams to reimagine
                    how things are done
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Prompt new thinking and ideas by asking
                    “what if” questions
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Use knowledge of the external environment
                    (customers, partners, competition, external
                    bodies) to identify and act on opportunities
                    for growth at pace
                </span>
            </div>

        </div>
        <div class="card__topic">
            <span class="main__title">Experiment learn fast</span>
            <strong>This means as a leader you:</strong>

            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Create psychological safety so everyone
                    can have an impact
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Fuel innovative ideas from others and test
                    them to enable growth
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Explore successes and failures with
                    curiosity and resilience; fearlessly
                    recognising lessons learned
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Share your ongoing learning and personal
                    purpose with others
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Learn fast from digital adoption, using
                    learnings to drive simplicity, scale
                    and efficiency
                </span>
            </div>

        </div>

        <div class="card__topic">
            <span class="main__title">Get it done, together</span>
            <strong>This means as a leader you:</strong>

            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Articulate your team’s role in making our
                    strategy happen, prioritising and aligning
                    resources with current and future needs
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Actively collaborate to break silos and hold
                    your team accountable to do the same
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Develop others to make the most of their
                    talents and coach them to take ownership to
                    get things done
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Create an inclusive environment ensuring
                    the safety and wellbeing of others
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>Live our Purpose and demonstrate the
                    highest standards of integrity
                </span>
            </div>

        </div>
    </div>



    <div class="keypoints__container d-none">

        <div class="w-100 keypoints__title">
            <h1>Keypoints</h1>
        </div>

        <div class="card__topic ">
            <span class="main__title">
                WHY
                <img src="<?= get_theme_file_uri('/img/question.png')?>" alt="">
            </span>

            <div class="line__container">
                <div class="right__curve"></div>
                <div class="left__curve"></div>
            </div>
            <div class="topic__content mt-5">
                <i class="fa-solid fa-minus"></i>
                <span>Leaders at all levels are critical to
                    delivering our ambitious growth
                    agenda, and driving Spirit. We’re
                    putting forward the Leadership
                    Standardsto make it clear to all
                    our leaders and anyone aspiring to
                    a leadership career in our company
                    what ‘leading with Spirit’ looks like,
                    and what it takes to be successful
                    at Vodafone.
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>The Leadership Standards have
                    also been designed to help focus
                    development conversations and
                    interventions.
                </span>
            </div>

        </div>
        <div class="card__topic ">
            <span class="main__title">WHAT <img src="<?= get_theme_file_uri('/img/question.png')?>" alt=""></span>

            <div class="line__container">
                <div class="right__curve"></div>
                <div class="left__curve"></div>
            </div>
            <div class="topic__content mt-5">
                <i class="fa-solid fa-minus"></i>
                <span>Leaders at all levels are critical to
                    delivering our ambitious growth
                    agenda, and driving Spirit. We’re
                    putting forward the Leadership
                    Standardsto make it clear to all
                    our leaders and anyone aspiring to
                    a leadership career in our company
                    what ‘leading with Spirit’ looks like,
                    and what it takes to be successful
                    at Vodafone.
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>The Leadership Standards have
                    also been designed to help focus
                    development conversations and
                    interventions.
                </span>
            </div>

        </div>
        <div class="card__topic ">
            <span class="main__title">WHO <img src="<?= get_theme_file_uri('/img/question.png')?>" alt=""></span>

            <div class="line__container">
                <div class="right__curve"></div>
                <div class="left__curve"></div>
            </div>
            <div class="topic__content mt-5">
                <i class="fa-solid fa-minus"></i>
                <span>Leaders at all levels are critical to
                    delivering our ambitious growth
                    agenda, and driving Spirit. We’re
                    putting forward the Leadership
                    Standardsto make it clear to all
                    our leaders and anyone aspiring to
                    a leadership career in our company
                    what ‘leading with Spirit’ looks like,
                    and what it takes to be successful
                    at Vodafone.
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>The Leadership Standards have
                    also been designed to help focus
                    development conversations and
                    interventions.
                </span>
            </div>

        </div>

        <div class="card__topic ">
            <span class="main__title">HOW <img src="<?= get_theme_file_uri('/img/question.png')?>" alt=""></span>

            <div class="line__container">
                <div class="right__curve"></div>
                <div class="left__curve"></div>
            </div>
            <div class="topic__content mt-5">
                <i class="fa-solid fa-minus"></i>
                <span>Leaders at all levels are critical to
                    delivering our ambitious growth
                    agenda, and driving Spirit. We’re
                    putting forward the Leadership
                    Standardsto make it clear to all
                    our leaders and anyone aspiring to
                    a leadership career in our company
                    what ‘leading with Spirit’ looks like,
                    and what it takes to be successful
                    at Vodafone.
                </span>
            </div>
            <div class="topic__content">
                <i class="fa-solid fa-minus"></i>
                <span>The Leadership Standards have
                    also been designed to help focus
                    development conversations and
                    interventions.
                </span>
            </div>

        </div>
    </div>

</div>


<?php wp_footer(); ?>
</body>

</html>