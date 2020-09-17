<?php
return [
    /**
     * set of functions to be validated
     */
    'handle_validate' => [
        'name_file' => true,
        'input_html' => true,
        'input_string' => true,
    ],

    /**
     * @secction: name_file
     * list of input names to be validated
     */
    'list_file_name' => [
        'file',
        'attach_file',
        'attach_video',
        'thumbnail',
        'image',
        'attach_thumbnail'
    ],

    /**
     * @secction: name_file
     * list of accepted file extensions
     */
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

    /**
     * @secction: input_html
     * Regex chain to check
     */
    'regex_html' => [
        '/<[^>]*>/m'
    ],

    /**
     * @secction: input_html
     * Name list of contents will not check
     */
    'expect_name_html' => [
        'token'
    ],

    /**
     * @secction: input_string
     * a list of unacceptable characters at the beginning of each message
     */
    'ARRAY_REPLACE' => [
        '@',
        '=',
        '+',
        '-'
     ],

    /**
     * list message return
     */
    'messages' => [
        'validate_name_file' => 'Định dạng file không hợp lệ',
        'validate_input' => 'Có chứa các ký tự bắt đầu không được cho phép (+, -, =, @)',
        'validate_input_html' => 'Dữ liệu có chứa các thẻ HTML'
    ]
];
