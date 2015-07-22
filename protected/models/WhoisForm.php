<?php

class WhoisForm extends CFormModel
{
	public $domain;

	public function rules()
	{
		return array(
			array('domain','required'),
            array('domain', 'match', 'pattern' => '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/')
				);
	}

}