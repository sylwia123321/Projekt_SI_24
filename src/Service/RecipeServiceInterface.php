<?php
/**
 * Recipe service interface.
 */

namespace App\Service;

use App\Entity\Recipe;
use App\Entity\User;
use Knp\Component\Pager\Pagination\PaginationInterface;

/**
 * Interface RecipeServiceInterface.
 */
interface RecipeServiceInterface
{
    /**
     * Get paginated list.
     *
     * @param int $page Page number
     *
     * @return PaginationInterface<string, mixed> Paginated list
     */
    public function getPaginatedList(int $page, ?User $author, ?int $categoryId, ?int $tagId): PaginationInterface;


    /**
     * Save entity.
     *
     * @param Recipe $recipe Recipe entity
     */
    public function save(Recipe $recipe): void;

    /**
     * Delete entity.
     *
     * @param Recipe $recipe Recipe entity
     */
    public function delete(Recipe $recipe): void;

    /**
     * @param int $page
     * @param int|null $categoryId
     * @param int|null $tagId
     * @return PaginationInterface
     */
    public function getAllPaginatedList(int $page, ?int $categoryId, ?int $tagId): PaginationInterface;
}