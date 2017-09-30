<?php

class KnightTest extends Test
{
    public function TestGetPossibleMoves() {
        // test a random center spot
        $knight = new Knight('d3');
        $this->assertContainsExactly($knight->getPossibleMoves(), array('c5','e5','b2','b4','c1','e1','f2','f4'));
        // test the corners
        $knight = new Knight('a1');
        $this->assertContainsExactly($knight->getPossibleMoves(), array('b3','c2'));
        $knight = new Knight('a8');
        $this->assertContainsExactly($knight->getPossibleMoves(), array('b6','c7'));
        $knight = new Knight('h1');
        $this->assertContainsExactly($knight->getPossibleMoves(), array('f2','g3'));
        $knight = new Knight('h8');
        $this->assertContainsExactly($knight->getPossibleMoves(), array('g6','f7'));
    }
}
