<?php

namespace App\Traits;

use App\Models\Translation;
use Illuminate\Database\Eloquent\Builder;

trait Translatable
{
    /**
     * Check if this model can translate.
     *
     * @return bool
     */
    public function translatable()
    {
        if (isset($this->translatable) && $this->translatable == false) {
            return false;
        }

        return !empty($this->getTranslatableAttributes());
    }

    /**
     * Load translations relation.
     *
     * @return mixed
     */
    public function translations()
    {
        return $this->hasMany(Translation::class, 'foreign_key', $this->getKeyName())
            ->where('table_name', $this->getTable())
            ->whereIn('locale', config('translation.locales', []));
    }

    /**
     * This scope eager loads the translations for the default and the fallback locale only.
     *
     * @param Builder     $query
     * @param string|null $locale
     * @param string|bool $fallback
     */
    public function scopeWithTranslation(Builder $query, $locale = null, $fallback = true)
    {
        if (is_null($locale)) {
            $locale = app()->getLocale();
        }

        if ($fallback === true) {
            $fallback = config('app.fallback_locale', 'en');
        }

        $query->with(['translations' => function ($query) use ($locale, $fallback) {
            $query->where(function ($q) use ($locale, $fallback) {
                $q->where('locale', $locale);

                if ($fallback !== false) {
                    $q->orWhere('locale', $fallback);
                }
            });
        }]);
    }

    /**
     * Get a single translated attribute.
     *
     * @param $attribute
     * @param null $language
     * @param bool $fallback
     *
     * @return null
     */
    public function getTranslatedAttribute($attribute, $language = null, $fallback = true)
    {
        if (!config('translation.enabled')) {
            return $this->getAttributeValue($attribute);
        }

        list($value) = $this->getTranslatedAttributeMeta($attribute, $language, $fallback);

        return $value;
    }

    public function getTranslatedAttributeMeta($attribute, $locale = null, $fallback = true)
    {
        if (!in_array($attribute, $this->getTranslatableAttributes())) {
            return [$this->getAttribute($attribute), config('translation.default'), false];
        }

        if (is_null($locale)) {
            $locale = app()->getLocale();
        }

        if ($fallback === true) {
            $fallback = config('app.fallback_locale', 'en');
        }

        $default = config('translation.default');

        if ($default == $locale) {
            return [$this->getAttribute($attribute), $default, true];
        }

        if (!$this->relationLoaded('translations')) {
            $this->load('translations');
        }

        $translations = $this->getRelation('translations')
            ->where('column_name', $attribute);

        $localeTranslation = $translations->where('locale', $locale)->first();

        if ($localeTranslation) {
            return [$localeTranslation->value, $locale, true];
        }

        if ($fallback == $locale) {
            return [$this->getAttribute($attribute), $locale, false];
        }

        if ($fallback == $default) {
            return [$this->getAttribute($attribute), $locale, false];
        }

        $fallbackTranslation = $translations->where('locale', $fallback)->first();

        if ($fallbackTranslation && $fallback !== false) {
            return [$fallbackTranslation->value, $locale, true];
        }

        return [null, $locale, false];
    }

    /**
     * Get attributes that can be translated.
     *
     * @return array
     */
    public function getTranslatableAttributes()
    {
        return property_exists($this, 'translatable') ? $this->translatable : [];
    }
}
