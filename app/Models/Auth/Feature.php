<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    /**
     * @var boolean
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function action()
    {
        return $this->belongsTo(Action::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_feature');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function featureLogs()
    {
        return $this->hasMany(FeatureLog::class);
    }
}
