<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TerminalModel */

$this->title = Yii::t('common', 'add');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'terminalInbound'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="terminal-model-create">

<!--     <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
