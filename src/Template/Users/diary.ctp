<?= $this->element('navbar') ?>

<?= $this->Form->create($diary) ?>
<?= $this->Form->input('diary', ['class' => 'ckeditor']); ?>

<?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
<?= $this->Form->end() ?>


<?= $this->element('user_footer') ?>
