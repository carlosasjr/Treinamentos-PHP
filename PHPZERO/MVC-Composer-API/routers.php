<?php
global $routers;
$routers = array();

$routers['/users/login'] = '/users/login';
$routers['/users/new'] = '/users/newRecord';
$routers['/users/feed'] = '/users/feed';

$routers['/users/{id}'] = '/users/view/:id';
$routers['/users/{id}/photos'] = '/users/photos/:id';
$routers['/users/{id}/follow'] = '/users/follow/:id';

$routers['/photos/random'] = '/photos/random';
$routers['/photos/new'] = '/photos/new_record';
$routers['/photos/{id}'] = '/photos/view/:id';
$routers['/photos/{id}/comment'] = '/photos/comment/:id';
$routers['/photos/{id}/like'] = '/photos/like/:id';

