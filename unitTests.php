#!/usr/bin/php
<?php

spl_autoload_register(function ($class_name) {
    if (file_exists($class_name . '.php')) {
        require_once $class_name . '.php';
    }
});

print "\nChessBoard Test\n";
$chessBoardTest = new ChessBoardTest();
$chessBoardTest->run();

print "\nKing Test\n";
$kingTest = new KingTest();
$kingTest->run();

print "\nQueen Test\n";
$queenTest = new QueenTest();
$queenTest->run();

print "\nBishop Test\n";
$bishopTest = new BishopTest();
$bishopTest->run();

print "\nKnight Test\n";
$knightTest = new KnightTest();
$knightTest->run();

print "\nRook Test\n";
$rookTest = new RookTest();
$rookTest->run();
