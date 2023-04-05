<!-- <p>Je suis l'accueil du controleur Test</p> -->
<!--Code venant d'Open Classroom-->
<h1>
    Test
</h1>
<p>
    <a href="<?php echo site_url(); ?>">accueil</a>
    <br />
    <a href="<?php echo site_url('Test/accueil'); ?>">accueil</a> du test
    <br />
    <a href="<?php echo site_url('Test/secret'); ?>">page secrète</a>
    <br />
    <a href="<?php echo site_url(array('test', 'secret')); ?>">page
        secrète</a>
</p>