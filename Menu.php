<?php
// [dir,name,level] add in right order
$pages = [
    [
        'index.php',
        'Home',
        '1'
    ],
    [
        'Downloads.php',
        'Downloads',
        '1'
    ],
    [
        'Schrecktech.php',
        'Schrecktech1',
        '2'
    ],
    [
        'Schrecktech2(beta).php',
        'Schrecktech2(beta)',
        '2'
    ],
    [
        'Schrecktech3.php',
        'Schrecktech3',
        '2'
    ],
    [
        'InvasionPack.php',
        'InvasionPack',
        '2'
    ],
    [
        'Share.php',
        'Share',
        '2'
    ]
];

function GetMenu()
{
    global $pages;
    echo '<ul>';
    foreach ($pages as $page) {
        echo '<li ', ($page[2] == '1' ?: 'class=sec'), '>';
        echo '<a href=', $page[0], '>', $page[1], '</a>';
    }
    echo '</ul>';
}
?>