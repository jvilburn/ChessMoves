<?php

require_once 'ChessPiece.php';

class Rook extends ChessPiece
{
    public function getPossibleMoves() {
        // horizontal movement
        for ($xpos = 0; $xpos < 8; $xpos++) {
            if ( $xpos != $this->x ) {
                $this->addMove($xpos, $this->y);
            }
        }
        // vertical movement
        for ($ypos = 0; $ypos < 8; $ypos++) {
            if ( $ypos != $this->y ) {
                $this->addMove($this->x, $ypos);
            }
        }
        return $this->moves;
    }
}
    