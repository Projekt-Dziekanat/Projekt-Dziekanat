<?php

require_once __DIR__ . '/../app/autoload.php';

$tbl = [
    [
        'date' => new \DateTime('2017-01-30'),
        'blocks' => [[
            'start' => new \DateTime('14:15'),
            'end' => new \DateTime('15:30'),
            'lecturer' => 'Kowalski',
            'class' => 'B5 404',
            'subject' => 'IO'
        ], [
            'start' => new \DateTime('9:00'),
            'end' => new \DateTime('13:30'),
            'lecturer' => 'Pawlak',
            'class' => 'EL.0',
            'subject' => 'IO'
        ]]
    ], [
        'date' => new \DateTime('2017-01-30'),
        'blocks' => [[
            'start' => new \DateTime('15:45'),
            'end' => new \DateTime('17:30'),
            'lecturer' => 'Kowalski',
            'class' => 'B5 404',
            'subject' => 'IO'
        ], [
            'start' => new \DateTime('12:15'),
            'end' => new \DateTime('15:30'),
            'lecturer' => 'Pawlak',
            'class' => 'EL.0',
            'subject' => 'IO'
        ]]
    ], [
        'date' => new \DateTime('2017-04-24'),
        'blocks' => [[
            'start' => new \DateTime('8:45'),
            'end' => new \DateTime('10:15'),
            'lecturer' => 'Kowalski',
            'class' => 'B5 404',
            'subject' => 'IO'
        ],[
            'start' => new \DateTime('10:30'),
            'end' => new \DateTime('14:15'),
            'lecturer' => 'Kowalski',
            'class' => 'B5 404',
            'subject' => 'IO'
        ], [
            'start' => new \DateTime('14:45'),
            'end' => new \DateTime('16:45'),
            'lecturer' => 'Pawlak',
            'class' => 'EL.0',
            'subject' => 'IO'
        ]]
    ]
];

$generator = new \AppBundle\ImageExport($tbl);

$img = $generator->generate();

header('Content-type: image/png');
imagepng($img);
imagedestroy($img);