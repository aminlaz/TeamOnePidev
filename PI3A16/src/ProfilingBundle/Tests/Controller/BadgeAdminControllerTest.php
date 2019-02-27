<?php

namespace ProfilingBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BadgeAdminControllerTest extends WebTestCase
{
    public function testAjouterbadgeadmin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajouterBadgeAdmin');
    }

    public function testAfficherbadgeadmin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/afficherBadgeAdmin');
    }

    public function testSupprimerbadgeadmin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/supprimerBadgeAdmin');
    }

}
