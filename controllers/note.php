<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Note';

$id = $_GET['id'];


$note = $db->query('select * from notes where id = :id', ['id' => $id])->findOrFail();

if (! $note) {
    abort();
}

$currentUserId = 1;

if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";
