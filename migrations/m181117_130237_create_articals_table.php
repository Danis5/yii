<?php

use yii\db\Migration;

/**
 * Handles the creation of table `articals`.
 */
class m181117_130237_create_articals_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('articals', [
            'id' => $this->primaryKey(),
            'titel' => $this->string(),
           'conten' => $this->text(),
           'vives' => $this->intregre(),
            'date' => $this->date(),
            'user_id' => $this->integer()
                
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('articals');
    }
}
