<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CatsArtigos Model
 *
 * @property \App\Model\Table\ArtigosTable&\Cake\ORM\Association\HasMany $Artigos
 *
 * @method \App\Model\Entity\CatsArtigo newEmptyEntity()
 * @method \App\Model\Entity\CatsArtigo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CatsArtigo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CatsArtigo get($primaryKey, $options = [])
 * @method \App\Model\Entity\CatsArtigo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CatsArtigo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CatsArtigo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CatsArtigo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CatsArtigo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CatsArtigo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CatsArtigo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CatsArtigo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CatsArtigo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CatsArtigosTable extends Table
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

        $this->setTable('cats_artigos');
        $this->setDisplayField('nome_cat_artigo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Artigos', [
            'foreignKey' => 'cats_artigo_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome_cat_artigo')
            ->maxLength('nome_cat_artigo', 220)
            ->requirePresence('nome_cat_artigo', 'create')
            ->notEmptyString('nome_cat_artigo');

        return $validator;
    }
}
