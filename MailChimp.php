<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Image picker widget
 *
 * @author  	James Doyle
 * @package		PyroCMS
 */
class Widget_MailChimp extends Widgets
{


	/**
	 * The widget title
	 *
	 * @var array
	 */
	public $title = 'MailChimp Form';

	/**
	 * The translations for the widget description
	 *
	 * @var array
	 */
	public $description = array(
		'en' => 'Display a MailChimp signup form on your site'
		// ,
		// 'el' => 'Δημιουργήστε περιοχές με δικό σας κώδικα HTML',
		// 'br' => 'Permite criar blocos de HTML customizados',
		// 'pt' => 'Permite criar blocos de HTML customizados',
		// 'nl' => 'Maak blokken met maatwerk HTML',
		// 'ru' => 'Создание HTML-блоков с произвольным содержимым',
		// 'id' => 'Membuat blok HTML apapun',
		// 'fi' => 'Luo lohkoja omasta HTML koodista',
		// 'fr' => 'Créez des blocs HTML personnalisés',
		);

	/**
	 * The author of the widget
	 *
	 * @var string
	 */
	public $author = 'James Doyle';

	/**
	 * The author's website.
	 *
	 * @var string
	 */
	public $website = 'http://ohdoylerules.com/';

	/**
	 * The version of the widget
	 *
	 * @var string
	 */
	public $version = '1.0';

	/**
	 * The fields for customizing the options of the widget.
	 *
	 * @var array
	 */
	public $fields = array(
		array(
			'field' => 'form_action',
			'label' => 'Form Action',
			'rules' => 'required'
			),
		array(
			'field' => 'email_placeholder',
			'label' => 'Email Placeholder Text',
			'rules' => 'required'
			),
		array(
			'field' => 'submit_value',
			'label' => 'Submit Button Text',
			'rules' => 'required'
			),
		array(
			'field' => 'hidden_value',
			'label' => 'Hidden Field Value',
			'rules' => 'required'
			),
		);

	public function form($options)
	{
		return array(
			'options' => $options
			);
	}

	/**
	 * The main function of the widget.
	 *
	 * @param array $options The options for displaying an HTML widget.
	 * @return array
	 */
	public function run($options) {
		// Store the feed items
		return array(
			'form_action' => empty($options['form_action']) ? '': $options['form_action'],
			'email_placeholder' => empty($options['email_placeholder']) ? '': $options['email_placeholder'],
			'submit_value' => empty($options['submit_value']) ? '': $options['submit_value'],
			'hidden_value' => empty($options['hidden_value']) ? '': $options['hidden_value']
			);
	}

}
