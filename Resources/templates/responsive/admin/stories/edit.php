<?php

$this->layout('admin/stories/layout');

$this->section('admin-search-box-addons');
?>
<a class="btn btn-cyan" href="/admin/stories?<?= $this->get_querystring() ?>"><i class="fa fa-arrow-circle-left"></i> <?= $this->text('admin-back-list') ?></a>

<?php $this->replace() ?>

<?php $this->section('admin-container-body') ?>

    <h4 class="title"><?= $this->post->id ? $this->text('admin-stories-edit', "#{$this->post->id}") : $this->text('admin-stories-add') ?></h4>


    <?= $this->form_form($this->raw('form')) ?>

  </div>
</div>

<?php $this->replace() ?>
