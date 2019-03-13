<?php $this->beginPage(); ?>
<html>
    <head>
        <title>VideoSchool</title>
        <?php $this->head(); ?>
    </head>
    <body>
        <?php $this->beginBody(); ?>
        <?php

            \yii\bootstrap\NavBar::begin([
                'brandLabel' => 'VideoSchool',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-default navbar-fixed-top'
                ]
            ]);
            \yii\bootstrap\NavBar::end();

        ?>
        <div class="container" style="margin-top: 70px">
            <?= $content ?>
        </div>
        <?php $this->endBody(); ?>
    </body>
</html>
<?php $this->endPage(); ?>