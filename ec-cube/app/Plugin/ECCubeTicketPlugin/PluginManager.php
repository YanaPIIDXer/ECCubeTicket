<?php
    namespace Plugin\TicketPlugin;
    
    use Eccube\Plugin\AbstractPluginManager;

    // プラグインマネージャ
    class PluginManager extends AbstractPluginManager
    {
        // インストールされた
        public function install($config, Application $app)
        {
            // TODO:カテゴリ追加処理をここに書く。
            //      ※アンインストール時にカテゴリ消去しようと思ったけど、商品情報レベルでイカれるので止めた。
        }
    }
?>
