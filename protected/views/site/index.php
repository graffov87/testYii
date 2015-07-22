<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'whois-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'domain'); ?>
        <?php echo $form->textField($model,'domain'); ?>
        <?php echo $form->error($model,'domain'); ?>
    </div>


    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

    <?php $this->endWidget(); ?>
    <?php
    $this->widget('zii.widgets.grid.CGridView', array(
        'id'           => 'domains-list-grid',
        'dataProvider' => $result->search(),
        'emptyText'    => Yii::t('shield', 'Записи не найдены'),
        'htmlOptions'  => array(),
        'enableSorting' => 'true',
        'columns'      => array(
            'domain',
            'Result',
            array(
                'class'                => 'CButtonColumn',
                'template'             => '{update}{delete}',
            ),
        ),
    ));
    ?>
</div><!-- form -->