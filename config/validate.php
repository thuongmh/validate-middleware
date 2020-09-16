<?php
return [
    'list_file_name' => [
        'file',
        'attach_file',
        'attach_video',
        'thumbnail',
        'image',
        'attach_thumbnail'
    ],

    'white_list_extension_file' => [
        '.png',
        '.xls',
        '.xlsx',
        '.jpg',
        '.jpeg',
        '.pdf',
        '.mp4',
        '.mov'
    ],

    'regex_html' => [
        '/<[^>]*>/m'
    ],

    'expect_name_html' => [
        'token'
    ],

    'ARRAY_REPLACE' => [
        '@',
        '=',
        '+',
        '-'
     ],
];
