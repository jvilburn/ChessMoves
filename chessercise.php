#!/usr/bin/php
<?php

spl_autoload_register(function ($class_name) {
    if (file_exists($class_name . '.php')) {
        require_once $class_name . '.php';
    }
});

function usage() {
    global $argv;
    exit( "Usage:$argv[0] -piece <piece> -position <position>\n"
           . "<piece> can be King, Queen, Bishop, Knight, Rook, or Pawn\n"
           . "<position> is in algebraic notation in the range of a1 to h8\n"
           . "parameters are case-insensitive\n" );
}

function invalidParameter($i) {
    global $argv;
    print "Invalid parameter $argv[$i]\n";
    usage();    
}

if ($argc != 5) {
    usage();
}

$validPieceNames = array('King', 'Queen', 'Bishop', 'Knight', 'Rook', 'Pawn');

for ($i = 1; $i < $argc; ++$i) {
    if ( strtolower($argv[$i]) == "-piece" && $i < $argc - 1 ) {
        $pieceName = ucfirst(strtolower($argv[++$i]));
        if (!in_array($pieceName, $validPieceNames)) {
            print "$pieceName is not a valid piece\n";
            usage();
        }
        if (!class_exists($pieceName)) {
            print "$pieceName is not implemented\n";
            usage();
        }
    }
    else if ( strtolower($argv[$i]) == "-position" && $i < $argc - 1 ) {
        if ( !ChessBoard::isValidPositionString($argv[++$i])) {
            invalidParameter($i);                
        }
        $position = $argv[$i];
    }
    else {
        invalidParameter($i);
    }
}
$piece = new $pieceName($position);
$moves = $piece->getPossibleMoves();
print implode(',', $moves) . "\n";