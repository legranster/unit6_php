<?php

include_once __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{
    /** @test */
    function listingBasicMustReceiveData()
    {
        $this->expectExceptionMessage('Unable to create a listing, data unavailable');
        $listing = new ListingBasic();
    }

    /** @test */
    function listingBasicMustContainId()
    {
        $this->expectExceptionMessage('Unable to create a listing, invalid id');
        $listing = new ListingBasic(
            [
                'title' => 'title'
            ]
        );
    }

    /** @test */
    function listingBasicMustContainTitle()
    {
        $this->expectExceptionMessage('Unable to create a listing, invalid title');
        $listing = new ListingBasic(
            [
                'id' => 1
            ]
        );
    }

    /** @test */
    function listingBasicMinimumObjectIsCreated()
    {
        $listing = new ListingBasic(
            [
                'id' => 1,
                'title' => 'title'
            ]
        );
        $this->assertIsObject($listing);
    }
    /** @test */
    function listingBasicGetStatusReturnsBasic()
    {
        $listing = new ListingBasic(
            [
                'id' => 1,
                'title' => 'title'
            ]
        );
        $this->assertEquals($listing->getStatus(), 'basic');
    }
    /** @test */
    function listingBasicSetsStatusCorrectly()
    {
        $listing = new ListingBasic(
            [
                'id' => 1,
                'title' => 'title'
            ]
        );
        $listing->setStatus('foo');
        $this->assertEquals('foo', $listing->getStatus());
    }
    /** @test */
    function listingBasicSetsStatusCorrectlyWhenEmpty()
    {
        $listing = new ListingBasic(
            [
                'id' => 1,
                'title' => 'title'
            ]
        );
        $listing->setStatus('');
        $this->assertEquals('basic', $listing->getStatus());
    }
    /** @test */
    function listingBasicSetsWebsiteToNullWhenEmpty()
    {
        $listing = new ListingBasic(
            [
                'id' => 1,
                'title' => 'title'
            ]
        );
        $listing->setWebsite('');
        $this->assertEquals(null, $listing->getWebsite());
    }
}