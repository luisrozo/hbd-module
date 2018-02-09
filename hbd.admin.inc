<?php
    
    function hbd_configuracion() {
    
        $form['hbd_date'] = array(
            '#title' => 'Fecha de nacimiento',
            '#type' => 'date',
            '#default_value' => variable_get('hbd_date', date("Y-m-d")),
        );
        
        $form['submit'] = array(
            '#type' => 'submit',
            '#value' => 'Guardar configuración',
        );
        
        $form['#submit'][] = 'hbd_configuracion_submit';
        return $form;
    }
    
    
    function hbd_configuracion_validate($form, &$form_state) {
        date_validate($form_state['values']['hbd_date']);
    }
    
    
    function hbd_configuracion_submit($form, $form_state) {
        variable_set('hbd_date', $form_state['values']['hbd_date']);
        drupal_set_message("Se han guardado las opciones de configuración.");
    }
    
?>