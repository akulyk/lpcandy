<!doctype html>
<html>
    <head>
        <title><?=_t('Templater editor')?></title>
        <meta charset="utf-8">

        <link href="<?=url('view/assets/script/templater.css')?>" rel="stylesheet" type="text/css">
        <script src="/~boomyjee/templater/lib/templater.js"></script>
        
        <script>
            templater({
                template: "<?=$tpl?>",
                publishScreenshot: true,
                ajax_url: "<?=url('page-ajax/'.$page->id)?>",
                upload_url: "<?=url('upload/LPCandy/files/'.$page->user->id)?>",
                browse_url: "<?=url('files/browse.php')?>",
                modules: <?= json_encode($modules) ?>,
                allowSkipType: false
            });
        </script>        
    </head>
    <body>
        <div id="logged_info">
            <? $user = \LPCandy\Models\User::checkLoggedIn() ?>
            <? if ($user): ?>
                <?=_t('Logged as')?>
                <a href="<?=url('profile')?>"><?= $user->name ?></a>
                |
                <a href="<?=url('logout')?>"><?=_t('Logout')?></a>
            <? endif ?>
        </div>            
    </body>
</html>
