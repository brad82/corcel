<?php

/**
 * Corcel\PostMeta
 *
 * @author Junior Grossi <juniorgro@gmail.com>
 */

namespace Corcel\Database\Models;

use Corcel\Database\Collections\PostMetaCollection;

class PostMeta extends Model
{
    protected $table = 'postmeta';
    protected $primaryKey = 'meta_id';
    public $timestamps = false;
    protected $fillable = array('meta_key', 'meta_value', 'post_id');

    /**
     * Post relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo('Corcel\Database\Post');
    }

    /**
     * Override newCollection() to return a custom collection
     *
     * @param array $models
     * @return \Corcel\Database\Collections\PostMetaCollection
     */
    public function newCollection(array $models = array())
    {
        return new PostMetaCollection($models);
    }
}