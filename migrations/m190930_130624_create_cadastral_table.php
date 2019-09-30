<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cadastral}}`.
 */
class m190930_130624_create_cadastral_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cadastral}}', [
            'id' => $this->primaryKey(),
            'cadastral_number' => $this->string(255)/*->comment('Кадастровый номер')*/,
            'address' => $this->string(255)->notNull()/*->comment('Адрес')*/,
            'price' => $this->decimal(null,2)->notNull()/*->comment('Кадастровая цена (рубли)')*/,
            'area' => $this->integer()->notNull()/*->comment('Площадь (квадратные метры)')*/,
        ]);

        $this->createIndex('cadastral_cadastral_number_index', '{{%cadastral}}', 'cadastral_number');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cadastral}}');
    }
}
