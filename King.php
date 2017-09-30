<?php

require_once 'ChessPiece.php';

class King extends ChessPiece
{
    public function getPossibleMoves() {
        // In a more robust application where we have access to history
        // and the position of other pieces, we could implement Castling
        // and take into account moves that would put us in check.
        for ($xoffset = -1; $xoffset < 2; $xoffset++) {
            for ($yoffset = -1; $yoffset < 2; $yoffset++) {
                if ( ($xoffset != 0 || $yoffset != 0) && ChessBoard::isValidPosition($this->x+$xoffset, $this->y+$yoffset) ) {
                    $this->addMove($this->x+$xoffset, $this->y+$yoffset);
                }                
            }
        }
        return $this->moves;
    }
}
