<?php

class RookTest extends Test
{
    public function TestGetPossibleMoves() {
        // test a random center spot
        $rook = new Rook('d3');
        $this->assertContainsExactly($rook->getPossibleMoves(), array('a3','b3','c3','e3','f3','g3','h3','d1','d2','d4','d5','d6','d7','d8'));
        // test the corners
        $rook = new Rook('a1');
        $this->assertContainsExactly($rook->getPossibleMoves(), array('b1','c1','d1','e1','f1','g1','h1','a2','a3','a4','a5','a6','a7','a8'));
        $rook = new Rook('a8');
        $this->assertContainsExactly($rook->getPossibleMoves(), array('b8','c8','d8','e8','f8','g8','h8','a1','a2','a3','a4','a5','a6','a7'));
        $rook = new Rook('h1');
        $this->assertContainsExactly($rook->getPossibleMoves(), array('a1','b1','c1','d1','e1','f1','g1','h2','h3','h4','h5','h6','h7','h8'));
        $rook = new Rook('h8');
        $this->assertContainsExactly($rook->getPossibleMoves(), array('a8','b8','c8','d8','e8','f8','g8','h1','h2','h3','h4','h5','h6','h7'));
    }
}
