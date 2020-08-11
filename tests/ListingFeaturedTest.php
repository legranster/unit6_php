<?php

include_once __DIR__ .'/../classes/ListingPremium.php';
include_once __DIR__ .'/../classes/ListingFeatured.php';

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase
{
    /** @test */
    function listingFeaturedReturnsStatusFeatured()
    {
        $listingFeatured = new ListingFeatured(
            [
                'id' => 1,
                'title' => 'title'
            ]
        );
        $this->assertEquals(
            'featured',
            $listingFeatured->getStatus()
        );
    }
    /** @test */
    function listingFeaturedReturnsCoc()
    {
        $listingFeatured = new ListingFeatured(
            [
                'id' => 1,
                'title' => 'title',
                'coc' => 'thou shalt not steal'
            ]
        );
        $this->assertEquals(
            'thou shalt not steal',
            $listingFeatured->getCoc()
        );
    }
}