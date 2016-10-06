<?php

// array(
//         'type'  => 'text',
//         'id'    => 'id',
//         'class' => '',
//         'name'  => 'name',
//         'label' => '',
//         'value' => '',
//         'placeholder' => '',
//     ),

function generate_form_html($structure, $action = '', $method = 'POST') {
    $html = '<div class="well clearfix">';
    $html.= '<form method="' . $method . '" action="'.$action . '">';

    foreach ($structure as $field) {
        switch ($field['type']) {
            case 'text':
                $html.= generate_input_html($field);
                break;
            case 'submit':
                $html.= generate_button_html($field);
                break;
        }
    }

    $html.= '</form>';
    $html.= '</div>';

    return $html;
}

function generate_input_html($input) {
    if (empty($input['id'])) {
        var_dump('error_id_required');
        return;
    }

    if (empty($input['name'])) {
        $input['name'] = $input['id'];
    }

    if (empty($input['placeholder'])) {
        $input['placeholder'] = '';
    }


    $html = '<div class="form-group">';

    if (!empty($input['label'])) {
        $html.= '<label for="' . $input['name'] . '">' . $input['label'] . '</label>';
    }

    $html.= '<input type="'        . $input['type']        . '"
                     name="'        . $input['name']        . '"
                     id="'          . $input['id']          . '"
                     class="'       . $input['class']       . '"
                     placeholder="' . $input['placeholder'] . '"
                     value="'       . $input['value']       . '">';

    $html.= '</div>';

    return $html;
}

function generate_select_html($select) {

}

function generate_checkbox_html($checkbox) {

}

function generate_button_html($button) {
    return '<button type="' . $button['type'] . '" class="' . $button['class'] . '">' . $button['value'] . '</button>';
}