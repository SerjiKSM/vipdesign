<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;


$this->title = 'Новини';
?>
<div class="site-articles">

    <div class="jumbotron">
        <h1>Список новостей!</h1>
    </div>

    <div class="body-content">

        <p>
            <?= Html::a('Админка', ['/article'], ['class' => 'btn btn-success']) ?>
        </p>

        <ul>
            <?php foreach ($articles as $article): ?>
                <li>
                    <?= Html::encode("{$article->date} - ") ?>
                    <a href="<?= Url::to(['article/article', 'id' => $article->id]) ?>"><?= Html::encode("{$article->title}") ?></a>
                </li>
            <?php endforeach; ?>
        </ul>

        <?= LinkPager::widget(['pagination' => $pagination]) ?>

    </div>
</div>