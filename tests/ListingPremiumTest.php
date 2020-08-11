<?php

include_once __DIR__ .'/../classes/ListingPremium.php';

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase
{
    /** @test */
    function listingPremiumReturnsStatusPremium()
    {
        $listingPremium = new ListingPremium(
            [
                'id' => 1,
                'title' => 'title'
            ]
        );
        $this->assertEquals(
            'premium',
            $listingPremium->getStatus()
        );
    }
    /** @test */
    function listingPremiumReturnsDescription()
    {
        $listingPremium = new ListingPremium(
            [
                'id' => 1,
                'title' => 'title',
                'description' => 'This is a test description'
            ]
        );
        $this->assertEquals(
            'This is a test description',
            $listingPremium->getDescription()
        );
    }
    /** @test */
    function listingPremiumDisplaysAllowedTags()
    {
        $listingPremium = new ListingPremium(
            [
                'id' => 1,
                'title' => 'title',
                'description' => 'This is a test description'
            ]
        );
        $this->assertEquals(
            '&lt;p&gt;&lt;br&gt;&lt;b&gt;&lt;strong&gt;&lt;em&gt;&lt;u&gt;&lt;ol&gt;&lt;ul&gt;&lt;li&gt;',
            $listingPremium->displayAllowedTags()
        );
    }
}