<?php

namespace ProfilingBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class InteretUserControllerTest extends WebTestCase
{
    public function testAjouterinteretuser()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajouterInteretUser');
    }

    public function testSupprimerinteretuser()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/supprimerInteretUser');
    }

}
