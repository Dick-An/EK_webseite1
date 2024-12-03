<?php require_once "./assets/layout/header.php"; ?>

<div class="container mt-4">
  <h1>Willkommen auf meiner persönlichen Website!</h1>
  
  <p>Kurs:    Web Programmierung von Ali Khorsandfard</p>
  <p>Fachinformatiker für Systemintegration</p>
  <p>Name:    Andreas Dick</p>
  <p>Ort:     DAA Minden</p>
  
  <h2 class="mt-4">Kontaktieren Sie mich</h2>
  <form>
    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Ihre Email-Adresse">
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Nachricht:</label>
      <textarea class="form-control" id="message" rows="3" placeholder="Ihre Nachricht"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Senden</button>
  </form>
</div>
</section>

<section>
  <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
    <iframe style="border:0; width: 100%; height: 450px;"
      src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d4104.791712837659!2d8.911387312684948!3d52.28471694667572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sDAA%20Deutsche%20Angestellten-Akademie%20GmbH!5e0!3m2!1sde!2sde!4v1732804030138!5m2!1sde!2sde"
      frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>

<?php require_once "./assets/layout/footer.php"; ?>