<?php
if (false){ # enable for debug
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    ini_set('display_startup_errors',1);
}


include 'people.php';
include 'news.php';
?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Gravitation and Astrophysics at UZH - Prof Ph. Jetzer</title>

        <meta name="keywords" lang="en" content="gravitation,astro,physics,astrophysics,jetzer,uzh,zurich,research,group,lisa,elisa,esa">
        <meta name="description" content="Research group based at University of Zurich doing resarch in gravitational wave astronomy, gravitational lensing and tests of
            Albert Einstein's General Relativity (GR)">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="author" content="Rafael Kueng <rafi.kueng@gmx.ch>" >
        <meta name="designer" content="Rafael Kueng <rafi.kueng@gmx.ch>" >

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->




<div class="title-container">
    <header class="wrapper">
        <img id="logo" alt="uzh logo" src="img/uzh_logo_e_pos.png">
        <h1>Gravitation and Astrophysics</h1>
        <h2>Jetzer Group</h2>
    </header>
    <nav id="menu" class="default">
        <ul class="wrapper">
            <li><a href="#top">About</a></li>
            <li><a href="#research">Research</a></li>
            <li><a href="#group">Members</a></li>
            <li><a href="#students">Students</a></li>
        </ul>
    </nav>
</div>



<div class="main-container">
<div class="main wrapper clearfix">

<article id="top">
    <header>
        <h1>Welcome to the Gravitation and Astrophysics Group</h1>
        <img class="right halfimg" alt="irchel overview" src="img/irchel.jpg">
        <p>
            Our research focuses on gravitational wave astronomy, gravitational lensing and tests of
            Albert Einstein's General Relativity (GR).
            Although, General Relativity is a very successful theory in explaining observations
            of the Universe both on the large scale and on the solar system scale, many open
            questions remain. Our theoretical work investigates how to best detect deviations
            from general relativity with current and planned missions, which could serve as a
            motivation to formulate a general theory that unifies all fundamental forces of nature.

        </p><p>
            We are involved with several international research projects:
        </p>
        <ul>
            <li><a href="https://www.elisascience.org">
                eLISA (Consortium Steering Commitee)
            </a></li>
            <li><a href="http://sci.esa.int/lisa-pathfinder/">
                LISA Pathfinder (Science Team)
            </a></li>
            <li><a href="http://sci.esa.int/ste-quest/">
                STE-QUEST (Study Science Team)
            </a></li>
            <li><!--<a href="https://" -->
                E-GRIP (Principal investigator)
            <!--</a>--></li>
        </ul>
        <p>
            We are part of the
            <a href="http://www.physik.uzh.ch/e/homepage.shtml">physics institute</a> of
            <a href="http://www.uzh.ch/en.html">University of Zurich UZH</a>.
            Our offices are located at the beautiful Irchel campus in Zurich and can be found in the <strong>building 36 on the K floor.</strong> <a href="https://www.google.ch/maps/place/Physik-Institut+der+Universit%C3%A4t+Z%C3%BCrich/@47.397124,8.5498869,305m/data=!3m1!1e3!4m2!3m1!1s0x479aa08286159ca7:0x472b412a88eb77a6!6m1!1e1">(directions)</a>
        </p>

    </header>
    <section class="news">
        <h2>News</h2>

<?php
get_news();

/*
        <ul>


            <li class="important">
                <div class="newsitem">
                    <strong>Special Seminar on Tuesday 16. Feb. 2016, 16:00</strong>
                    <br>
                    <strong>Dr. Andrew Lundgren (AEI Hannover): "Detection of Gravitational Waves: The GW150914 Event"</strong>
                    <br>
                    The first observation of gravitational waves from the merger of two black holes has just been announced. I'll talk about how the detection was made, how we confirmed its astrophysical origin, and how we measured its properties. I'll also give a personal account of the first few hours and talk about prospects for the future.
                    <br>
                    <br>
                    Room: University Zurich, Irchel Campus, Y17 M 05 (notice the special location, see <a href="http://www.physik.uzh.ch/images/irchel.pdf">map</a>)
                </div>
            </li>



            <li class="important">
                <div class="newsitem">
                    <strong>05 - 09. Sept 2016</strong><br>
                    <a href="http://www.physik.uzh.ch/events/lisa2016/">
                        11th International LISA Symposium
                        (Irchel Campus, University of Zurich, Switzerland)
                    </a>
                </div>
            </li>

*/
/*
            <li class="">
                <div class="newsitem">
                    <strong>Teaching this Semester (2016HS):</strong>
                    <br>
                   	<a href="http://www.physik.uzh.ch/en/teaching/PHY511/HS2016.html">PHY511 General Relativity</a>
                    <a href="https://studentservices.uzh.ch/uzh/anonym/vvz/index.html?sap-language=EN&sap-ui-language=EN#/details/2016/003/SM/50411273">(Link Vorlesungsverzeichnis UZH)</a>
                </div>
            </li>
*/
?>

        </ul>
    </section>
</article>

<article id="research">
    <header>
        <h1>Research Topics</h1>
    </header>
    <section>
        <h2>Gravitational Waves - <a href="https://www.elisascience.org/">eLISA</a></h2>
        <img class="floatimg" alt="gravitational waves" src="img/gravwaves.jpg">
        <p>
            Gravitational waves (GW) are tiny ripples in the fabric of spacetime traveling at the speed of light.
            They were predicted by Einstein in 1916 as a consequence of his theory of General Relativity.
            For a long time, there was only indirect evidence for the existence of GW (e.g. Hulse-Taylor binary).
            In 2016 however, the
            <strong>L</strong>aser
            <strong>I</strong>nterferometer
            <strong>G</strong>ravitational-Wave
            <strong>O</strong>bservatory
            (LIGO) collaboration annouced the groundbreaking first ground based direct detection of GW, one hundred years after Einsteins work and resulted in a Nobel prize in 2017.
            The
            <strong>e</strong>volved
            <strong>L</strong>aser
            <strong>I</strong>nterferometer
            <strong>S</strong>pace
            <strong>A</strong>ntenna
            (eLISA) is a proposed European Space Agency mission designed to directly observe and accurately measure those waves, caused by energetic events in the universe like merging massive black holes, extreme mass ratio inspirals and binaries of compact stars in our Galaxy.
            Unlike any other radiation, GW can pass unhindered by intervening mass.
            Detection of gravitational waves will thus add a new sense to scientists' perception of the universe and enable them to listen to a world that is invisible with light.
            <!--
            <a class='source' href='https://en.wikipedia.org/wiki/Evolved_Laser_Interferometer_Space_Antenna'>Wiki</a>-->
        </p>
    </section>

    <section>
        <h2>Testing General Relativity - <a href='http://sci.esa.int/ste-quest/'>STE-QUEST</a></h2>
        <img class="floatimg" alt="STE quest" src="img/stequest.jpg">
        <p>
            The
            <strong>S</strong>pace-
            <strong>T</strong>ime
            <strong>E</strong>xplorer and
            <strong>QU</strong>antum
            <strong>E</strong>quivalence Principle
            <strong>S</strong>pace
            <strong>T</strong>est
            (STE-QUEST) is a candidate mission for a M launch opportunity in ESA's Cosmic Vision programme.
            The mission is designed to answer a range of questions in fundamental physics by performing precision measurements with high accuracy atomic sensors.
            In particular, STE-QUEST would test Einstein's Equivalence Principle, which underpins the theory of General Relativity; explore the boundaries with the quantum world; and search for new fundamental constituents and interactions in the Universe.
            <!--
            <a class='source' href='http://sci.esa.int/ste-quest/'>ESA</a>
            -->
        </p>
    </section>

    <section>
        <h2>Gravitational Lensing</h2>
        <img class="floatimg" alt="einstein ring" src="img/einsteinring.jpg">
        <p>
            Gravitational Lensing is the astronomical effect of the distortion of light by masses, explained by Einstein's General Relativity.
            The light of a source astronomical object (like stars, quasars or galaxies) is passing though the gravitational field of a second object in the line of sight, the gravitational lens.
            In the gravitational field, light rays get delayed and change direction such that their position is shifted on the observers sky.
            Additionally, the resulting image can be magnified, distorted or even multiplied. On one side, these lenses can be used to study objects far away.
            On the other side, the analysis of the effects on the images allow to determine the gravitational field, and thus to determine the total mass of the lens object (including dark matter).
        </p>
    </section>

</article>



<article id="group">
    <header>
        <h1>People</h1>
    </header>

    <section class="cheffe">
        <h2>Prof Philippe Jetzer</h2>
        <img class="floatimg" alt="ph. jetzer" src="people/p_jetzer.jpg">
        <p>Physik-Institut<br>University of Zurich<br>Winterthurerstr. 190<br>8057 Zurich<br>Switzerland</p>
        <p><a href="#" class='iimeil cheffe' data-iimeil='SofioX_MFVKOChBiFhbF'>eMail</a><br>Office: Y36-K82<br><a href='tel:+41446355819'>Tel: +41 44 635 5819</a><br>Fax: +41 44 635 5704</p>
    </section>

    <section>
        <h2>Group Members</h2>

<!--
NOTE: the entries for the people are generated automatically using the csv file
people/people.csv
Just open it with LibreOffice / Excel / TextEditor and make your changes
-->
<?php get_people('postdoc') ?>
<?php get_people('phd') ?>
    </section>

    <section>
        <h2>LISA engineer</h2>
<?php get_people('lisaeng') ?>
    </section>

    <section>
        <h2>Academic Guests</h2>
<?php get_people('guest') ?>
    </section>

    <section>
        <h2>Former Members</h2>
<?php get_people('former') ?>
    </section>

</article>



<article id="students">
    <header>
        <h1>For Students</h1>
    </header>

<!--
    <section>
        <h2>Current Lectures</h2>
        <ul>
-->
<!--    Note to future poor soul that has to maintain this...
        The Idea is that you just have to uncomment the according part ;)
        - OR -
        just write a news entry...
-->
<!--
            <li>
            (none)
            </li>
-->
<!--
            <li><a href='http://www.physik.uzh.ch/lectures/agr'>
                Applications of General Relativity in Astrophysics and Cosmology (PHY519)
            </a></li>
-->
<!--
            <li><a href='http://www.physik.uzh.ch/lectures/mmp'>
                Mathematische Methoden der Physik I &amp; II (PHY312 &amp; PHY322)
            </a></li>
-->
<!--
            <li><a href='http://www.physik.uzh.ch/lectures/mmp'>
                Mathematische Methoden der Physik I &amp; II (PHY312 &amp; PHY322)
            </a></li>
-->
<!--
            <li><a href='http://www.physik.uzh.ch/lectures/thermo'>
                Thermodynamik [ PHY341 ]
            </a>
            <a href="http://www.vorlesungen.uzh.ch/FS16/lehrangebot/fak-50000008/sc-50544113/cga-50544113010/cg-50017561/sm-50717627.modveranst.html">(vvz)</a>
            </li>
-->
<!--
        </ul>
    </section>
-->
    <section>
        <h2>Lecture Notes</h2>
        <ul>

            <li><a href='notes/PHY312_MMP_1.pdf'>
                Mathematische Methoden der Physik I [PHY312]
            </a></li>

            <li><a href='notes/PHY322_MMP_2.pdf'>
                Mathematische Methoden der Physik II [PHY322]
            </a></li>

            <li><a href='notes/PHY511_HS16_General_Relativity.pdf'>
                General Relativity (revised notes, typed by Arnaud Borde) [PHY511]
            </a></li>

            <li><a href='notes/PHY511_General_Relativity_unoffical.pdf'>
                General Relativity (unofficial notes, typed by Felix Haehl) [PHY511]
            </a></li>

            <li><a href='notes/PHY519_ART_II.pdf'>
                Applications of General Relativity (Felix Haehl) [PHY 519]
            </a></li>

            <li><a href='notes/Gravitational_Lensing.pdf'>
                Gravitational Lensing
            </a></li>

            <li><a href='notes/High_Energy_Astrophysics_1.pdf'>
                High Energy Astrophysics I
            </a></li>

        </ul>
    </section>

    <section>
        <h2>Bachelor / Master Thesis</h2>
        <p>
            If you like our research areas and want to contribute, we'd be exited to hear from you!<br>
            Whether you have your own idea, or want to contribute to a running project,
            just drop us a mail or come by in one of our offices in Y36-K floor for a discussion.
        </p>
    </section>
    <section>
        <h2>PhD / PostDoc Positions</h2>
        <p>
            For up to date information of available positions please consult the
            <a href="http://www.physik.uzh.ch/info/graduateschool.shtml">graduate school</a> and the <a href="http://www.physik.uzh.ch/jobs.shtml"> jobs portal</a>
            of the physics institute or contact us directly.
        </p>
<!-- Don't do this, this will never be maintained...
        <p>
        Currently open positions:
        <ul>
            <li><a href="http://www.physik.uzh.ch/news/PhD-Jetzer-04112015.pdf">
            PhD position in Science of Measurement for Space-borne Gravitational Waves Obser
vatories
            </a></li>
        </ul>
        </p>
-->
    </section>
</article>


            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <p>Physik-Institute; University of Zurich, Switzerland; 2015</p>
            </footer>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>
