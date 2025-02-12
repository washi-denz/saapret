<?php

namespace App\Traits;

trait searchable
{
    /**
     * Replaces spaces with full text search wildcards
     *
     * @param string $term
     * @return string
     */
    protected function fullTextWildcards($term)
    {
        // removing symbols used by MySQL
        $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
        $term = str_replace($reservedSymbols, '', $term);

        $words = explode(' ', trim($term));

        foreach ($words as $key => $word) {
            /*
             * applying + operator (required word) only big words
             * because smaller ones are not indexed by mysql
             */
            if (strlen($word) >= 3) {
                //$words[$key] = '+' . $word . '*';
                $words[$key] = '' . $word . '*';
            }
        }

        $searchTerm = implode(' ', $words);

        return $searchTerm;
    }

    /**
     * Scope a query that matches a full text search of term.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $term
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $term)
    {
        $columns = implode(',', $this->searchable);

        //dd($term);
        $query->whereRaw("MATCH ({$columns}) AGAINST ('" . $this->fullTextWildcards($term) . "' IN BOOLEAN MODE)");
        //$query->whereRaw("MATCH({$columns}) AGAINST (‘" . $this->fullTextWildcards($term) . "’) as Relevance FROM books WHERE MATCH ({$columns}) AGAINST(‘" . $this->fullTextWildcards($term) . "’ IN BOOLEAN MODE)")->orderBy('Relevance', 'DESC');


        return $query;
    }
}
