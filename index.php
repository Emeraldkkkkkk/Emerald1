

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="description"
      content="Quantrack AI - AI for Augmented Business Intelligence"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quantrack AI - AI for Augmented Business Intelligence</title>
    <script src="./js/lib/jquery-3.4.0.js"></script>
    <script
      src="https://kit.fontawesome.com/ce9a5e3fb3.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="./favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="./favicon/site.webmanifest" />
    <link rel="shortcut icon" href="./favicon/favicon.ico" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="msapplication-config" content="./favicon/browserconfig.xml" />
    <meta name="theme-color" content="#003746" />
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/style.css" />
  </head>

  <body>
    <header>
      <nav id="nav">
        <div id="logo-container">
          <img
            id="logo"
            src="./sources/img/quantrack-logo.png"
            alt="quantrack logo"
          />
        </div>
        <div id="navlink-container">
          <a class="navlink" href="#section-products">Our Products</a>
          <a class="navlink" href="#section-workflow">Our Workflow</a>
          <a class="navlink" href="#section-contact-quote">Contact Us</a>
          <a class="navlink" href="#section-quote">Get a Quote</a>
          <a class="navlink navbtn" target="blank" href="https://quantrack.github.io/">Blog</a>
        </div>
        <div id="btn-menu">
          <span>
            <i id="btn-hamburger" class="fas fa-bars"></i>
          </span>
        </div>
      </nav>
      <div id="navlink-mobile">
        <div id="navlink-container-mobile">
          <a class="navlink" href="#section-products">Our Products</a>
          <a class="navlink" href="#section-workflow">Our Workflow</a>
          <a class="navlink" href="#section-contact-quote">Contact Us</a>
          <a class="navlink" href="#section-quote">Get a Quote</a>
          <a class="navlink" target="blank" href="https://quantrack.github.io/">Blog</a>

        </div>
      </div>
    </header>
    <main>
      <section id="section-header">
        <div id="claim">
          <article id="article-header">
            <h1>AI for Augmented Business Intelligence</h1>
            <h2>
              We build innovative algorithmics strategies to help you leverage
              the power of your data
            </h2>
            <a class="btnlink" href="#section-quote"
              >Get a quote <span><i class="fas fa-chevron-right"></i></span
            ></a>
          </article>
          <div id="divdiscover">
            <span id="spandiscover"></span
            ><a href="#section-products" id="discover">Discover our products</a>
          </div>
        </div>
      </section>

      <section id="section-products">
        <h2 class="title">Our Products</h2>
        <div id="container-products">
          <div>
            <a href="#console" class="product-btn">
              <div class="div-products">
                <h4 class="h4-btn">Machine Learning & Predictive Modelling</h4>
              </div>
            </a>

            <a href="#console" class="product-btn">
              <div class="div-products">
                <h4 class="h4-btn">AI for Marketing</h4>
              </div>
            </a>

            <a href="#console" class="product-btn">
              <div class="div-products">
                <h4 class="h4-btn">Social Network Mining</h4>
              </div>
            </a>

            <a href="#console" class="product-btn">
              <div class="div-products">
                <h4 class="h4-btn">Robotic Process Automation</h4>
              </div>
            </a>

            <a href="#console" class="product-btn">
              <div class="div-products">
                <h4 class="h4-btn">Quantitative Finance</h4>
              </div>
            </a>
          </div>

          <div id="console">
            <div id="console-header">
              <div class="dot red"></div>
              <div class="dot yellow"></div>
              <div class="dot green"></div>
              <div id="console-header-title">
                Machine Learning and Predictive Modelling
              </div>
            </div>

            <div id="console-main">
              <div id="console-left-column"></div>
              <div id="console-container">
                <div class="div-product-description">
                  <p class="product-description"></p>
                </div>

                <div class="div-product-description">
                  <p class="product-description"></p>
                </div>

                <div class="div-product-description">
                  <p class="product-description"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="section-workflow">
        <h2 class="title white">Our Workflow</h2>
        <img id="arrow" src="./sources/img/fleche.png" alt="arrow" />
        <div>
          <article class="article-workflow">
            <div>
              <h3>Step 1</h3>
              <p>
                Our experts with different skills sets define your needs and
                assess the feasibility of your project. We document all the
                requirements and establish a detailed plan.
              </p>
            </div>
          </article>

          <article class="article-workflow">
            <div>
              <h3>Step 2</h3>
              <p>
                We build data-driven solutions. We review your current data
                workflow and infrastructures to find anomalies and
                sticking-point. We organize data gathering using an end-to-end
                encrypted protocol. The security of your data is our top
                priority.
              </p>
            </div>
          </article>

          <article class="article-workflow">
            <div>
              <h3>Step 3</h3>
              <p>
                Exploratory analysis, model design, training, and offline
                evaluation: We develop the first proof-of-concept. You turned
                your business problem into a well-defined machine learning task.
              </p>
            </div>
          </article>

          <article class="article-workflow">
            <div>
              <h3>Step 4</h3>
              <p>
                Model deployment, monitoring, and maintenance: We Deploy your
                tailored solution as a service, and integrate it within our
                current processes and workflow. Our systems architects monitor
                model accuracy and performance.
              </p>
            </div>
          </article>
        </div>
      </section>

      <!-- <section id="section-team">
        <h2 class="title">Meet the team</h2>
        <div id="container-team">
          <article class="article-team">
            <div>
              <img src="./sources/img/avatar.png" alt="" />
              <h3>Arnaud THEVENET</h3>
            </div>
            <small>CEO</small>
            <p class="p-team">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni
              nobis nostrum enim ullam facere consequatur omnis ad reiciendis,
              tempora labore, et animi cum ipsa! Fugit natus reiciendis dolor
              enim suscipit.
            </p>
          </article>

          <article class="article-team">
            <div>
              <img src="./sources/img/avatar.png" alt="" />
              <h3>Neil A.</h3>
            </div>
            <small>CTO</small>

            <p class="p-team">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni
              nobis nostrum enim ullam facere consequatur omnis ad reiciendis,
              tempora labore, et animi cum ipsa! Fugit natus reiciendis dolor
              enim suscipit.
            </p>
          </article>

          <article class="article-team">
            <div>
              <img src="./sources/img/avatar.png" alt="" />
              <h3>Marc-Antoine MALASPINA</h3>
            </div>
            <small>COO</small>

            <p class="p-team">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni
              nobis nostrum enim ullam facere consequatur omnis ad reiciendis,
              tempora labore, et animi cum ipsa! Fugit natus reiciendis dolor
              enim suscipit.
            </p>
          </article>
        </div>
      </section> -->

      <!-- <section id="section-testimonials">
            <h2 class="title">They use Quantrack AI</h2>
            <div id="container-testimonials">
                <article class="article-testimonials">
                    <p class="p-testimonials">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni nobis
                        nostrum enim ullam facere
                        consequatur omnis ad reiciendis, tempora labore, et animi cum ipsa! Fugit natus reiciendis dolor
                        enim suscipit.</p>
                    <p>John Doe</p>
                    <p>CEO @ Company</p>
                </article>
                <article class="article-testimonials">
                    <p class=" p-testimonials">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni nobis
                        nostrum enim ullam facere
                        consequatur omnis ad reiciendis, tempora labore, et animi cum ipsa! Fugit natus reiciendis dolor
                        enim suscipit.</p>
                    <p>John Doe</p>
                    <p>CEO @ Company</p>
                </article>
            </div>
        </section> -->

      <section id="section-contact-quote">
        <section id="section-contact">
          <h2 class="title white">Contact Us</h2>
          <div class="container-contact-quote">
            <div class="container-contact-quote-text">
              <p>
                Our team is spread across 3 continents and 8 time - zones. Even
                if remote work is a core value of our company, having a place to
                meet in real life is hugely enjoyable. Let’s have a coffee, or a
                tea, at one of our location and get to know each other!
              </p>
              <p>
                As travel addicts wea re always moving around and you can
                currently find us there:
              </p>
            </div>
            <div id="container-contact-articles">
              <article>
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.139641919952!2d-75.5995054859482!3d6.2453217954793425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429a39999c271%3A0x1de048aebd5655b0!2sCircular%20Coworking%20La%20Casa%20Redonda!5e0!3m2!1sfr!2sfr!4v1588869108265!5m2!1sfr!2sfr"
                  width="100%"
                  height="300"
                  style="border: 0;"
                  allowfullscreen=""
                  aria-hidden="false"
                  tabindex="0"
                ></iframe>
                <div>
                  <h3>Medellin</h3>
                  <p>Casa Redonda Coworking</p>
                  <small>Laureles, Medellin</small>
                  <a class="mailtolink" href="mailto:info@quantrack.io"
                    >info@quantrack.io</a
                  >
                  <a class="phonelink" href="tel:+">Phone : 08 36 65 65 65</a>
                </div>
              </article>

              <!-- <article>
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.139641919952!2d-75.5995054859482!3d6.2453217954793425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429a39999c271%3A0x1de048aebd5655b0!2sCircular%20Coworking%20La%20Casa%20Redonda!5e0!3m2!1sfr!2sfr!4v1586956748154!5m2!1sfr!2sfr"
                  width="100%"
                  height="300"
                  style="border: 0;"
                  allowfullscreen=""
                  aria-hidden="false"
                  tabindex="0"
                ></iframe>
                <div>
                  <h3>Medellin</h3>
                  <p>Medellin Office</p>
                  <small>10 address street</small>
                  <small>Medellin 0000</small>
                  <a class="mailtolink" href="mailto:info@quantrack.io"
                    >info@quantrack.io</a
                  >
                  <a class="phonelink" href="tel:+">Phone : 08 36 65 65 65</a>
                </div>
              </article> -->
              <article>
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.1536296595855!2d2.3354954152002527!3d48.874347779289145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e38f6f17aed%3A0xae3da7dd30c8108c!2sWeWork%20La%20Fayette!5e0!3m2!1sfr!2sfr!4v1588844279893!5m2!1sfr!2sfr"
                  width="100%"
                  height="300"
                  style="border: 0;"
                  allowfullscreen=""
                  aria-hidden="false"
                  tabindex="0"
                ></iframe>
                <div>
                  <h3>Paris</h3>
                  <p>WeWork La Fayette</p>
                  <small>75009 Paris</small>
                  <a class="mailtolink" href="mailto:info@quantrack.io"
                    >info@quantrack.io</a
                  >
                  <a class="phonelink" href="tel:+">Phone : 08 36 65 65 65</a>
                </div>
              </article>
            </div>
          </div>
        </section>

        <section id="section-quote">
          <h2 class="title white">Get a Quote</h2>
          <div class="container-contact-quote">
            <div class="container-contact-quote-text">
              <p>
                If you can’t make it to one of our location, there’s still the
                internet to connect. We would be more than happy to give you
                extra information on our services or talk about any
                question/suggestion you may have. <br />Bonus: we speak fluently
                French, English and Spanish!
              </p>
            </div>
            <div id="container-quote-form">
              <form action="./php/controller/FormController.php" method="post">
                <fieldset>
                  <input
                    type="text"
                    name="inputName"
                    id="inputName"
                    placeholder="Complete Name"
                    required
                    autocomplete="off"
                  />
                  <input
                    type="email"
                    name="inputEmail"
                    id="inputEmail"
                    placeholder="Email"
                    required
                    autocomplete="off"
                  />
                </fieldset>

                <fieldset>
                  <input
                    type="text"
                    name="inputCompany"
                    id="inputCompany"
                    placeholder="Company"
                    required
                    autocomplete="off"
                  />
                  <input
                    type="text"
                    name="inputPosition"
                    id="inputPosition"
                    placeholder="Position"
                    required
                    autocomplete="off"
                  />
                </fieldset>
                <fieldset>
                  <textarea
                    name="inputMessage"
                    id="inputMessage"
                    cols="30"
                    rows="10"
                    required
                    placeholder="Describe your needs"
                    autocomplete="off"
                  ></textarea>
                </fieldset>
                <button
                  class="btnlink"
                  id="submitBtn"
                  name="submitBtn"
                  type="submit"
                >
                  Send
                </button>
              </form>
            </div>
          </div>
        </section>
      </section>

      <section id="section-quantrack-universe">
        <h2 class="title">
          <span>We're part of the</span> Quantrack Tech Universe
        </h2>
        <div id="container-quantrack-universe">
          <p>
            Quantrack’s mission is about modern company building: We start with
            an idea and transform it into a controlled fast - growing product
            and, most of all, hea lthy business.
          </p>
          <p>
            Quantrack’s companies are places where great people can be inspired
            and enabled to do the best and most meaningful work of their
            careers.
          </p>
          <a class="btnlink" target="blank" href="http://quantrack.io/"
            >Visit Quantrack.io <span><i class="fas fa-chevron-right"></i></span
          ></a>
        </div>
      </section>
    </main>

    <footer>
      <nav>
        <a href="#section-products">Our Products</a>
        <a href="#section-workflow">Our Workflow</a>
        <a href="#section-contact-quote">Contact Us</a>
        <a href="#section-quote">Get a Quote</a>
        <a target="blank" href="https://quantrack.github.io/">Blog</a>
      </nav>
      <div>
        <img src="./sources/img/quantrack-logo.png" alt="quantrack logo" />
        <p>
          Quantrack builds innovative algorithmics strategies to help you
          leverage the power of your data.
        </p>
      </div>
    </footer>
    <script src="./js/main.js"></script>
  </body>
</html>
