```php
<?php
	echo "<div class='form-group'>";
		echo form_label('Texto', 'nome', array('style'=>'font-weight: bold;'));
		echo form_input(array('name'=>'nome', 'class'=>'form-control', 'placeholder'=>'Label'));
		echo form_error('nome');
	echo "</div>";
?>
```
	
```php
<?php
	echo "<div class='form-group'>";
		echo form_label('Senha', 'senha', array('style'=>'font-weight: bold;'));
		echo form_password(array('name'=>'senha', 'class'=>'form-control', 'placeholder'=>'senha'));
		echo form_error('senha');
	echo "</div>";
	?>
```

```php
<?php
	echo "<div class='form-group'>";
		echo form_label('Senha', 'senha', array('style'=>'font-weight: bold;'));
		echo form_password(array('name'=>'senha', 'class'=>'form-control', 'placeholder'=>'senha'));
		echo form_error('senha');
	echo "</div>";
?>
```

```php
	<?php
	echo "<div class='form-group'>";
		echo form_label('Textarea', 'textarea', array('style'=>'font-weight: bold;'));
		echo form_textarea(array('name'=>'textarea', 'class'=>'form-control', 'rows' => 5, 'placeholder'=>'Texto'));
		echo form_error('textarea');
	echo "</div>";
	?>
```

```php
<?php
	echo "<div class='form-group'>";
		echo form_label('Textarea', 'textarea', array('style'=>'font-weight: bold;'));
		echo form_textarea(array('name'=>'textarea', 'class'=>'form-control', 'rows' => 5, 'placeholder'=>'Texto'));
		echo form_error('textarea');
	echo "</div>";
?>
```

```php
<?php
	echo "<div class='form-group'>";
		echo form_label('Upload', 'upload', array('style'=>'font-weight: bold;'));
		echo form_upload(array('name'=>'upload', 'class'=>'span12'));
		echo "<p class='help-block'>Texto de exemplo para download. (jpg, gif, png)</p>";
		echo form_error('upload');
	echo "</div>";
?>
```

```php
<?php
	echo "<div class='form-group'>";
		echo form_label('Upload', 'upload', array('style'=>'font-weight: bold;'));
		echo form_upload(array('name'=>'upload', 'class'=>'span12'));
		echo "<p class='help-block'>Texto de exemplo para download. (jpg, gif, png)</p>";
		echo form_error('upload');
	echo "</div>";
?>
```

```php
<?php
	echo "<div class='checkbox'>";
		echo form_label('Checkbox', 'checkbox', array('style'=>'font-weight: bold;'));
		echo form_checkbox(array('name'=>'checkbox', 'checked' => TRUE));
		echo form_error('checkbox');
	echo "</div>";
	?>
```

```php
<?php
	echo "<div class='checkbox'>";
		echo form_label('Checkbox', 'checkbox', array('style'=>'font-weight: bold;'));
		echo form_checkbox(array('name'=>'checkbox', 'checked' => TRUE));
		echo form_error('checkbox');
	echo "</div>";
?>
```

```php
<?php
	echo "<div class='radio'>";
		echo form_label('Radio', 'radio', array('style'=>'font-weight: bold;'));
		echo form_radio(array('name'=>'radio', 'checked' => TRUE));
		echo form_error('radio');
	echo "</div>";
	?>
```

```php
<?php
	echo "<div class='radio'>";
		echo form_label('Radio', 'radio', array('style'=>'font-weight: bold;'));
		echo form_radio(array('name'=>'radio', 'checked' => TRUE));
		echo form_error('radio');
	echo "</div>";
?>
```

```php
	<?php
		$select = array(
                  '1' => 'Primeiro',
                  '2' => 'Segundo',
                  '3' => 'Terceiro',
                  '4' => 'Quarto'
                );
		echo form_label('Select', 'select', array('style'=>'font-weight: bold;'));
		echo form_dropdown('shirts', $select, '', 'class="form-control"');
		echo form_error('select');
	?>
```

```php
<?php
	$select = array(
              '1' => 'Primeiro',
              '2' => 'Segundo',
              '3' => 'Terceiro',
              '4' => 'Quarto'
            );
	echo form_label('Select', 'select', array('style'=>'font-weight: bold;'));
	echo form_dropdown('shirts', $select, '', 'class="form-control"');
	echo form_error('select');	
?>
```

```php
<?php
	echo form_label('Botões', 'botoes', array('style'=>'font-weight: bold;'));
	echo "<p>".form_button(array('name'=>'botao', 'class'=>'btn btn-default', 'content'=>'Botao'))."</p>";
	echo "<p>".form_reset(array('name'=>'botao', 'class'=>'btn btn-default', 'value'=>'Resetar'))."</p>";
	echo "<p>".form_submit(array('name'=>'botao', 'class'=>'btn btn-default', 'value'=>'Enviar'))."</p>";
?>
```

```php
<?php
	echo form_label('Estilos de Botões', 'botoes', array('style'=>'font-weight: bold;'));
	echo "<p>".form_button(array('name'=>'botao', 'class'=>'btn btn-default', 'content'=>'Botao default'))."</p>";
	echo "<p>".form_button(array('name'=>'botao', 'class'=>'btn btn-default disabled', 'content'=>'Botao disabled'))."</p>";
	echo "<p>".form_button(array('name'=>'botao', 'class'=>'btn btn-info', 'content'=>'Botao info'))."</p>";
	echo "<p>".form_button(array('name'=>'botao', 'class'=>'btn btn-warning', 'content'=>'Botao warning'))."</p>";
	echo "<p>".form_button(array('name'=>'botao', 'class'=>'btn btn-danger', 'content'=>'Botao danger'))."</p>";
	echo "<p>".form_button(array('name'=>'botao', 'class'=>'btn btn-link', 'content'=>'Botao link'))."</p>";

	echo form_close();
?>
```

```php
<?php

	class Boletos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * [boleto_bancoob description]
	 * @return [type] [description]
	 */
	public function boleto_bancoob()
	{	
		$data = array(
				'dados_cliente'  => '',
				'dados_empresa'  => '',
				'dados_boleto'	 => '',	
				'valores_boleto' => ''
			);

		$this->load->helper('My_boleto_bancoob');  
		boleto_bancoob($data['dados_cliente'], $data['dados_empresa'], $data['dados_boleto'], $data['valores_boleto']);
	}
?>
```

```php
<?php

	$this->load->library('email');

	$this->email->from('your@example.com', 'Your Name');
	$this->email->to('someone@example.com'); 
	$this->email->cc('another@another-example.com'); 
	$this->email->bcc('them@their-example.com'); 

	$this->email->subject('Email Test');
	$this->email->message('Testing the email class.');	

	$this->email->send();
?>
```

```php
$config = array(
		    array(
              'field'   => 'name',
              'label'   => 'name', 
              'rules'   => 'required|trim'
            )
        );
```

```php
$this->load->helper('My_Pdf');  
		 
create_pdf('Hello Word');
```

