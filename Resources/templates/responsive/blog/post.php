<?php

$this->layout('blog/layout', [
    'title' => $this->post->title,
    'meta_description' => $this->post->title
    ]);

$this->section('blog-content');

?>

	<?= $this->insert('blog/partials/blog_header') ?>
	<?= $this->insert('blog/partials/content') ?>
    <?= $this->insert('foundation/donor') ?>
	<?= $this->insert('blog/partials/related_posts') ?>
	<?= $this->insert('blog/partials/sticky') ?>


<?php $this->replace() ?>