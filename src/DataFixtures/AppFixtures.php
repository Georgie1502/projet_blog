<?php
// 
namespace App\DataFixtures;
use App\Entity\Categorie;
use App\Entity\Article;
use App\Entity\Commentaire;
use App\Entity\Media;
// pour generer des fausses data
use Faker;
use Doctrine\Bundle\FixturesBundle\Fixture;
// manipuleur les data 
use Doctrine\Persistence\ObjectManager;
// 

// class utiliter 
class AppFixtures extends Fixture
{
   /*  public function load(ObjectManager $manager): void
    {
        //création d'une variable qui va contenir faker
        $faker = Faker\Factory::create('fr_FR');
        //tableau qui va stocker les objets
        $tab=[];
        for ($i=0; $i <10 ; $i++) { 
            $cat = new Categorie();
            $cat->setNomCategorie($faker->jobTitle());
            $manager->persist($cat);
        }
        
        $manager->flush();
 
    }  */  
    /* public function load(ObjectManager $manager): void
    {
        //création d'une variable qui va contenir faker
        $faker = Faker\Factory::create('fr_FR');
        //tableau qui va stocker les objets
        $tab=[];
        for ($i=0; $i <50 ; $i++) { 
       
            
            $article= new Article();
            $article=setTitreArticle($faker -> jobTitle());
            $article=setContenuArticle($faker->paragraph());
            $article =setDateArticle($faker->date());
            $article = setValidationArticle($faker->boolean());
            $manager->persist($article);
        }
        
        $manager->flush();
 
     }    */
      public function load(ObjectManager $manager): void     {                
         $faker = Faker\Factory::create('fr_FR');        
          $tab= [];        
           for ($i=0; $i < 50 ; $i++) {             
            $article= new Article();           
             $article -> setTitreArticle($faker -> jobTitle());            
             $article -> setContenuArticle($faker -> paragraph());            
             $article -> setDateArticle($faker -> dateTime());            
             $article -> setValidationArticle($faker -> boolean());             
             $manager -> persist($article); 
             }                  
              $manager->flush();    
             }
}

// Editer la fonction load pour lui faire créer 50 articles 
//(titre, contenu, date, et validation : 0).