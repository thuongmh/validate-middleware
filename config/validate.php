<?php
return [
    'handle_validate' => [
        'name_file' => true,
        'input_html' => true,
        'input_string' => true,
    ],

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

    'messages' => [
        'validate_name_file' => 'Định dạng file không hợp lệ',
        'validate_input' => 'Có chứa các ký tự bắt đầu không được cho phép (+, -, =, @)',
        'validate_input_html' => 'Dữ liệu có chứa các thẻ HTML'
    ]
];
