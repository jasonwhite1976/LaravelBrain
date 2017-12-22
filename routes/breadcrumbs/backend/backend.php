<?php

Breadcrumbs::register('admin.dashboard', function ($breadcrumbs) {
    $breadcrumbs->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::register('admin.linksubmit', function ($breadcrumbs) {
    $breadcrumbs->push(__('strings.backend.linksubmit.title'), route('admin.linksubmit'));
});

Breadcrumbs::register('admin.post', function ($breadcrumbs) {
    $breadcrumbs->push(__('strings.backend.post.title'), route('admin.post'));
});

Breadcrumbs::register('admin.post.thepost', function ($breadcrumbs) {
    $breadcrumbs->push(__('strings.backend.post.title'), route('admin.post.thepost'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
