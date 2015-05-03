<?php

namespace SprykerFeature\Zed\CategoryExporter\Persistence;

use Propel\Runtime\ActiveQuery\ModelCriteria;
use SprykerEngine\Shared\Locale\Dto\LocaleDto;
use SprykerEngine\Zed\Kernel\Persistence\AbstractQueryContainer;

/**
 * @method CategoryExporterDependencyContainer getDependencyContainer()
 */
class CategoryExporterQueryContainer extends AbstractQueryContainer
{
    /**
     * @param ModelCriteria $query
     * @param LocaleDto $locale
     * @return ModelCriteria
     */
    public function expandCategoryNodeQuery(ModelCriteria $query, LocaleDto $locale)
    {
        return $this->getDependencyContainer()->createCategoryNodeQueryExpander($locale)->expandQuery($query);
    }

    /**
     * @param ModelCriteria $query
     * @param $locale
     * @return ModelCriteria
     */
    public function expandNavigationQuery(ModelCriteria $query, $locale)
    {
        return $this->getDependencyContainer()->createNavigationQueryExpander($locale)->expandQuery($query);
    }
}
