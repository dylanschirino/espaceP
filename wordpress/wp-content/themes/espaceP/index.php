<?php
/*
Template Name: HomePage
*/
get_header();
;?>
<div class="site-container">
  <div class="site-pusher">
    <header class="header">
      <div class="header__content">
        <h1 class="hidden">EspaceP... - Accueil</h1>
        <nav class="header__menu"><a class="header__burger" id="header__burger" href="#" title="Voir le menu"><span class="hidden">Menu</span></a>
          <h2 class="header__logo"><a class="header__logolink" href="index.html"><img class="header__img" src="images/logo.jpg" width="76" height="57">Espace P...<span class="hidden">- Navigation</span></a></h2>
          <div class="menu__content">
            <ul class="menu__list">
              <li class="menu__element"><a class="menu__link" href="actu.html" title="Vers la page actualité">Actualité</a></li>
              <li class="menu__element"><a class="menu__link" href="rapport.html" title="Vers la page rapport d'activité">Rapport D'activités</a></li>
              <li class="menu__element"><a class="menu__link" href="contact.html" title="Vers la page contact">Contact</a></li>
              <li class="menu__element"><a class="menu__link" href="manifeste.html" title="Vers la page manifeste">Manifeste</a></li>
              <li class="menu__element"><a class="menu__link" href="soutenir.html" title="Vers la page de soutien">Soutenir</a></li>
              <li class="menu__element none"><a class="menu__link none" href="tds.html" title="Vers la page travailleur du sexe">Travailleur du sexe</a>
                <li class="menu__element none"><a class="menu__link none" href="etudiant.html" title="Vers la page etudiant">Étudiants</a></li>
                <li class="menu__element none"><a class="menu__link none" href="clients.html" title="Vers la page client">Clients</a></li>
                <li class="menu__element none"><a class="menu__link none" href="sympathisant.html" title="Vers la page etudiant">Sympathisant</a></li>
              </li>
            </ul>
          </div>
          <form class="header__search" method="get" action="/">
            <input class="search__box" type="search" placeholder="Recherche" name="search">
            <input class="search__submit" type="submit" value="">
          </form>
        </nav>
      </div>
    </header>
    <div class="site-content">
      <div class="site-container"></div>
      <main>
        <section class="mainimage">
          <h2 class="mainimage__title">Espace P...</h2>
          <p class="mainimage__subtitle">Pour une approche plus juste des métiers du sexe.</p><a class="mainimage__link" href="#menu" title="Vers le menu principal de choix des sections"><span>Vers le menu principal</span></a>
        </section>
        <section class="news">
          <div class="news__content">
            <h2 class="news__title">Actualité</h2>
            <time class="news__time" pubtime>Le 14 Janvier 2016</time>
            <p class="news__text">Le 17 Décembre est la journée internationale de lutte contreles violences faites aux travailleurs du sexe. Le ministère vient de voter la loi qui sera d’application le 20 Janvier 2017.</p><a class="news__button" href="actu.html">Vers l'article</a>
          </div>
        </section>
        <section class="navigation" id="menu">
          <h2 class="navigation__title hidden">Choississez votre profil</h2>
          <div class="navigation__container">
            <div class="navigation__container--left">
              <article class="profil profil--tds">
                <h3 class="profil__title">Travailleur du sexe<a class="profil__english" href="#english">I'm a sex Worker</a></h3>
                <div class="profil__box">
                  <ul class="profil__list">
                    <li class="profil__element profil__element--tds"><a class="profil__link" href="tds.html">Nos services</a></li>
                    <li class="profil__element profil__element--tds"><a class="profil__link" href="tds.html">La législation sur la prostitution</a></li>
                    <li class="profil__element profil__element--tds"><a class="profil__link" href="tds.html">Infos vaccination et dépistage</a></li>
                    <li class="profil__element profil__element--tds"><a class="profil__link" href="tds.html">Demander le passage d'une équipe</a></li>
                    <li class="profil__element profil__element--tds"><a class="profil__link" href="tds.html">Retrouver votre code de vaccination</a></li>
                    <li class="profil__element profil__element--tds"><a class="profil__link" href="tds.html">Quand la capote éclate</a></li>
                    <li class="profil__element profil__element--tds"><a class="profil__link" href="tds.html">Fellation sans préservatif</a></li>
                    <li class="profil__element profil__element--tds"><a class="profil__link" href="tds.html">Hygiène du vagin</a></li>
                    <li class="profil__element profil__element--tds"><a class="profil__link" href="tds.html">Brochure ( PDF en téléchargement)</a></li>
                  </ul>
                </div>
              </article>
              <article class="profil profil--etudiants">
                <h3 class="profil__title">Étudiants</h3>
                <p class="profil__text">Pour toute question concernant un stage, une intervention scolaire ou si vous avez simplement des interrogations sur nos actions, consultez cette section</p>
                <div class="profil__box profil__box--etudiants">
                  <ul class="profil__list">
                    <li class="profil__element profil__element--etudiants"><a class="profil__link" href="etudiant.html">Nos actions</a></li>
                    <li class="profil__element profil__element--etudiants"><a class="profil__link" href="etudiant.html">Notre philosophie</a></li>
                    <li class="profil__element profil__element--etudiants"><a class="profil__link" href="etudiant.html">Le point sur notre législation et les autres</a></li>
                    <li class="profil__element profil__element--etudiants"><a class="profil__link" href="etudiant.html">Infos stage et intervention scolaire</a></li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="navigation__container--right">
              <article class="profil profil--sympathisant">
                <h3 class="profil__title">Sympathisant</h3>
                <p class="profil__text">Vous êtes un sympathisant ou vous avez entendu parlé de nous par hasard et vous voulez en savoir plus sur notre association ou adhérez à notre manifeste, vous êtes au bon endroits</p>
                <div class="profil__box profil__box--sympathisant">
                  <ul class="profil__list">
                    <li class="profil__element profil__element--sympathisant"><a class="profil__link" href="sympathisant.html#pointfort">Points fort de notre manifeste</a></li>
                    <li class="profil__element profil__element--sympathisant"><a class="profil__link" href="sympathisant.html">Le point sur notre législation et les autres</a></li>
                  </ul>
                </div>
              </article>
              <article class="profil profil--clients">
                <h3 class="profil__title">Clients</h3>
                <p class="profil__text">Vous êtes un client et vous avez des droits mais vous avez aussi des obligations et des précautions à prendre de votre côtés pour que tout se passe dans le respect de chaqu’un. Vous trouverez ici un petit guide du client pour en apprendre d’avantage.</p>
                <div class="profil__box profil__box--clients"><a class="profil__button" href="clients.html">Guide du clients</a></div>
              </article>
            </div>
          </div>
        </section>
      </main>
      <footer class="footer">
        <section class="footer__menu">
          <h2 class="footer__title">Menu<span class="hidden"> Secondaire</span></h2>
          <ul class="footer__list">
            <li class="footer__element"><a class="footer__link" href="actu.html" title="Aller a la page actualité">Actualité</a></li>
            <li class="footer__element"><a class="footer__link" href="rapport.html" title="Aller a la page actualité">Rapport d'activité</a></li>
            <li class="footer__element"><a class="footer__link" href="manifeste.html" title="Aller a la page manifeste">Manifeste</a></li>
            <li class="footer__element"><a class="footer__link" href="contact.html" title="Aller a la page contact">Contact</a></li>
            <li class="footer__element"><a class="footer__link" href="soutenir.html" title="Aller a la page soutenir">Soutenir</a></li>
            <li class="footer__element"><a class="footer__link" href="tds.html" title="Aller a la page travailleur du sexe">Travailleur du sexe</a></li>
            <li class="footer__element"><a class="footer__link" href="etudiants.html" title="Aller a la page étudiants">Étudiants</a></li>
            <li class="footer__element"><a class="footer__link" href="sympathisant.html" title="Aller a la page sympathisant">Sympathisant</a></li>
            <li class="footer__element"><a class="footer__link" href="clients.html" title="Aller a la page clients">Clients</a></li>
            <li class="footer__element footer__element--button"><a class="footer__link footer__link--button" href="http://facebook.com" title="Aller vers notre page facebook">Facebook</a></li>
          </ul>
        </section>
        <section class="footer__information">
          <h2 class="information__title hidden">Information de contact</h2>
          <div class="information__container information__container--left">
            <section class="information__content"><a class="information__titleLink" href="ville.html" title="Aller vers la page bruxelles">
                <h3 class="information__subtitle">Bruxelles</h3></a>
              <ul class="information__list">
                <li class="information__element"><span class="information__span">Tel</span><a class="information__link" href="tel:022199874 " title="Nous téléphoner?">02 219 98 74</a></li>
                <li class="information__element"><span class="information__span">Mail</span><a class="information__link" href="mailto:espacepbxl@hotmail.com" title="Nous envoyer un email">espacepbxl@hotmail.com</a></li>
                <li class="information__element information__element--adresse"><span class="information__span">Adresse</span>116, rue des Plantes 1030 Bruxelles
                </li>
              </ul>
            </section>
            <section class="information__content">
              <h3 class="information__subtitle">Namur</h3>
              <ul class="information__list">
                <li class="information__element"><span class="information__span">Tel</span><a class="information__link" href="tel:022199874 " title="Nous téléphoner?">081 77 68 21</a></li>
                <li class="information__element"><span class="information__span">Mail</span><a class="information__link" href="mailto:espacepnamur@gmail.com" title="Nous envoyer un email">espacepnamur@gmail.com</a></li>
                <li class="information__element information__element--adresse"><span class="information__span">Adresse</span> 4, rue du Docteur Haibe 5002 Namur
                </li>
              </ul>
            </section>
          </div>
          <div class="information__container information__container--center">
            <section class="information__content">
              <h3 class="information__subtitle">Charleroi</h3>
              <ul class="information__list">
                <li class="information__element"><span class="information__span">Tel</span><a class="information__link" href="tel:042210509 " title="Nous téléphoner?">04 221 05 09 </a></li>
                <li class="information__element"><span class="information__span">Mail</span><a class="information__link" href="mailto:espacepliege@gmail.com" title="Nous envoyer un email">espacepcharleroi@gmail.com</a></li>
                <li class="information__element information__element--adresse"><span class="information__span">Adresse</span>116, rue des Plantes 1030 Bruxelles
                </li>
              </ul>
            </section>
            <section class="information__content">
              <h3 class="information__subtitle">Liège</h3>
              <ul class="information__list">
                <li class="information__element"><span class="information__span">Tel</span><a class="information__link" href="tel:042210509 " title="Nous téléphoner?">04 221 05 09 </a></li>
                <li class="information__element"><span class="information__span">Mail</span><a class="information__link" href="mailto:espacepliege@hotmail.com" title="Nous envoyer un email">espacepliege@hotmail.com</a></li>
                <li class="information__element information__element--adresse">Adresse :50, rue Souverain-Pont 4000 Liège</li>
              </ul>
            </section>
          </div>
          <div class="information__container information__container--center">
            <section class="information__content">
              <h3 class="information__subtitle">Mons</h3>
              <ul class="information__list">
                <li class="information__element"><span class="information__span">Tel </span><a class="information__link" href="tel:022199874 " title="Nous téléphoner?">071/30 98 10 </a></li>
                <li class="information__element"><span class="information__span">Mail</span><a class="information__link" href="mailto:espacepcharleroi@hotmail.com" title="Nous envoyer un email">espacepcharleroi@hotmail.com</a></li>
                <li class="information__element information__element--adresse"><span class="information__span">Adresse</span>3, rue Désandrouin – 6000 Charleroi
                </li>
              </ul>
            </section>
            <section class="information__content">
              <h3 class="information__subtitle">Arlon</h3>
              <ul class="information__list">
                <li class="information__element"><span class="information__span">Tel</span><a class="information__link" href="tel:0474138654" title="Nous téléphoner?">0474 13 86 54 </a></li>
                <li class="information__element"><span class="information__span">Mail</span><a class="information__link" href="mailto:espaceparlon@gmail.com" title="Nous envoyer un email">espaceparlon@gmail.com</a></li>
                <li class="information__element information__element--adresse"><span class="information__span">Adresse</span>Maison Médicale «Porte Sud», 88 rue de Bastogne à Arlon.
                </li>
              </ul>
            </section>
          </div>
        </section>
      </footer>
      <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script src="script/sticky.js"></script>
      <script src="script/script.js"></script>
    </div>
    <div class="site-cache" id="site-cache"></div>
  </div>
</div>
</html>
