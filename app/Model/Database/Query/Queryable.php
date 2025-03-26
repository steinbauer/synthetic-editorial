<?php declare(strict_types = 1);

namespace App\Model\Database\Query;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query;

interface Queryable
{

	/**
	 * @return Query<mixed, mixed>
	 */
	public function doQuery(EntityManagerInterface $em): Query;

}
