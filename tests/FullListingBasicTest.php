<?php

include_once __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class FullListingBasicTest extends TestCase
{
    protected $listingBasic;

    protected function setUp() : void
    {
        $this->listingBasic = new ListingBasic(
            [
                'id' => 1,
                'title' => 'title',
                'website' => 'www.example.com',
                'email' => 'example@example.com',
                'twitter' => 'twitter.com/twitter',
                'status' => 'basic'
            ]
        );
    }

    /** @test */
    function ListingBasicReturnsId()
    {
        $this->assertEquals(
            1,
            $this->listingBasic->getId()
        );
    }
    /** @test */
    function ListingBasicReturnsTitle()
    {
        $this->assertEquals(
            'title',
            $this->listingBasic->getTitle()
        );
    }
    /** @test */
    function ListingBasicReturnsWebsite()
    {
        $this->assertEquals(
            'http://www.example.com',
            $this->listingBasic->getWebsite()
        );
    }
    /** @test */
    function ListingBasicReturnsEmail()
    {
        $this->assertEquals(
            'example@example.com',
            $this->listingBasic->getEmail()
        );
    }
    /** @test */
    function ListingBasicReturnsTwitter()
    {
        $this->assertEquals(
            'twitter.com/twitter',
            $this->listingBasic->getTwitter()
        );
    }
    /** @test */
    function ListingBasicReturnsFullArray()
    {
        $this->assertEquals(
            [
                'id' => '1',
                'title' => 'title',
                'website' => 'http://www.example.com',
                'email' => 'example@example.com',
                'twitter' => 'twitter.com/twitter',
                'status' => 'basic'
            ],
            $this->listingBasic->toArray()
        );
    }
}