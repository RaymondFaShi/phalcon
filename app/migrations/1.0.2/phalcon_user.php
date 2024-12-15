<?php

use Phalcon\Db\Column;
use Phalcon\Db\Exception;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Migrations\Mvc\Model\Migration;

/**
 * Class PhalconUserMigration_102
 */
class PhalconUserMigration_102 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     * @throws Exception
     */
    public function morph(): void
    {
        $this->morphTable('phalcon_user', [
            'columns' => [
                new Column(
                    'user_id',
                    [
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'size' => 11,
                        'comment' => "用户id",
                        'first' => true
                    ]
                ),
                new Column(
                    'username',
                    [
                        'type' => Column::TYPE_VARCHAR,
                        'notNull' => true,
                        'size' => 50,
                        'comment' => "用户名",
                        'after' => 'user_id'
                    ]
                ),
                new Column(
                    'password',
                    [
                        'type' => Column::TYPE_CHAR,
                        'notNull' => true,
                        'size' => 32,
                        'comment' => "密码",
                        'after' => 'username'
                    ]
                ),
                new Column(
                    'created_at',
                    [
                        'type' => Column::TYPE_CHAR,
                        'notNull' => true,
                        'size' => 10,
                        'comment' => "创建时间",
                        'after' => 'password'
                    ]
                ),
            ],
            'indexes' => [
                new Index('PRIMARY', ['user_id'], 'PRIMARY'),
            ],
            'options' => [
                'TABLE_TYPE' => 'BASE TABLE',
                'AUTO_INCREMENT' => '',
                'ENGINE' => 'InnoDB',
                'TABLE_COLLATION' => 'utf8mb4_general_ci',
            ],
        ]);
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up(): void
    {
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down(): void
    {
    }
}
