<footer>
  <?php
    $args = array(
      'theme_location' => 'header-menu',
      'container' => 'nav',
      'after' => '<span class="separador"> | </span>'
    );
    wp_nav_menu($args);
   ?>
   <div class="ubicacion">
     <p>Balmaceda 165, Lampa, Región Metropolitana.</p>
     <p>Teléfono: +1-92-456-7890</p>
   </div>
   <p class="copyright">
     Todos los derechos reservados <?php echo date('Y'); ?>
   </p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
