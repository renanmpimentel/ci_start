<div class="container">
	<h2>Alertas</h2>
	<hr />
	<div class="alert">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <strong>Alerta!</strong> mensagem de teste, mensagem de alerta.
	</div>

	<div class="alert alert-error">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <strong>Alerta!</strong> mensagem de teste, mensagem de alerta.
	</div>

	<div class="alert alert-success">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <strong>Alerta!</strong> mensagem de teste, mensagem de alerta.
	</div>

	<div class="alert alert-info">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <strong>Alerta!</strong> mensagem de teste, mensagem de alerta.
	</div>
	
	<hr />

	<h2>Tabelas</h2>
	<hr />
	<h5> Simples </h5>
	<table class="table">
		<thead>
			<tr>
				<th> Coluna 01 </th>
				<th> Coluna 02 </th>
				<th> Coluna 03 </th>
				<th> Coluna 04 </th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td> Registro 01 </td>
				<td> Registro 02 </td>
				<td> Registro 03 </td>
				<td> Registro 04 </td>
			</tr>
			<tr>
				<td> Registro 01 </td>
				<td> Registro 02 </td>
				<td> Registro 03 </td>
				<td> Registro 04 </td>
			</tr>
		</tbody>
	</table>

	<hr />

	<h5> Tabela Listrado </h5>
	<table class="table table-striped">
		<thead>
			<tr>
				<th> Coluna 01 </th>
				<th> Coluna 02 </th>
				<th> Coluna 03 </th>
				<th> Coluna 04 </th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td> Registro 01 </td>
				<td> Registro 02 </td>
				<td> Registro 03 </td>
				<td> Registro 04 </td>
			</tr>
			<tr>
				<td> Registro 01 </td>
				<td> Registro 02 </td>
				<td> Registro 03 </td>
				<td> Registro 04 </td>
			</tr>
		</tbody>
	</table>

	<hr />

	<h5> Tabela Hover </h5>
	<table class="table table-hover">
		<thead>
			<tr>
				<th> Coluna 01 </th>
				<th> Coluna 02 </th>
				<th> Coluna 03 </th>
				<th> Coluna 04 </th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td> Registro 01 </td>
				<td> Registro 02 </td>
				<td> Registro 03 </td>
				<td> Registro 04 </td>
			</tr>
			<tr>
				<td> Registro 01 </td>
				<td> Registro 02 </td>
				<td> Registro 03 </td>
				<td> Registro 04 </td>
			</tr>
		</tbody>
	</table>

	<hr />

	<h5> Tabela Alertas </h5>

	<table class="table">
		<thead>
			<tr>
				<th> Coluna 01 </th>
				<th> Coluna 02 </th>
				<th> Coluna 03 </th>
				<th> Coluna 04 </th>
			</tr>
		</thead>
		<tbody>
			<tr class="success">
				<td> Registro 01 </td>
				<td> Registro 02 </td>
				<td> Registro 03 </td>
				<td> Registro 04 </td>
			</tr>
			<tr class="error">
				<td> Registro 01 </td>
				<td> Registro 02 </td>
				<td> Registro 03 </td>
				<td> Registro 04 </td>
			</tr>
			<tr class="warning">
				<td> Registro 01 </td>
				<td> Registro 02 </td>
				<td> Registro 03 </td>
				<td> Registro 04 </td>
			</tr>
			<tr class="info">
				<td> Registro 01 </td>
				<td> Registro 02 </td>
				<td> Registro 03 </td>
				<td> Registro 04 </td>
			</tr>
		</tbody>
	</table>

	<hr />

	<h2>Formulário com CI </h2>
	<hr />

	<?php
	echo form_open('', '');

	echo "<h4>Input</h4>";
	echo form_label('Texto', 'nome', array('style'=>'font-weight: bold;'));
	echo form_input(array('name'=>'nome', 'class'=>'span12', 'placeholder'=>'Label'));
	echo form_error('nome');
	?>
	<br /><br />
	<small>Código</small>
	<pre>
&lt;?php
	echo form_label('Texto', 'nome', array('style'=>'font-weight: bold;'));
	echo form_input(array('name'=>'nome', 'class'=>'span12', 'placeholder'=>'Label'));
	echo form_error('nome');
?&gt;
	</pre>
	
	<hr />

	<?php
	echo form_label('Senha', 'senha', array('style'=>'font-weight: bold;'));
	echo form_password(array('name'=>'senha', 'class'=>'span12', 'placeholder'=>'senha'));
	echo form_error('senha');
	?>
	<br /><br />
	<small>Código</small>
	<pre>
&lt;?php
	echo form_label('Senha', 'senha', array('style'=>'font-weight: bold;'));
	echo form_password(array('name'=>'senha', 'class'=>'span12', 'placeholder'=>'senha'));
	echo form_error('senha');
?&gt;
	</pre>

	<hr />
	<?php
	echo form_label('Textarea', 'textarea', array('style'=>'font-weight: bold;'));
	echo form_textarea(array('name'=>'textarea', 'class'=>'span12', 'placeholder'=>'Texto'));
	echo form_error('textarea');
	?>
	<br /><br />
	<small>Código</small>
	<pre>
&lt;?php
	echo form_label('Textarea', 'textarea', array('style'=>'font-weight: bold;'));
	echo form_textarea(array('name'=>'textarea', 'class'=>'span12', 'placeholder'=>'Texto'));
	echo form_error('textarea');
?&gt;
	</pre>

	<hr />

	<?php
	echo form_label('Upload', 'upload', array('style'=>'font-weight: bold;'));
	echo form_upload(array('name'=>'upload', 'class'=>'span12'));
	echo form_error('upload');
	?>
	<br /><br />
	<small>Código</small>
	<pre>
&lt;?php
	echo form_label('Upload', 'upload', array('style'=>'font-weight: bold;'));
	echo form_upload(array('name'=>'upload', 'class'=>'span12'));
	echo form_error('upload');
?&gt;
	</pre>
	<hr />

	<?php
	echo form_label('Checkbox', 'checkbox', array('style'=>'font-weight: bold;'));
	echo form_checkbox(array('name'=>'checkbox', 'class'=>'', 'checked' => TRUE));
	echo form_error('checkbox');	
	?>
	<br /><br />
	<small>Código</small>
	<pre>
&lt;?php
	echo form_label('Checkbox', 'checkbox', array('style'=>'font-weight: bold;'));
	echo form_checkbox(array('name'=>'checkbox', 'class'=>'', 'checked' => TRUE));
	echo form_error('checkbox');	
?&gt;
	</pre>

	<hr />

	<?php
	echo form_label('Radio', 'radio', array('style'=>'font-weight: bold;'));
	echo form_radio(array('name'=>'radio', 'class'=>'', 'checked' => TRUE));
	echo form_error('radio');	
	?>
	<br /><br />
	<small>Código</small>
	<pre>
&lt;?php
	echo form_label('Radio', 'radio', array('style'=>'font-weight: bold;'));
	echo form_radio(array('name'=>'radio', 'class'=>'', 'checked' => TRUE));
	echo form_error('radio');	
?&gt;
	</pre>
		
	<hr />

	<?php
	$select = array(
                  '1' => 'Primeiro',
                  '2' => 'Segundo',
                  '3' => 'Terceiro',
                  '4' => 'Quarto'
                );

	echo form_label('Select', 'select', array('style'=>'font-weight: bold;'));
	echo form_dropdown('shirts', $select);
	echo form_error('select');		
	?>
	<br /><br />
	<small>Código</small>
	<pre>
&lt;?php
	$select = array(
              '1' => 'Primeiro',
              '2' => 'Segundo',
              '3' => 'Terceiro',
              '4' => 'Quarto'
            );
	echo form_label('Select', 'select', array('style'=>'font-weight: bold;'));
	echo form_dropdown('shirts', $select);
	echo form_error('select');	
?&gt;
	</pre>

	<hr />

	<?php
	echo form_label('Botões', 'botoes', array('style'=>'font-weight: bold;'));
	echo "<p>".form_button(array('name'=>'botao', 'class'=>'btn', 'content'=>'Botao'))."</p>";
	echo "<p>".form_reset(array('name'=>'botao', 'class'=>'btn', 'value'=>'Resetar'))."</p>";
	echo "<p>".form_submit(array('name'=>'botao', 'class'=>'btn', 'value'=>'Enviar'))."</p>";
	?>

	<hr />

	<?php
	echo form_label('Estilos de Botões', 'botoes', array('style'=>'font-weight: bold;'));
	echo "<p>".form_button(array('name'=>'botao', 'class'=>'btn btn-info', 'content'=>'Botao'))."</p>";
	echo "<p>".form_button(array('name'=>'botao', 'class'=>'btn btn-warning', 'content'=>'Botao'))."</p>";
	echo "<p>".form_button(array('name'=>'botao', 'class'=>'btn btn-danger', 'content'=>'Botao'))."</p>";
	echo "<p>".form_button(array('name'=>'botao', 'class'=>'btn btn-inverse', 'content'=>'Botao'))."</p>";
	echo "<p>".form_button(array('name'=>'botao', 'class'=>'btn btn-pnk', 'content'=>'Botao'))."</p>";

	echo form_close();
	?>

	<h2>Boletos com BoletoPHP (Helper)</h2>
	<hr />

	<ul>
		<li><a href="<?php echo base_url('boletos/boleto_bancoob') ?>" target="_blank"> Banco Bancoob</a></li>
		<li><a href="<?php echo base_url('boletos/boleto_banespa') ?>" target="_blank"> Banco Banespa</a></li>
		<li><a href="<?php echo base_url('boletos/boleto_benestes') ?>" target="_blank"> Banco Benestes</a></li>
		<li><a href="<?php echo base_url('boletos/boleto_bb') ?>" target="_blank"> Banco Banco do Brasil</a></li>
		<li><a href="<?php echo base_url('boletos/boleto_besc') ?>" target="_blank"> Banco Besc</a></li>
		<li><a href="<?php echo base_url('boletos/boleto_bradesco') ?>" target="_blank"> Banco Bradesco</a></li>
		<li><a href="<?php echo base_url('boletos/boleto_cef') ?>" target="_blank"> Banco Caixa Economica</a></li>
		<li><a href="<?php echo base_url('boletos/boleto_cef_sigcb') ?>" target="_blank"> Banco Caixa Economica SIGCB</a></li>
		<li><a href="<?php echo base_url('boletos/boleto_cef_sinco') ?>" target="_blank"> Banco Caixa Economica SINCO</a></li>
		<li><a href="<?php echo base_url('boletos/boleto_hsbc') ?>" target="_blank"> Banco HSBC</a></li>
		<li><a href="<?php echo base_url('boletos/boleto_itau') ?>" target="_blank"> Banco Itau</a></li>
		<li><a href="<?php echo base_url('boletos/boleto_real') ?>" target="_blank"> Banco Real</a></li>
		<li><a href="<?php echo base_url('boletos/boleto_santander_banespa') ?>" target="_blank"> Banco Santander Banespa</a></li>
		<li><a href="<?php echo base_url('boletos/boleto_sicredi') ?>" target="_blank"> Banco Sicredi</a></li>
		<li><a href="<?php echo base_url('boletos/boleto_sudameris') ?>" target="_blank"> Banco Sudameris</a></li>
		<li><a href="<?php echo base_url('boletos/boleto_unibanco') ?>" target="_blank"> Banco Unibanco</a></li>
	</ul>

	<small>Código</small>
	<pre>
&lt;?php

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
?&gt;
	</pre>

	<h2>Enviando Email</h2>
	<hr />
	<small>Código</small>
	<pre>
&lt;?php

	$this->load->library('email');

	$this->email->from('your@example.com', 'Your Name');
	$this->email->to('someone@example.com'); 
	$this->email->cc('another@another-example.com'); 
	$this->email->bcc('them@their-example.com'); 

	$this->email->subject('Email Test');
	$this->email->message('Testing the email class.');	

	$this->email->send();
?&gt;
	</pre>
	<small><a href="http://ellislab.com/codeigniter/user-guide/libraries/email.html">Documentação do Email</a></small>

	<h2>Form Validation - application/config/form_validation.php</h2>
	<hr />
	<small>Código</small>
	<pre>
$config = array(
		    array(
              'field'   => 'name',
              'label'   => 'name', 
              'rules'   => 'required|trim'
            )
        );
	</pre>
	<small><a href="http://ellislab.com/codeigniter/user-guide/libraries/form_validation.html">Documentação do Form Validation</a></small>

	<h2>Criar PDF (MPDF)</h2>
	<hr />
	<small>Código</small>
	<pre>
$this->load->helper('My_Pdf');  
		 
create_pdf('Hello Word');
	</pre>

</div>
