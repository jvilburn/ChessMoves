<?php

require_once 'ChessPiece.php';

class Queen extends ChessPiece
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
        return $this->moves();
    }
}
    