<?= View::make('theme-default::inc.header') ?>

<article role="main">
    <header class="page-header">
        <div class="container">
          <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
        </div>
    </header>

    <section class="features">
        <div class="container">
            <h2>Features</h2>

            <ul>
                <?php for ($i = 1; $i <= 6; $i++): ?>
                    <?= $chunk('feature', "features-$i")->template('standard-4col') ?>
                <?php endfor ?>
            </ul>
        </div>
    </section>

    <section class="install">
        <div class="container text-center">
            <h2>Install</h2>

            <p>BoomCMS can be installed via <a href="http://www.getcomposer.org">composer</a></p>
            <code>composer create-project boomcms/boomcms</code>
        </div>
    </section>
</article>

<?= View::make('theme-default::inc.footer') ?>