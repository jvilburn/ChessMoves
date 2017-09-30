<?php

require_once 'ChessPiece.php';

class Bishop extends ChessPiece
{
    public function getPossibleMoves() {
        // diagonal movement
        for ($xoffset = -$this->x; $xoffset + $this->x < 8; $xoffset++) {
            if ( $xoffset ) {
                if (ChessBoard::isValidPosition($this->x+$xoffset, $this->y+$xoffset) ) {
                    $this->addMove($this->x+$xoffset, $this->y+$xoffset);
                }
                if (ChessBoard::isValidPosition($this->x+$xoffset, $this->y-$xoffset) ) {
                    $this->addMove($this->x+$xoffset, $this->y-$xoffset);
                }
                if (ChessBoard::isValidPosition($this->x-$xoffset, $this->y+$xoffset) ) {
                    $this->addMove($this->x-$xoffset, $this->y+$xoffset);
                }
                if (ChessBoard::isValidPosition($this->x-$xoffset, $this->y-$xoffset) ) {
                    $this->addMove($this->x-$xoffset, $this->y-$xoffset);
                }
            }
        }
        return $this->moves;
    }
}
    