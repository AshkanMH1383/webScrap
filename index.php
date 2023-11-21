<?php
    require_once("vendor/autoload.php");
    require_once("Goutte/Client.php");
    use Goutte\Client;
    $client = new Client();
    $address = 'https://torob.com/search/?query=%D9%84%D9%BE%20%D8%AA%D8%A7%D9%BE';
    $crawler = $client->request('GET', $address);
    

    $crawler->filter('h2.product-name')->each(function ($node) {

        //This additional check is to determine we only get repo name
        
        echo $node->text();
        
        echo "<br/>";
                
    });
    
    echo '==================================';
    echo "<br/>";
    
    $links = [];
    $crawler->filter('.cards-wrapper .cards a')->each(function ($node) {

        //This additional check is to determine we only get repo name
        $links[] = "https://torob.com" . $node->attr('href');
        echo "https://torob.com" . $node->attr('href');
        
        echo "<br/>";
                
    });

  
?>