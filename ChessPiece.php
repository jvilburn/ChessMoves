<?php

abstract class ChessPiece
{
    protected $x;
    protected $y;
    private $moves = array();
    
    function __construct($position) {
        ChessBoard::positionStringToCoordinates($position, $this->x, $this->y);
    }

    protected function addMove($x, $y) {
        $position = ChessBoard::coordinatesToPositionString($x, $y);
        if ( !in_array($position, $this->moves) ) {
            $this->moves[] = $position;
        }
    }
    
    protected function moves() {
        usort($this->moves, function($m1,$m2) {
            if ( $m1[1] == $m2[1] ) {
                return $m1[0] > $m2[0];
            }
            return $m1[1] > $m2[1];
        });
        return $this->moves;
    }
    
    abstract protected function getPossibleMoves();
}
