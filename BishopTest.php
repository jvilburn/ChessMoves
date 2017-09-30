<?php

class BishopTest extends Test
{
    public function TestGetPossibleMoves() {
        // test a random center spot
        $bishop = new Bishop('d3');
        $this->assertContainsExactly($bishop->getPossibleMoves(), array('c2','b1','e4','f5','g6','h7','c4','b5','a6','e2','f1'));
        // test the corners
        $bishop = new Bishop('a1');
        $this->assertContainsExactly($bishop->getPossibleMoves(), array('b2','c3','d4','e5','f6','g7','h8'));
        $bishop = new Bishop('a8');
        $this->assertContainsExactly($bishop->getPossibleMoves(), array('b7','c6','d5','e4','f3','g2','h1'));
        $bishop = new Bishop('h1');
        $this->assertContainsExactly($bishop->getPossibleMoves(), array('a8','b7','c6','d5','e4','f3','g2'));
        $bishop = new Bishop('h8');
        $this->assertContainsExactly($bishop->getPossibleMoves(), array('a1','b2','c3','d4','e5','f6','g7'));
    }
}
