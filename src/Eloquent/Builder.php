<?php

namespace Microtriangle\ORM\Eloquent;

use Illuminate\Container\Container;
use Illuminate\Database\Query\Builder as EloquentBuilder;
use PromoMail\Paginate\HtmlPaginator;

/**
 * QueryBuilder Class
 *
 * @package Microtriangle\ERP\Framework
 */
class Builder extends EloquentBuilder {

	/**
	 * Add an exists clause to the query.
	 *
	 * @param  \Illuminate\Database\Query\Builder $query
	 * @param  string $boolean
	 * @param  bool $not
	 *
	 * @return $this
	 */
	public function addWhereExistsQuery( EloquentBuilder $query, $boolean = 'and', $not = false ) {

		$type = $not ? 'NotExists' : 'Exists';

		$this->wheres[] = compact( 'type', 'query', 'boolean' );

		$this->addBinding( $query->getBindings(), 'where' );

		return $this;
	}

	/**
	 * Create a new length-aware paginator instance.
	 *
	 * @param  \Illuminate\Support\Collection $items
	 * @param  int $total
	 * @param  int $perPage
	 * @param  int $currentPage
	 * @param  array $options
	 *
	 * @return \Illuminate\Pagination\LengthAwarePaginator
	 */
	protected function paginator( $items, $total, $perPage, $currentPage, $options ) {
//		return Container::getInstance()->makeWith( HtmlPaginator::class, compact(
//			'items', 'total', 'perPage', 'currentPage', 'options'
//		) );
	}

}
