<?= View::make('theme-default::inc.header') ?>

<article role="main">
    <?= View::make('theme-default::inc.page-header') ?>

    <section class="content container">
        <?= $chunk('text', 'standfirst') ?>
        <?= $chunk('text', 'bodycopy') ?>
    </section>
</article>

<?= View::make('theme-default::inc.footer') ?>