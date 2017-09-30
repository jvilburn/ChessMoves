<?php

class QueenTest extends Test
{
    public function TestGetPossibleMoves() {
        // test a random center spot
        $queen = new Queen('d3');
        $this->assertContainsExactly($queen->getPossibleMoves(), array('a3','b3','c3','e3','f3','g3','h3','d1','d2','d4','d5','d6','d7','d8','c2','b1','e4','f5','g6','h7','c4','b5','a6','e2','f1'));
        // test the corners
        $queen = new Queen('a1');
        $this->assertContainsExactly($queen->getPossibleMoves(), array('b1','c1','d1','e1','f1','g1','h1','a2','a3','a4','a5','a6','a7','a8','b2','c3','d4','e5','f6','g7','h8'));
        $queen = new Queen('a8');
        $this->assertContainsExactly($queen->getPossibleMoves(), array('b8','c8','d8','e8','f8','g8','h8','a1','a2','a3','a4','a5','a6','a7','b7','c6','d5','e4','f3','g2','h1'));
        $queen = new Queen('h1');
        $this->assertContainsExactly($queen->getPossibleMoves(), array('a1','b1','c1','d1','e1','f1','g1','h2','h3','h4','h5','h6','h7','h8','a8','b7','c6','d5','e4','f3','g2'));
        $queen = new Queen('h8');
        $this->assertContainsExactly($queen->getPossibleMoves(), array('a8','b8','c8','d8','e8','f8','g8','h1','h2','h3','h4','h5','h6','h7','a1','b2','c3','d4','e5','f6','g7'));
    }
}
