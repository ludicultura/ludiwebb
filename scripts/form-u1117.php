<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.1.2.344
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Envío de Contacto',
	'heading' => 'Envío de nuevo formulario',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Marcada',
		'checkbox_unchecked' => 'No marcada',
		'submitted_from' => 'Formulario enviado desde el sitio web: %s',
		'submitted_by' => 'Dirección IP del visitante: %s',
		'too_many_submissions' => 'Se han realizado recientemente demasiados envíos a través de esta IP',
		'failed_to_send_email' => 'Error al enviar el correo electrónico',
		'invalid_reCAPTCHA_private_key' => 'Clave privada de reCAPTCHA no válida.',
		'invalid_field_type' => 'Tipo de campo desconocido: %s.',
		'invalid_form_config' => 'El campo \'%s\' contiene una configuración no válida.',
		'unknown_method' => 'Método de solicitud de servidor desconocido'
	),
	'email' => array(
		'from' => 'sonrie@ludicultura.com',
		'to' => 'sonrie@ludicultura.com'
	),
	'fields' => array(
		'custom_U1127' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'NAME',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'NAME\' es obligatorio.'
			)
		),
		'Email' => array(
			'order' => 3,
			'type' => 'email',
			'label' => 'EMAIL',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'EMAIL\' es obligatorio.',
				'format' => 'El campo \'EMAIL\' contiene un correo electrónico no válido.'
			)
		),
		'custom_U1123' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Custom:',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U1133' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'PHONE',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'PHONE\' es obligatorio.'
			)
		)
	)
);

process_form($form);
?>
