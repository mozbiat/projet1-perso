  <!-- debut de la partie footer -->
   <footer>
       <section class="container">
       <article>
           <a target="_blank" href="https://www.linkedin.com/in/yann-bauduin"><img src="images/logo-reseau-02.png" alt="" /></a>
           <a target="_blank" href="https://www.behance.net/yann_due300"><img src="images/logo-reseau-04.png" alt="" /></a>
           <br>
           <a target="_blank" href="https://www.pinterest.fr/bauduinyann"><img src="images/logo-reseau-03.png" alt="" /></a>
           <a target="_blank" href="https://www.facebook.com/yann.bauduin"><img src="images/logo-reseau-01.png" alt="" /></a>
       </article>
       <article>
           <a href="#"><img src="images/logo-yb.png" alt="logo" /></a>
       </article>
       <article>
           <h4>Plan du site</h4>
           <a href="index.php">Accueil</a>
           <a href="index.php#presentation">Présentation</a>
           <a href="index.php#formation">Formations</a>
           <a href="index.php#competences">Compétences</a>
           <a href="index.php#experiences">Expériences</a>
           <a href="creation.php#">Mes créations</a>
           <a href="contact.php">Contact</a>
       </article>
       </section>
   </footer>
   <!-- fin de la partie footer -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- script photo -->
  <script src="lightbox.js"></script>
  <script>
      $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
          event.preventDefault();
          $(this).ekkoLightbox();
      });
  </script>
  </body>
</html>