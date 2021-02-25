<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Post;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        #Category fixture creation
        $politique = new Category();
        $politique->setName('Politique')->setAlias('politique');

        $economie = new Category();
        $economie->setName('Economie')->setAlias('economie');

        $sante = new Category();
        $sante->setName('Sante')->setAlias('sante');

        $culture = new Category();
        $culture->setName('Culture')->setAlias('culture');

        #preload data for DB pull request
        $manager->persist($politique);
        $manager->persist($economie);
        $manager->persist($sante);
        $manager->persist($culture);

        #execute preload DB request
        $manager->flush();

        $user = new User();
        $user->setFirstname('Laure')
            ->setLastname('SAMBOU')
            ->setEmail('lvsambou@gmail.com')
            ->setPassword('test')
            ->setRoles(['ROLE_USER']);

        $manager->persist($user);
        $manager->flush();

        #Post creation | Politique
        for ($i=0; $i < 3; $i++)
        {
            $post = new Post();
            $post->setName('Lorem ipsum set dolor n°' . $i)
                ->setAlias('lorem-ipsum-set-dolor-' . $i)
                ->setContent('<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>')
                ->setImage('https://via.placeholder.com/500')
                ->setCreatedAt(new \DateTime())
                ->setUser($user)
                ->setCategory($politique);
            $manager->persist($post);
        }

        #Post creation | Economie
        for ($i=3; $i < 7; $i++)
        {
            $post = new Post();
            $post->setName('Lorem ipsum set dolor n°' . $i)
                ->setAlias('lorem-ipsum-set-dolor-' . $i)
                ->setContent('<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>')
                ->setImage('https://via.placeholder.com/500')
                ->setCreatedAt(new \DateTime())
                ->setUser($user)
                ->setCategory($economie);
            $manager->persist($post);
        }

        #Post creation | Sante
        for ($i=7; $i < 11; $i++)
        {
            $post = new Post();
            $post->setName('Lorem ipsum set dolor n°' . $i)
                ->setAlias('lorem-ipsum-set-dolor-' . $i)
                ->setContent('<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>')
                ->setImage('https://via.placeholder.com/500')
                ->setCreatedAt(new \DateTime())
                ->setUser($user)
                ->setCategory($sante);
            $manager->persist($post);
        }

        #Post creation | Culture
        for ($i=11; $i < 14; $i++)
        {
            $post = new Post();
            $post->setName('Lorem ipsum set dolor n°' . $i)
                ->setAlias('lorem-ipsum-set-dolor-' . $i)
                ->setContent('<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>')
                ->setImage('https://via.placeholder.com/500')
                ->setCreatedAt(new \DateTime())
                ->setUser($user)
                ->setCategory($culture);
            $manager->persist($post);
        }

        $manager->flush();




        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
