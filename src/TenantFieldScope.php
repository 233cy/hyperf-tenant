<?php
declare(strict_types=1);
namespace Database\Tenant;

use Hyperf\Database\Model\Builder;
use Hyperf\Database\Model\Model;
use Hyperf\Database\Model\Scope;

class TenantFieldScope implements Scope
{
    public function apply(Builder $builder, Model $model): Builder
    {
        /**
         * @var TenantField $model 这里的class类其实就是调用的Dao层模型。
         */
        /** @noinspection PhpUnhandledExceptionInspection */
        $tenantId = $model->getTenantIdFun();
        if ($model->getQualifiedTenantIdColumn() === null || $tenantId === null) {
            return $builder;
        }
        return $builder->whereIn($model->getQualifiedTenantIdColumn(), $tenantId);
    }
}
