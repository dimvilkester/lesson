@extends('layouts.app')

<?php $__env->startSection('content'); ?>
    <?php foreach($posts as $post): ?>
        <article>
            <h2><?php echo e($post->fullname); ?></h2>
            <p><?php echo e($post->namberphone); ?></p>
            <p>published: <?php echo e($post->published_at); ?></p>
        </article>
    <?php endforeach; ?>
<?php $__env->stopSection(); ?>
