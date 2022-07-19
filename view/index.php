<?php
    include_once "../includs/header.php";
?>
    <main class="main" >
        <section class="banner">
            <h1>Free Empowerment Help</h1>
            <div class="banner-img"></div>
        </section>
        <section class="help-section">
            <div class="container">
                <section class="help">
                    <section class="content">
                        <h1>Empowerment Help</h1>
                        <p>Not lack of desire but lack of opportunities has disabled many people to earn a decent
                            living to live a dignified life. Athrout aims at not just assisting the families in
                            need, but also empowers them and provides them opportunities to earn a decent livelihood.</p>
                        <p>The initiative of Empowerment has been carried out in various ways. By the grace
                            of Almighty and with the help of our generous donors we have been able to empower
                            over 400 families and help them run a small business to earn a livelihood. One of our
                            initiatives was Al-Nisa Women’s Empowerment Centre, wherein around 60 underprivileged
                            girls were enrolled and were given extensive training in sewing, cutting and designing.
                            The girls were also given Rs.500 cash and a sewing machine each at the end of the programme.</p>
                    </section>
                    <figure>
                        <iframe src="https://www.youtube.com/embed/Zx2JGXVLdV4"></iframe>
                    </figure>
                </section>
            </div>
        </section>
        <section class="help-section info">
            <div class="container">
                <section class="help">
                    <figure>
                        <iframe src="https://www.youtube.com/embed/Zx2JGXVLdV4 "></iframe>
                    </figure>
                    <section class="content">
                        <p>Not lack of desire but lack of opportunities has disabled many people to earn a decent
                            living to live a dignified life. Athrout aims at not just assisting the families in
                            need, but also empowers them and provides them opportunities to earn a decent livelihood.</p>
                        <p>The initiative of Empowerment has been carried out in various ways. By the grace
                            of Almighty and with the help of our generous donors we have been able to empower
                            over 400 families and help them run a small business to earn a livelihood. One of our
                            initiatives was Al-Nisa Women’s Empowerment Centre, wherein around 60 underprivileged
                            girls were enrolled and were given extensive training in sewing, cutting and designing.
                            The girls were also given Rs.500 cash and a sewing machine each at the end of the programme.</p>
                    </section>
                </section>
            </div>
        </section>
        <section class="our-services">
            <div class="container">
                <section class="services">
                    <h1>This Is What Your Donations Can Do</h1>
                    <section class="cards">
                        <?php
                        $i=0;
                            while ($i<6){
                                $i++;
                               ?>
                                <div class="card">
                                   <h2>Education Help</h2>
                                    <img src="<?= IMAGES?>educational-help.jpg">
                                    <p>Athrout has established this section so that educational needs of such
                                        unfortunate children are catered.Nothing is important than investing in
                                        the future generations.</p>
                                    <a href="">View More</a>
                                </div>
                        <?php
                            }
                        ?>
                    </section>
                    <footer>
                        <a class="donate bg" href="">View All Services</a>
                    </footer>
                </section>
            </div>
        </section>
    </main>
<?php

    include_once "../includs/footer.php"
?>