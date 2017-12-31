<?php

namespace App\classes;

/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/31/2017
 * Time: 10:31 AM
 */
class Functions
{
    public function wordCharacterCount($data) {
        $stringLength = strlen($data['given_string']);
        $wordCount = str_word_count($data['given_string']);

        $result = [
            'string_length' => $stringLength,
            'word_count' => $wordCount
        ];
        return $result;
    }
}