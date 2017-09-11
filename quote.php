<?php

# Generates a Random Number

$randomNumber = rand(0,2);

$quoteArray = array(
	array('First do it, then do it right, then do it better.', 'Addy Osmani' ),
	array('Success is not final, failure is not fatal: it is the courage to continue that counts.', '- Winston Churchill' ),
	array('Whatever the mind of man can conceive and believe, it can achieve.', 'Napoleon Hill' ),
	array('Whether you think you can, or you think you can’t– you’re right.', 'Henry Ford' )

	);

$getQuote = $quoteArray[$randomNumber][0];
$getQuoteAuthor = $quoteArray[$randomNumber][0][0];