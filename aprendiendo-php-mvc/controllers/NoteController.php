<?php

require_once 'BaseController.php';

class NoteController
{

    public function list()
    {
        require_once 'models/note.php';

        $note = new Note();
        $allNotes = $note->getAll('notes');

        require_once 'views/notes/list.php';
    }

    public function show()
    {
        require_once 'models/note.php';

        $note = new Note();
        $note->setName('saludo');
        $note->setContent('hola a todos');

        require_once 'views/notes/show.php';
    }

    public function create()
    {
        require_once 'models/note.php';
    }
}