<?php

# Generates a Random Number 
$randomNumber = rand(0,3);

# Quotes Array
$quoteArray = array(
    0 => array(
        'quote' => 'First do it, then do it right, then do it better.',
        'author' => 'Addy Osmani'
    ),
    1 => array(
        'quote' => 'Success is not final, failure is not fatal: it is the courage to continue that counts.',
        'author' => 'Winston Churchill'
    ),
    2 => array(
        'quote' => 'Whatever the mind of man can conceive and believe, it can achieve.',
        'author' => 'Napoleon Hill'
    ),
    3 => array(
        'quote' => 'Whether you think you can, or you think you can’t– you’re right.',
        'author' => 'Henry Ford'
    )
);

# Output Variables
$getQuote = $quoteArray[$randomNumber]['quote'];
$getQuoteAuthor = $quoteArray[$randomNumber]['author'];