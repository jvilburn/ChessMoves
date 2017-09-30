<?php

class KingTest extends Test
{
    public function TestGetPossibleMoves() {
        // test a random center spot
        $king = new King('d3');
        $this->assertContainsExactly($king->getPossibleMoves(), array('c2','d2','e2','c3','e3','c4','d4','e4'));
        // test the corners
        $king = new King('a1');
        $this->assertContainsExactly($king->getPossibleMoves(), array('a2','b1','b2'));
        $king = new King('a8');
        $this->assertContainsExactly($king->getPossibleMoves(), array('a7','b8','b7'));
        $king = new King('h1');
        $this->assertContainsExactly($king->getPossibleMoves(), array('g1','g2','h2'));
        $king = new King('h8');
        $this->assertContainsExactly($king->getPossibleMoves(), array('g7','g8','h7'));
    }
}
