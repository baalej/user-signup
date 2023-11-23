<ul>
  <li><a href="<?= $site->url() ?>"><?= $site->title() ?></a></li>
  <?php if (!$kirby->user()) : ?>
    <?php foreach($site->children()->find('registration', 'login') as $item): ?>
      <li><a <?php e($item->isOpen(), 'aria-current ') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
    <?php endforeach ?>
  <?php endif ?>
  <?php if ($kirby->user()) : ?>
    <li><a href="<?= url('logout') ?>">Logout</a></li>
  <?php endif ?>
</ul>