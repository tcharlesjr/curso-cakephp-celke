<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Artigos Model
 *
 * @property \App\Model\Table\CatsArtigosTable&\Cake\ORM\Association\BelongsTo $CatsArtigos
 *
 * @method \App\Model\Entity\Artigo newEmptyEntity()
 * @method \App\Model\Entity\Artigo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Artigo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Artigo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Artigo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Artigo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Artigo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Artigo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Artigo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Artigo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Artigo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Artigo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Artigo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ArtigosTable extends Table
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

        $this->setTable('artigos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('CatsArtigos', [
            'foreignKey' => 'cats_artigo_id',
            'joinType' => 'INNER',
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
            ->scalar('titulo')
            ->maxLength('titulo', 220)
            ->requirePresence('titulo', 'create')
            ->notEmptyString('titulo');

        $validator
            ->scalar('conteudo')
            ->requirePresence('conteudo', 'create')
            ->notEmptyString('conteudo');

        $validator
            ->scalar('slug')
            ->maxLength('slug', 220)
            ->requirePresence('slug', 'create')
            ->notEmptyString('slug');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['cats_artigo_id'], 'CatsArtigos'), ['errorField' => 'cats_artigo_id']);

        return $rules;
    }
}
