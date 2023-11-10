<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RaihanPengeluaranpribadi Model
 *
 * @method \App\Model\Entity\RaihanPengeluaranpribadi newEmptyEntity()
 * @method \App\Model\Entity\RaihanPengeluaranpribadi newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\RaihanPengeluaranpribadi[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RaihanPengeluaranpribadi get($primaryKey, $options = [])
 * @method \App\Model\Entity\RaihanPengeluaranpribadi findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\RaihanPengeluaranpribadi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RaihanPengeluaranpribadi[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\RaihanPengeluaranpribadi|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RaihanPengeluaranpribadi saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RaihanPengeluaranpribadi[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\RaihanPengeluaranpribadi[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\RaihanPengeluaranpribadi[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\RaihanPengeluaranpribadi[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RaihanPengeluaranpribadiTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('raihan_pengeluaranpribadi');
        $this->setDisplayField('id_pengeluaran');
        $this->setPrimaryKey('id_pengeluaran');
    }
}
