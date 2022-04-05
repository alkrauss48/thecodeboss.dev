<?php
/*
 * Template Name: Home
 *
*/

get_header(); ?>
    <div class="header-content-wrapper spanner">
      <main id="main" class="site-main scene_element scene_element--fadein" role="main">
      <div id="header-wrapper" class="header-content-image"></div>
      <div class="header-text">
        <h2>Hi, I'm</h2>
        <h1>Aaron Krauss</h1>
        <hr class="header-hr" />
        <span class="typed"><h3>I'm a <span class="orange">Developer<span></h3></span>
        <ul class="header-icons">
          <li><a class="icon-github" title="GitHub" target="github" href="https://github.com/alkrauss48"></a></li>
          <li><a class="icon-linkedin" title="LinkedIn" target="linkedin"  href="https://www.linkedin.com/in/alkrauss48/"></a></li>
          <li><a class="icon-twitter" title="Twitter" target="twitter" href="https://twitter.com/OKCWebdevs"></a></li>
          <li>
            <a class="js-fiddle-link" title="JSFiddle" target="jsfiddle" href="https://jsfiddle.net/user/thecodeboss/fiddles/">
                <svg class="js-fiddle-icon" width="32px" height="26px" viewBox="0 0 46 33">
                    <g stroke-width="2.5" fill="none" fill-rule="evenodd">
                    <path d="M23.4888889,20.543316 C21.4404656,18.4187374 19.0750303,15.6666667 16.4832014,15.6666667 C13.8721947,15.6666667 11.7555556,17.6366138 11.7555556,20.0666667 C11.7555556,22.4967196 13.8721947,24.4666667 16.4832014,24.4666667 C18.8347252,24.4666667 19.9845474,23.0125628 20.6429148,22.312473" id="Oval-1" stroke-linecap="round"></path>
                    <path d="M22.5111111,19.5900174 C24.5595344,21.7145959 26.9249697,24.4666667 29.5167986,24.4666667 C32.1278053,24.4666667 34.2444444,22.4967196 34.2444444,20.0666667 C34.2444444,17.6366138 32.1278053,15.6666667 29.5167986,15.6666667 C27.1652748,15.6666667 26.0154526,17.1207706 25.3570852,17.8208603" id="Oval-1-Copy" stroke-linecap="round"></path>
                    <path d="M45,22.7331459 C45,19.1499462 42.7950446,16.079593 39.6628004,14.7835315 C39.6774469,14.5246474 39.7003932,14.2674038 39.7003932,14.0035978 C39.7003932,6.82243304 33.8412885,1 26.611593,1 C21.3985635,1 16.9102123,4.03409627 14.8051788,8.41527616 C13.7828502,7.62878013 12.503719,7.15547161 11.1134367,7.15547161 C7.77825654,7.15547161 5.07450503,9.84159999 5.07450503,13.1544315 C5.07450503,13.7760488 5.16938207,14.3779791 5.3477444,14.9418479 C2.74863428,16.4787471 1,19.2867709 1,22.5105187 C1,27.3287502 4.89630545,31.2367856 9.72803666,31.31094 L36.3341301,31.3109406 C41.1201312,31.3406346 45,27.4870665 45,22.7331459 L45,22.7331459 Z" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </a>
          </li>
        </ul>
      </div>
      </main><!-- #main -->
    </div>
    <div class="home-content">
      <div class="container-padding">
        <h2>I love being involved in my tech community</h2>
        <h3>Here are some of the groups that I help manage and volunteer with:</h3>
        <div class="home-offerings-wrapper">
          <div class="home-offerings">
            <div class="img-wrapper teal">
              <img src="/dist/images/okcwebdevs.png" alt="OKC WebDevs" />
            </div>
            <a
                target="_blank"
                class="development"
                href="https://www.meetup.com/OKCWebDevs/"
            >OKC WebDevs</a>
          </div>
          <div class="home-offerings">
            <div class="img-wrapper blue">
              <img src="/dist/images/techlahoma.png" alt="Techlahoma" />
            </div>
            <a
                target="_blank"
                class="design"
                href="https://www.techlahoma.org/"
            >Techlahoma</a>
          </div>
          <div class="home-offerings">
            <div class="img-wrapper orange">
              <img style="width: 50%;" src="/dist/images/code-org-logo.svg" alt="Code.org" />
            </div>
            <a
                target="_blank"
                class="training"
                href="https://code.org/"
            >Code.org</a>
          </div>
        </div>
      </div>
      <div class="home-about">
        <div class="down-triangle"></div>
        <div class="container-padding">
          <div class="container">
            <div class="home-picture">
              <img src="/dist/images/ak-smile-optimized.jpg" alt="Aaron Krauss" />
            </div>
            <div class="home-about-desc">
              <h2>Get to know me</h2>
              <?php the_content(); ?>
              <a class="orange-learn-more" href="/about">About Me <i class="icon2-play"></i></a>
              <a class="orange-learn-more" target="_blank" href="https://thecodeboss.dev/resume">Resume <i class="icon2-play"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="home-projects">
        <div class="down-triangle"></div>
        <h2 class="home-projects-title">This is where you may know me from</h2>
        <div class="container">
          <a href="/blog" class="home-popular-list popular-item-1">
            <span>My Blog Posts</span>
          </a>
          <a href="/talks" class="home-popular-list popular-item-2">
            <span>My Talks</span>
          </a>
          <a href="https://labs.thecodeboss.dev" target="_blank" class="home-popular-list popular-item-3">
            <span>My Fun Personal Projects</span>
          </a>
        </div>
        <h2>But checkout some of my featured projects</h2>
        <div class="container-padding">
          <div class="home-projects-list">
            <?php
              $fields = CFS()->get('projects');
              if($fields):
            ?>
              <?php foreach($fields as $index => $field): ?>
                <div aria-labelledby="home-project-label-<?php echo $index; ?>" class="home-project">
                  <div class="project-image" style="background-image: url('<?php echo $field['thumbnail']; ?>');">
                    <p id="home-project-label-<?php echo $index; ?>" class="site-title" href="#"><?php echo $field['label']; ?></p>
                    <a class="project-hover" href="<?php echo $field['url']; ?>" target="tle"><p>Visit Site <i class="icon2-play"></i></p></a>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
        <a class="orange-learn-more" href="/projects">All Projects <i class="icon2-play"></i></a>
      </div>
    </div>
  <script src="/dist/three.min.js"type="text/javascript" charset="utf-8"></script>
<?php get_footer(); ?>
