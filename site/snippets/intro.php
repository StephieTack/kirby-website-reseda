<!-- <?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This intro snippet is reused in multiple templates.
  While it does not contain much code, it helps to keep your
  code DRY and thus facilitate maintenance when you have
  to make changes.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<header class="h1">
  <h1><?= $page->headline()->or($page->title())->esc() ?></h1>
  <?php if ($page->subheadline()->isNotEmpty()): ?>
  <p class="color-grey"><?= $page->subheadline()->esc() ?></p>
  <?php endif ?>
</header> -->


<header >
  <div class="cover-container">
    <h1 class="h1"><?= $page->headline()->or($page->title())->esc() ?></h1>
    <?php if ($page->subheadline()->isNotEmpty()): ?>
    <p class="color-grey"><?= $page->subheadline()->esc() ?></p>
    <?php endif ?>
  </div>

  <div class="intro-container">
    <p class="additional-text">
      Sofia Parazi ist eine in LA ansässige Fotografin, Kamerafrau und Art Director. Ihr unverwechselbarer Stil zeichnet sich durch Gegenüberstellung von Licht und Schatten aus. Für Sofia sind Fotos Metaphern, die das Abstrakte konkretisieren und das Alltägliche mystifizieren.
    </p>

    <span class="button-link-arrow">&#8594;</span>
    <a href="<?= url('informationen') ?>" class="button-link">
      Über Sofia
    </a>
  </div>
</header>
