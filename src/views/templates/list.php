<?= View::make('theme-default::inc.header') ?>

<article role="main">
    <?= View::make('theme-default::inc.page-header') ?>

    <section class="page-list">
        <div class="container">
            <h2>Features</h2>

            <ul>
                <?php foreach ($getPages([
                    'parent' => $page,
                ]) as $p): ?>
                    <li class="col-md-4">
                        <a href="<?= $p->url() ?>">
                            <h3><?= $p->getTitle() ?></h3>
                            <p><?= $chunk('text', 'standfirst', $p)->text() ?></p>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </section>
</article>

<?= View::make('theme-default::inc.footer') ?>