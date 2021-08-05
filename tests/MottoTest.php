<?php
use PHPUnit\Framework\TestCase;

require "src/Motto.php";
class MottoTest extends TestCase
{
    public function testCorrectMottoIsReturned(): void
    {
        $this->assertEquals(
            gzdecode(base64_decode("H4sIAAAAAAAAAwvJV8jOyy9XKMlIVUhOLC1OLVbITwPyMvPSiwFquA/hHAAAAA==")),
            Motto::getText()
        );
    }
}
