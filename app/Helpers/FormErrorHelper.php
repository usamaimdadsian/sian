<?php

namespace App\Helpers;


class FormErrorHelper
{

    public static function hasError($errors, $field)
    {
        return ($errors->first($field) != '') ? 'is-invalid' : '';
    }

    public static function showErrors($errors, $field)
    {
        $html = '';
        if ($errors->first($field) != ''):
            foreach ($errors->get($field) as $message):
                $html .= '<div class="invalid-feedback"><i class="fa fa-exclamation-circle fa-fw"></i>' . $message . '</div>';
            endforeach;
        endif;
        return $html;
    }

    public static function showErrorsNotice($errors)
    {
        $html = '';
        if (count($errors) > 0) {
            $html .= '<div class="alert alert-danger">Please fill in the required fields.<ul>';
            foreach ($errors->all() as $message):
                $html .= '<li><span id="name-error" class="help-block help-block-error">' . $message . '</span></li>';
            endforeach;
            $html .= '</ul></div>';
        }
        return $html;
    }

    public static function showOnlyErrorsNotice($errors)
    {
        $html = '';
        if (count($errors) > 0) {
            $html = '<div class="alert alert-danger">Please fill in the required fields.</div>';
        }
        return $html;
    }

}
