<?php

namespace Corcel\Database\Models;

class TermRelationship extends Model
{
    protected $table = 'term_relationships';
    protected $primaryKey = array('object_id', 'term_taxonomy_id');

    public function post()
    {
        return $this->belongsTo('Corcel\Database\Models\Post', 'object_id');
    }

    public function taxonomy()
    {
        return $this->belongsTo('Corcel\Database\Models\TermTaxonomy', 'term_taxonomy_id');
    }
}