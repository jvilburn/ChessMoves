<?php

class Test
{
    private $successCount = 0;
    private $failCount = 0;
    
    public function run() {
        $methodNames = get_class_methods($this);
        foreach ($methodNames as $methodName) {
            if ( strpos($methodName, 'Test') === 0) {
                $this->$methodName();
            }
        }
        $this->testComplete();
    }
    
    public function assertEquals($lhs, $rhs) {
        if ($lhs == $rhs) {
            $this->successCount++;
            print '.';
        }
        else {
            $this->failCount++;
            print '-';
        }
    }
    
    public function assertTrue($b) {
        if ($b) {
            $this->successCount++;
            print '.';
        }
        else {
            $this->failCount++;
            print '-';
        }
    }
    
    public function assertFalse($b) {
        if (!$b) {
            $this->successCount++;
            print '.';
        }
        else {
            $this->failCount++;
            print '-';
        }
    }
    
    public function assertContainsExactly($arr1, $arr2) {
        sort( $arr1 );
        sort( $arr2 );
        if ( $arr1 == $arr2 ) {
            $this->successCount++;
            print '.';
        }
        else {
            $this->failCount++;
            print '-';
        }
    }
    
    private function testComplete() {
        print "\nTest Complete\n";
        if ( $this->successCount ) {
            if ( !$this->failCount ) {
                print 'All ';
            }
            print "$this->successCount tests succeeded\n";
        }
        if ( $this->failCount ) {
            if ( !$this->successCount ) {
                print 'All ';
            }
            print "$this->failCount test failed\n";
        }
    }
}
