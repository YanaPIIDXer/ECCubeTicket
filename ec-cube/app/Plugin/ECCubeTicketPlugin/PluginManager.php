<?php
    namespace Plugin\ECCubeTicketPlugin;
    use Eccube\Plugin\AbstractPluginManager;
    use Symfony\Component\DependencyInjection\ContainerInterface;

    // プラグインマネージャ
    class PluginManager extends AbstractPluginManager
    {
        // インストール
        public function install(array $meta, ContainerInterface $container)  
        {
            $entityManager = $container->get('doctrine')->getManager();
            $this->migration($entityManager->getConnection(), $meta['code']);
        }

        // アンインストール
        public function uninstall(array $meta, ContainerInterface $container)  
        {
            $entityManager = $container->get('doctrine')->getManager();
            $this->migration($entityManager->getConnection(), $meta['code'], '0');
        }
    }
?>
