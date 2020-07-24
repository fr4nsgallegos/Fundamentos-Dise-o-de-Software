<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DetalleFixture
 */
class DetalleFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'detalle';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_product' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Cantidad' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Precio' => ['type' => 'decimal', 'length' => 8, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'empleado_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'orden_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'pk_product' => ['type' => 'index', 'columns' => ['id_product'], 'length' => []],
            'empleado_fk' => ['type' => 'index', 'columns' => ['empleado_id'], 'length' => []],
            'orde_fk' => ['type' => 'index', 'columns' => ['orden_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'empleado_fk' => ['type' => 'foreign', 'columns' => ['empleado_id'], 'references' => ['empleado', 'id_empleado'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'orden_fk' => ['type' => 'foreign', 'columns' => ['orden_id'], 'references' => ['orden', 'id_orden'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'producto_fk' => ['type' => 'foreign', 'columns' => ['id_product'], 'references' => ['producto', 'id_prod'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'id_product' => 1,
                'Cantidad' => 1,
                'Precio' => 1.5,
                'empleado_id' => 1,
                'orden_id' => 1,
            ],
        ];
        parent::init();
    }
}
