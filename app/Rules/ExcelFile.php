<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ExcelFile implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $ext = request()->file('farmers') ?
            request()->file('farmers')->getClientOriginalExtension() :
            false;

        return in_array($ext,['csv']);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Only csv file is valid.';
    }
}
