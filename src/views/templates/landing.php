<?= $view('inc.header') ?>

<article role="main">
    <?= $view('inc.page-header') ?>

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
</article>

<?= $view('inc.footer') ?>