<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Kinky
 * @since Kinky Kinky 1.0
 */

?>
<footer id="footer" class="footer">
  <nav class="footer_nav">
    <a href="" class="footer_logo">
      <img src="<?php echo get_template_directory_uri(); ?>/logo.svg" alt="Logo" class="footer_logo__img">
    </a>
    <ul class="footer_nav__list">
      <li class="footer_nav__item">
        <a href="#" class="footer_nav__link">Новости</a>
      </li>
      <li class="footer_nav__item">
        <a href="#" class="footer_nav__link">Статьи</a>
      </li>
      <li class="footer_nav__item">
        <a href="#" class="footer_nav__link">Уроки</a>
      </li>
    </ul>
  </nav>
  <span class="footer_copy"><?= $_SERVER['HTTP_HOST'] ?> <?= date('Y') ?></span>
</footer>

<?php wp_footer(); ?>

</body>

</html>