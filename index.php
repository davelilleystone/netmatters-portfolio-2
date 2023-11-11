<?php include './includes/contact_form_handler.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="DPL Web Design is a company that specializes in creating sites for small businesses." />
  <meta name="keywords" content="web design, website builder, web design company, website creator, responsive web design" />
  <meta name="author" content="DPL Web Design" />
  <title>Home | Dave Lilleystone | Web Developer</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" />
  <script src="./js/script.js" defer></script>
</head>

<body>
  <div class="hamburger">
    <span><i class="fa-solid fa-bars hamburger__icon"></i></span>
  </div>
  <div class="sidebar">
    <div class="sidebar__content">
      <div class="logo">
        <a href="./index.html">
          <picture><img src="./img/logo-black-small.png" alt="" style="width: 100%" /></picture>
        </a>
      </div>
      <nav class="nav-links">
        <a href="./index.html#projects" class="nav-links__link"><i class="fa-solid fa-wrench nav-links__icon"></i>Projects</a>
        <a href="./code.html" class="nav-links__link"><i class="fa-solid fa-code nav-links__icon"></i>Code</a>
        <a href="./scs.html" class="nav-links__link"><i class="fa-solid fa-graduation-cap nav-links__icon"></i>SCS</a>
        <a href="./about.html" class="nav-links__link"><i class="fa-solid fa-user nav-links__icon"></i>About</a>
        <a href="./index.html#contact" class="nav-links__link"><i class="fa-solid fa-message nav-links__icon"></i>Contact</a>
      </nav>
      <div class="socials">
        <a href="https://github.com/davelilleystone/" class="socials__link" target="_blank"><i class="fa-brands fa-square-github socials__icon socials__icon--github"></i></a>
        <a href="https://www.linkedin.com/in/david-lilleystone/" class="socials__link" target="_blank"><i class="fa-brands fa-linkedin socials__icon socials__icon--linkedin"></i></a>
        <a href="https://twitter.com/super_hammerman/" class="socials__link" target="_blank"><i class="fa-brands fa-square-x-twitter socials__icon socials__icon--twitter"></i></a>
      </div>
    </div>
  </div>
  <div class="content-container">
    <div class="hero">
      <div class="hero__content">
        <div class="hero__text"></div>
        <div>
          <picture><img src="./img/logo-black.png" alt="" /></picture>
        </div>
      </div>
    </div>
  </div>
  <div class="content-container">
    <div class="content-wrapper">
      <div class="projects" id="projects">
        <h2 class="projects__title section-heading">Projects</h2>
        <div class="card-container">
          <div class="card">
            <picture><img class="card__image" src="./img/projects/project-1-img.webp" alt="netmatters project" />
            </picture>
            <h3 class="card__title">Netmatters</h3>
            <div class="card__technologies">
              <span class="card__technology card__technology--html">HTML</span><span class="card__technology card__technology--css">CSS</span><span class="card__technology card__technology--js">JS</span><span class="card__technology card__technology--sass">SASS</span>
            </div>
            <p class="card__text">
              The brief of this project was to replicate the
              <a href="https://www.netmatters.co.uk/" target="_blank"><strong>Netmatters</strong></a>
              homepage.
            </p>
            <p>
              The initial stage of the project used just HTML and SASS, more functionality will be added
              later using
              JavaScript.
            </p>
            <div class="card__buttons">
              <a href="https://netmatters.dave-lilleystone.netmatters-scs.co.uk/" class="card__button" target="_blank">view site</a>
              <a href="https://github.com/davelilleystone/netmatters-site-replication" class="card__button" target="_blank">view code</a>
            </div>
          </div>
          <div class="card">
            <picture><img class="card__image" src="./img/projects/project-2-img.webp" alt="netmatters project" />
            </picture>
            <h3 class="card__title">Image Viewer</h3>
            <div class="card__technologies">
              <span class="card__technology card__technology--html">HTML</span><span class="card__technology card__technology--css">CSS</span><span class="card__technology card__technology--js">JS</span><span class="card__technology card__technology--sass">SASS</span>
            </div>
            <p class="card__text">
              This project was to create an image viewer which downloads images via an API and allows the
              user to save
              the image to their account.
            </p>
            <p>
              Image and account data is stored in the browser's local storage so it persists between
              sessions.
            </p>
            <div class="card__buttons">
              <a href="https://js-array.dave-lilleystone.netmatters-scs.co.uk/" class="card__button" target="_blank">view site</a>
              <a href="https://github.com/davelilleystone/netmatters-js-array" class="card__button" target="_blank">view
                code</a>
            </div>
          </div>
          <div class="card">
            <picture><img class="card__image" src="./img/projects/coming-soon.png" alt="coming soon" />
            </picture>
            <h3 class="card__title">Coming Soon</h3>
            <div class="card__technologies">
              <span class="card__technology card__technology--html">HTML</span><span class="card__technology card__technology--css">CSS</span><span class="card__technology card__technology--js">JS</span><span class="card__technology card__technology--sass">SASS</span>
            </div>
            <p class="card__text">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex quidem alias blanditiis
              obcaecati debitis
              id nam odio rem maiores, eaque cumque sint sequi quis quia quas molestiae tenetur quam amet.
              Lorem ipsum
              dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, facilis?
            </p>
            <div class="card__buttons">
              <a href="#" class="card__button">view site</a>
              <a href="#" class="card__button">view code</a>
            </div>
          </div>
          <div class="card">
            <picture><img class="card__image" src="./img/projects/coming-soon.png" alt="coming soon" />
            </picture>
            <h3 class="card__title">Coming Soon</h3>
            <div class="card__technologies">
              <span class="card__technology card__technology--html">HTML</span><span class="card__technology card__technology--css">CSS</span><span class="card__technology card__technology--js">JS</span><span class="card__technology card__technology--sass">SASS</span>
            </div>
            <p class="card__text">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex quidem alias blanditiis
              obcaecati debitis
              id nam odio rem maiores. Lorem ipsum dolor sit. Lorem ipsum dolor sit amet consectetur
              adipisicing elit.
              Quam, facilis?
            </p>
            <div class="card__buttons">
              <a href="#" class="card__button">view site</a>
              <a href="#" class="card__button">view code</a>
            </div>
          </div>
          <div class="card">
            <picture><img class="card__image" src="./img/projects/coming-soon.png" alt="coming soon" />
            </picture>
            <h3 class="card__title">Coming Soon</h3>
            <div class="card__technologies">
              <span class="card__technology card__technology--html">HTML</span><span class="card__technology card__technology--css">CSS</span><span class="card__technology card__technology--js">JS</span><span class="card__technology card__technology--sass">SASS</span>
            </div>
            <p class="card__text">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex quidem alias blanditiis
              obcaecati debitis
              id nam odio rem maiores, eaque cumque sint sequi quis quia quas molestiae tenetur quam amet.
              Lorem ipsum
              dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, facilis?
            </p>
            <div class="card__buttons">
              <a href="#" class="card__button">view site</a>
              <a href="#" class="card__button">view code</a>
            </div>
          </div>
          <div class="card">
            <picture><img class="card__image" src="./img/projects/coming-soon.png" alt="coming soon" />
            </picture>
            <h3 class="card__title">Coming Soon</h3>
            <div class="card__technologies">
              <span class="card__technology card__technology--html">HTML</span><span class="card__technology card__technology--css">CSS</span><span class="card__technology card__technology--js">JS</span><span class="card__technology card__technology--sass">SASS</span>
            </div>
            <p class="card__text">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex quidem alias blanditiis
              obcaecati debitis
              id nam odio rem maiores, eaque cumque sint sequi quis quia quas molestiae tenetur quam amet.
              Lorem ipsum
              dolor sit.
            </p>
            <div class="card__buttons">
              <a href="#" class="card__button">view site</a>
              <a href="#" class="card__button">view code</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content-container">
    <div class="content-wrapper">
      <div class="contact" id="contact">
        <div class="contact-text">
          <picture><img src="./img/contact-us.jpg" alt="" class="contact-text__image" /></picture>
          <div class="contact-text__text-wrapper">
            <p class="contact-text__paragraph">
              <strong>I would love to hear about your project and how I could help.</strong>
            </p>

            <p class="contact-text__paragraph">
              Please fill in the form with your details and I'll get back to you as soon as possible - all
              fields
              should be filled in.
            </p>

            <p class="contact-text__paragraph">
              If you would prefer to contact me directly, you can call me on
              <strong><a href="tel:+441234576890" target="_blank">01234 576 890</a></strong>. I am also
              available via
              email on
              <strong><a href="mailto:dave@dplwebdesign.co.uk" target="_blank">dave@dplwebdesign.co.uk.</a></strong>
            </p>
            <p class="contact-text__paragraph">I look forward to hearing from you!</p>
          </div>
        </div>
        <?php include './includes/contact_form.php'; ?>
      </div>
    </div>
  </div>
</body>

</html>