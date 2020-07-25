<?php
    namespace Plugin\ECCubeTicketPlugin;
    use Eccube\Plugin\AbstractPluginManager;
    use Symfony\Component\DependencyInjection\ContainerInterface;
    use Eccube\Repository\CategoryRepository;

    // プラグインマネージャ
    class PluginManager extends AbstractPluginManager
    {
        // 有効化された
        public function enable(array $meta, ContainerInterface $container)
        {
            if($container == null)
            {
                die("Container is null.");
            }

            $entityManager = $container->get('doctrine')->getManager();
            if($entityManager == null)
            {
                die("EntityManager is null.");
            }
            $categoryRepository = $container->get(CategoryRepository::class);
            if($categoryRepository == null)
            {
                die("CategoryRepository is null.");
            }
            
            die("OK");
        }
    }
?>
