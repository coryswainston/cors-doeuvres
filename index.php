<?php require 'header.php' ?>
    <main>
      <section id="home">
        <h1>Cory Swainston <br /><span> |  programmer</span></h1>
        <h2>Just a student working hard to be more than just a student.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elementum at nulla sit amet elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque est quis venenatis cursus. Curabitur ex arcu, sollicitudin in sem vel, ultrices laoreet velit. Aenean a posuere arcu, at accumsan nibh. Nullam neque turpis, euismod sed dolor in, ornare tristique lacus. Curabitur urna leo, fringilla et lacus a, ornare sodales turpis. Cras eu risus iaculis, egestas dolor quis, vehicula orci. Maecenas pulvinar nec elit at tincidunt. Suspendisse quis suscipit est.</p>
      </section>
      <section id="portfolio">
        <h1>Portfolio</h1>
        <h2>Here's what I've done so far.</h2>
        <div class="project">
          <div class="description">
            <h3>smart-dictionary</h3>
            <p>A dictionary app that pulls words from a page.</p>
            <p>For this project, I integrated text recognition from <a href="https://developers.google.com/vision/">Google OCR</a> and utilized the <a href="https://developer.oxforddictionaries.com/documentation">Oxford Dictionary API</a>.</p>
            <p>Code is on GitHub in the <a href="https://github.com/coryswainston/smart-dictionary">smart-dictionary</a> repo.</p>
          </div>
          <div class="video">
            <video src="media/smart-dictionary-demo.mp4" autoplay loop>
          </div>
        </div>
        <div id="link-icons">
          <a href="https://linkedin.com/in/coryswainston">
            <img src="media/linkedin-logo.png" alt="Cory Swainston on LinkedIn">
          </a>
          <a href="https://github.com/coryswainston">
            <img src="media/github-logo.png" alt="coryswainston on GitHub">
          </a>
          <a href="https://portfolium.com/CorySwainston">
            <img src="media/portfolium-logo.png" alt="Cory Swainston on Portfolium">
          </a>
        </div>
        </video>
      </section>
      <section id="contact">
        <h1>Contact Me</h1>
        <?php
          if (isset($_GET['sent']) && $_GET['sent'] == 'true') {
            echo "<h2>Thanks for reaching out! I'll get back to you soon.</h2>";
          }
          else {
            echo "<h2>Send me a message.</h2>";
          }
         ?>
        <form id="contact" action="email.php" method="post">
          <input class="contact-input" type="text" name="name" placeholder="Name"><br>
          <input class="contact-input" type="email" name="email" placeholder="Email"><br>
          <textarea name="message" rows="8" cols="80" placeholder="What can I help you with?"></textarea>
          <button type="submit" name="submit">Send</button>
        </form>
      </section>
    </main>
<?php require 'footer.php'; ?>
