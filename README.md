#Codeigniter com Twitter Bootstrap 3

## Como usar ?

#### Faça um clone para sua máquina:

`git clone https://github.com/renanmpimentel/ci_start.git`

#### Edite o arquivo de banco de dados:
	
`application/config/database.php`

#### Coloque seus dados de banco de dados:

```php
	$db['default']['hostname'] = 'localhost';
	$db['default']['username'] = 'user';
	$db['default']['password'] = 'password';
	$db['default']['database'] = '';
	$db['default']['dbdriver'] = 'mysql';
```

#### Pré-Configurações


As configurações aqui colocadas são apenas para estudos, recomendo a consulta na documentação oficial do Codeigniter.

No arquivo `application/config/autoload.php`, temos: 

```php
//Carrega as bibliotecas do Banco de Dados, de Sessão do Codeigniter e validação de formulários
$autoload['libraries'] = array('database', 'session', 'form_validation');

//Carrega os helpers de URL e para gerar formulários
$autoload['helper'] = array('url', 'form');

//Carrega a configuração de form_validation no autoload
$autoload['config'] = array('form_validation');
```

No arquivo `application/config/config.php`, temos:

```php
//Carrega a tradução das mensagens
$config['language']	= 'portuguese-br';

//Criar um chave para criptografar sessões e etc
$config['encryption_key'] = '[ENCRYPTION_KEY]';
```

### Para criar formulário, usando o `helper form`

##### Input Text

```php
<?php
echo "<div class='form-group'>";
	echo form_label('Texto', 'nome');
	echo form_input(array(
							'name'=>'nome', 
							'class'=>'form-control', 
							'placeholder'=>'Label'
						)
					);
	echo form_error('nome');
echo "</div>";
?>
```

##### Input Password

```php
<?php
echo "<div class='form-group'>";
	echo form_label('Senha', 'senha');
	echo form_password(array(
								'name'=>'senha', 
								'class'=>'form-control', 
								'placeholder'=>'senha'
							)
						);
	echo form_error('senha');
echo "</div>";
?>
```

##### Input Textarea 

```php
<?php
echo "<div class='form-group'>";
	echo form_label('Textarea', 'textarea');
	echo form_textarea(array(
								'name'=>'textarea', 
								'class'=>'form-control', 
								'rows' => 5, 
								'placeholder'=>'Texto'));
	echo form_error('textarea');
echo "</div>";
?>
```

##### Input upload

```php
<?php
echo "<div class='form-group'>";
	echo form_label('Upload', 'upload');
	echo form_upload(array(
							'name'=>'upload', 
							'class'=>'span12'
							)
						);
	echo "<p class='help-block'>Texto de exemplo para download. (jpg, gif, png)</p>";
	echo form_error('upload');
echo "</div>";
?>
```
##### Input Checkbox

```php
<?php
echo "<div class='checkbox'>";
	echo form_label('Checkbox', 'checkbox');
	echo form_checkbox(array(
								'name'=>'checkbox', 
								'checked' => TRUE
							)
						);
	echo form_error('checkbox');
echo "</div>";
?>
```

##### Input Radio

```php
<?php
echo "<div class='radio'>";
	echo form_label('Radio', 'radio');
	echo form_radio(array(
							'name'=>'radio', 
							'checked' => TRUE
						)
					);
	echo form_error('radio');
echo "</div>";
?>
```

##### Select

```php
<?php
	$select = array(
              '1' => 'Primeiro',
              '2' => 'Segundo',
              '3' => 'Terceiro',
              '4' => 'Quarto'
            );
	echo form_label('Select', 'select');
	echo form_dropdown('shirts', $select, '', 'class="form-control"');
	echo form_error('select');
?>
```

##### Button

```php
<?php
	echo form_label('Botões', 'botoes');
	echo form_button(array(
									'name'=>'botao', 
									'class'=>'btn btn-default', 
									'content'=>'Botao'
								)
							);
?>
```

-------------------

#### Usando o `form_validation`:

##### Editando o arquivo responsavel pela regra de negocio: `application/config/form_validation.php`

    'form' => nome da regra de validação
    'field' => nome do campo
    'label' => nome do campo no output ( Ex.: O campo %s é obrigatório - %s é o "label")
    'rules' => ver todas regras no link abaixo

[Rule Reference](http://ellislab.com/codeigniter/user-guide/libraries/form_validation.html#rulereference)

```php
$config = array(
				'form' => 
			  		array(
						    array(
						          'field'   => 'field_01',
						          'label'   => 'label_01', 
						          'rules'   => 'required'
						        ),
						    array(
						          'field'   => 'field_02',
						          'label'   => 'label_02', 
						          'rules'   => 'required'
						        )
			   			)      
				);
``` 

##### Na prática
Exemplo básico:

```php
<?php
/**
 * [validarFormulario description]
 * @return [type] [description]
 */
public function validarFormulario()
{
	$this->form_validation->config_rules = array();
    $this->form_validation->error_array = array();

    //Carrega regra de negocio criado no form_validation.php
    $this->form_validation->set_rules( $this->config->item('form') );

    if ($this->form_validation->run() == FALSE) {
    	// NÃO PASSOU NA VALIDAÇÃO
    } else {
    	// PASSOU NA VALIDAÇÃO
    }
}

?>
```

-------------------

##### Criando Boleto, usando helper `My_boleto_*`

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

-------------------

##### Crie um arquivo `email.php` em `application/config/`

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
-------------------

##### Criando PDF usando o helper `my_pdf_helper`

```php
<?php
	$this->load->helper('My_Pdf');  
			 
	create_pdf('Hello Word');
?>
```

