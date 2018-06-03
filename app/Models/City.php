<?php

namespace App\Models;

use Cache;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @var array
     */
    protected $cities;

    /**
     * Get the cities from the JSON file, if it hasn't already been loaded.
     *
     * @return array
     */
    public function getCities(): array
    {
        if (empty($this->cities)) {
            $this->cities = json_decode(file_get_contents(database_path('seeds/data/cities.json')), true);
        }

        return $this->cities;
    }

    /**
     * Returns a list of cities suitable to use with a select element in Laravelcollective\html
     *
     * @param string sort
     * @return array
     */
    public function getListForSelect(): array
    {
        $cities = Cache::remember('cities_data', 5, function () {
            return City::orderBy('name')->pluck('name', 'id')->toArray();
        });

        return $cities;
    }
}
