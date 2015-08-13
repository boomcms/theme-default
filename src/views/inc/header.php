<!DOCTYPE HTML>
<html>
	<head>
		<title><?= $page->getTitle() ?> | <?= Settings::get('site.name') ?></title>
		
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link href="/vendor/boomcms/theme-default/css/main.css" rel='stylesheet' type='text/css' />
		
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?= $page->getDescription() ?>" />
        <meta name="keywords" content="<?= $page->getKeywords() ?>" />
        
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="<?= Settings::get('site.name') ?>">
        <meta property="og:url" content="<?= $page->url() ?>">
        <meta property="og:title" content="<?= $page->getTitle() ?>">
        <meta property="og:description" content="<?= $page->getDescription() ?>">
        
        <?php if ($page->hasFeatureImage()): ?>
            <meta property="og:image" content="<?= $assetURL(['id' => $page->getFeatureImageId(), 'width' => 200]) ?>">
        <?php endif ?>
            
        <?php if ($page->allowsExternalIndexing()): ?>
            <meta name='robots' content='index, follow' />
        <?php else: ?>
            <meta name='robots' content='noindex, nofollow' />
        <?php endif ?>
    </head>

    <body>
        <header>
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/"><img src="/vendor/boomcms/theme-default/img/logo.png" alt="BoomCMS logo" /></a>
                    </div>

                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav pull-right">
                            <?php foreach ($getPages(['parent' => Page::findByPrimaryUri('/'), 'visibileInNavigation']) as $p): ?>
                                <li><a href="<?= $p->url() ?>"><?= $p->getTitle() ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        
        <main>