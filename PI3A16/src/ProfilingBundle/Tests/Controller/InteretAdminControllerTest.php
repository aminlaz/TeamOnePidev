<?php

namespace ProfilingBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class InteretAdminControllerTest extends WebTestCase
{
    public function testAjouterinteretadmin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajouterInteretAdmin');
    }

    public function testAfficherinteretadmin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/afficherInteretAdmin');
    }

    public function testSupprimerinteretadmin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/supprimerInteretAdmin');
    }

}
