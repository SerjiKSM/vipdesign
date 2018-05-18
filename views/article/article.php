<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Новини';
?>
<div class="site-article">

    <div class="body-content">
        <h1><?= Html::encode("{$article->title}") ?></h1>
        <p><?= Html::encode("{$article->full_description}") ?></p>
        <span><?= Html::encode("{$article->date}") ?></span>
    </div>
    <hr>
    <p>Вернуться к <a href="<?=Url::to('/')?>">списку новостей</a></p>

</div>
