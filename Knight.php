<?php

require_once 'ChessPiece.php';

class Knight extends ChessPiece
{
    public function getPossibleMoves() {
        // I considered doing this code as nested "for" statements
        // but it would have been less readable, more complicated,
        // and offered negligible or no speed or memory size advantage
        if ( ChessBoard::isValidPosition($this->x+1, $this->y+2) ) {
            $this->addMove($this->x+1,$this->y+2);
        }
        if ( ChessBoard::isValidPosition($this->x+1, $this->y-2) ) {
            $this->addMove($this->x+1,$this->y-2);
        }
        if ( ChessBoard::isValidPosition($this->x-1, $this->y+2) ) {
            $this->addMove($this->x-1,$this->y+2);
        }
        if ( ChessBoard::isValidPosition($this->x-1, $this->y-2) ) {
            $this->addMove($this->x-1,$this->y-2);
        }
        if ( ChessBoard::isValidPosition($this->x+2, $this->y+1) ) {
            $this->addMove($this->x+2,$this->y+1);
        }
        if ( ChessBoard::isValidPosition($this->x+2, $this->y-1) ) {
            $this->addMove($this->x+2,$this->y-1);
        }
        if ( ChessBoard::isValidPosition($this->x-2, $this->y+1) ) {
            $this->addMove($this->x-2,$this->y+1);
        }
        if ( ChessBoard::isValidPosition($this->x-2, $this->y-1) ) {
            $this->addMove($this->x-2,$this->y-1);
        }
        return $this->moves;
    }
}

    