<?php snippet('header') ?>
  <?php snippet('reseda') ?>

  <div class="flex-container">
    <?php if ($photographyPage = page('informationen')): ?>
      <div class="cover-container">
        <ul class="home-grid">
          <li>
            <a href="<?= $photographyPage->url() ?>">
              <figure>
                <?php if ($cover = $photographyPage->cover()): ?>
                <img src="<?= $cover->resize(1024, 1024)->url() ?>" alt="<?= $cover->alt()->esc() ?>">
                <?php endif ?>
              </figure>
            </a>
          </li>
        </ul>
      </div>
    <?php endif ?>

    <div class="intro-container">
      <?php snippet('intro') ?>
    </div>
  </div>

<?php snippet('footer') ?> 

