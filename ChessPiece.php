<?php

abstract class ChessPiece
{
    protected $x;
    protected $y;
    protected $moves = array();
    
    function __construct($position) {
        ChessBoard::positionStringToCoordinates($position, $this->x, $this->y);
    }

    protected function addMove($x, $y) {
        $position = ChessBoard::coordinatesToPositionString($x, $y);
        if ( !in_array($position, $this->moves) ) {
            $this->moves[] = $position;
        }
    }
    
    abstract protected function getPossibleMoves();
}
