<?php
include "./config/db_config.php";
include "./includes/header.php";

?>

<main>
  <!-- hero -->
  <section class="hero" id="home">
    <div class="container">
      <div class="hero-txt">
        <h2 class="hero-h2">Discover delicious recipes</h2>
        <h3 class="hero-h3">Find recipes that fit your diet easily!</h3>
        <!-- <form class="search-form" action="">
            <input
              type="text"
              id="search-input"
              class=search-input
              name="search-input"
              placeholder="search for a recipe..." />
            <input
              class="primary-btn"
              type="button"
              value="Search"
              id="submit-btn"
              name="submit-btn" />
          </form> -->
        <div class="hero-btns">
          <a class="reg-btn primary-btn" href="#">Register</a>
          <a class="login-btn secondary-btn" href="#">Login</a>
        </div>
      </div>

    </div>
  </section>


  <!-- about -->
  <section class="about" id="about">
    <div class="container">
      <div class="section-txt">
        <h4 class="section-title slide-up">Discover Your Recipe</h4>
        <h2 class="section-subtitle slide-up">
          Personalized recipes for everyone
        </h2>
        <p class="section-txt slide-up">
          At ForkfulFinds, we empower you to explore a world of culinary
          delights tailored specifically to your dietary needs. Whether
          you're vegan, gluten-free, or following any specific diet, our
          platform is designed to help you find delicious recipes that fit
          your lifestyle. With a user-friendly interface and a diverse range
          of options, cooking has never been easier or more enjoyable. Join
          our community of food lovers and start your culinary adventure
          today!
        </p>
        <a class="primary-btn" href="#">Get in touch</a>
      </div>
      <div class="about-img">
        <img src="assets/about-side.png" alt="" />
      </div>
      <div class="about-img-mobile">
        <img src="assets/about-side-mobile.png" alt="" />
      </div>
    </div>
  </section>
  <!-- personalized -->
  <section class="personalized" id="services">
    <div class="container">
      <div class="section-txt">
        <h4 class="section-title slide-up">Personalized Recipes</h4>
        <h2 class="section-subtitle slide-up">
          Find meals for every dietary need
        </h2>
      </div>

      <div class="section-cards">
        <div class="card">
          <div class="card-img">
            <img src="assets/card-1.png" alt="" />
          </div>
          <div class="card-title">
            <h4>Personalized Search</h4>
          </div>
          <div class="card-desc">
            Get recipes tailored to your unique dietary needs
          </div>
        </div>
        <div class="card">
          <div class="card-img">
            <img src="assets/card-2.png" alt="" />
          </div>
          <div class="card-title">
            <h4>Ingredient-based search</h4>
          </div>
          <div class="card-desc">
            Find recipe based on ingredients you have at home
          </div>
        </div>
        <div class="card">
          <div class="card-img">
            <img src="assets/card-3.png" alt="" />
          </div>
          <div class="card-title">
            <h4>Nutritional information</h4>
          </div>
          <div class="card-desc">
            Access to detailed nutritional info for your recipes
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="contact" id="contact">
    <div class="container">
      <div class="section-txt">
        <h4 class="section-title slide-up">Get In Touch</h4>
        <h2 class="section-subtitle slide-up">
          We'd love to hear from you!
        </h2>

        <div class="contact-form">
          <form action="">
            <div class="form-group">
              <label for="name" id="name-label">Name <span>*</span></label>
              <input
                class="contact-input"
                type="text"
                id="name"
                name="name"
                placeholder="Jane Smith..." />
            </div>
            <div class="form-group">
              <label for="email" id="email-label">Email <span>*</span></label>
              <input
                class="contact-input"
                type="email"
                id="email"
                name="email"
                placeholder="email@website.com" />
            </div>
            <div class="form-group">
              <label for="message" id="message-label">Message <span>*</span></label>
              <textarea
                class="contact-input"
                name="message"
                id="message"
                cols="33"
                rows="8"></textarea>
              <input
                class="primary-btn"
                type="button"
                value="Submit"
                id="contact-btn"
                name="contact-btn" />
            </div>
          </form>
        </div>
      </div>

      <div class="contact-details">
        <div class="contact-info">
          <h4>Email</h4>
          <div class="contact-txt">
            <span><i class="fa-solid fa-xl fa-envelope"></i></span>
            <p>alan.mcivor27@gmail.com</p>
          </div>
        </div>
        <div class="contact-info">
          <h4>Location</h4>
          <div class="contact-txt">
            <span><i class="fa-solid fa-xl fa-location-dot"></i></span>
            <p>Glasgow G73 5JD</p>
          </div>
        </div>
        <div class="contact-info">
          <h4>Hours</h4>
          <div class="contact-txt">
            <span>Mon</span>
            <p class="working-time">9:00am - 5:00pm</p>
          </div>
          <div class="contact-txt">
            <span>Tue</span>
            <p class="working-time">9:00am - 5:00pm</p>
          </div>
          <div class="contact-txt">
            <span>Wed</span>
            <p class="working-time">9:00am - 5:00pm</p>
          </div>
          <div class="contact-txt">
            <span>Thur</span>
            <p class="working-time">9:00am - 5:00pm</p>
          </div>
          <div class="contact-txt">
            <span>Fri</span>
            <p class="working-time">9:00am - 12:00pm</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
include "./includes/footer.php";
?>