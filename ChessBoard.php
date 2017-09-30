<?php

abstract class ChessBoard
{
    static public function isValidPositionString($position) {
        if ( strlen($position) != 2) {
            return false;
        }
        self::positionStringToCoordinates($position, $x, $y);
        return self::isValidPosition($x, $y);
    }
    
    static public function positionStringToCoordinates($position, &$x, &$y) {
        // Convert algebraic chess notation to coordinates.
        // For example, b4 becomes 1, 3
        $x = ord(strtoupper($position)) - ord('A');
        $y = $position[1] - 1;        
    }
    
    static public function isValidPosition($x, $y) {
        // Make sure all positions are on the board
        return $x >= 0 && $x <= 7 && $y >= 0 && $y <= 7;
    }
    
    static public function coordinatesToPositionString($x, $y) {
        return chr(97 + $x) . ($y + 1); // 97 is ascii for 'a'
    }
}
