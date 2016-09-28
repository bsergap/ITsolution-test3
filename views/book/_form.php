<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
// use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'authors')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'authors')->dropDownList(ArrayHelper::map(Author::find()->all(), 'id', 'first_name', 'second_name')) ?>

    <?= $form->field($model, 'published')->widget(\yii\jui\DatePicker::classname(), ['dateFormat' => 'yyyy-MM-dd',]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
