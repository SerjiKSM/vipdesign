<?php

use yii\db\Migration;

/**
 * Class m180517_211120_articles
 */
class m180517_211120_articles extends Migration
{
    
    protected $tableName = 'articles';
    
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName,[
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'short_description' => $this->text(),
            'full_description' => $this->text(),
            'date' => $this->date('Y-m-d'),
            'alias' => $this->string(255),
            'author_id' => $this->integer(),
        ]);    
        
        $this->createIndex(
            "idx-{$this->tableName}-title",
            $this->tableName,
            "title"
        );

        $this->createIndex(
            "idx-{$this->tableName}-author_id",
            $this->tableName,
            "author_id"
        );

        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex(
            "idx-{$this->tableName}-title",
            $this->tableName
        );

        $this->dropIndex(
            "idx-{$this->tableName}-author_id",
            $this->tableName
        );

        $this->dropTable($this->tableName);

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180517_211120_articles cannot be reverted.\n";

        return false;
    }
    */
}
