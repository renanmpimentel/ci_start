<div class="container">
	<h2>Alertas</h2>
	<hr />
	<div class="alert alert-warning">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <strong>Alerta!</strong> mensagem de teste, mensagem de alerta.
	</div>

	<div class="alert alert-danger">
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
			<tr class="danger">
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
			<tr class="active">
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
	$options = array('role' => 'form');
	echo form_open('', $options);

	echo "<h4>Input</h4>";
	echo "<div class='form-group'>";
		echo form_label('Texto', 'nome', array('style'=>'font-weight: bold;'));
		echo form_input(array('name'=>'nome', 'class'=>'form-control', 'placeholder'=>'Label'));
		echo form_error('nome');
	echo "</div>";
	?>
	<br />
	<small>Código</small>
	<pre>
&lt;?php
	echo "&lt;div class='form-group'&gt;";
		echo form_label('Texto', 'nome', array('style'=>'font-weight: bold;'));
		echo form_input(array('name'=>'nome', 'class'=>'form-control', 'placeholder'=>'Label'));
		echo form_error('nome');
	echo "&lt;/div&gt;";
?&gt;
	</pre>
	
	<hr />

	<?php
	echo "<div class='form-group'>";
		echo form_label('Senha', 'senha', array('style'=>'font-weight: bold;'));
		echo form_password(array('name'=>'senha', 'class'=>'form-control', 'placeholder'=>'senha'));
		echo form_error('senha');
	echo "</div>";
	?>
	<br />
	<small>Código</small>
	<pre>
&lt;?php
	echo "&lt;div class='form-group'&gt;";
		echo form_label('Senha', 'senha', array('style'=>'font-weight: bold;'));
		echo form_password(array('name'=>'senha', 'class'=>'form-control', 'placeholder'=>'senha'));
		echo form_error('senha');
	echo "&lt;/div&gt;";
?&gt;
	</pre>

	<hr />
	<?php
	echo "<div class='form-group'>";
		echo form_label('Textarea', 'textarea', array('style'=>'font-weight: bold;'));
		echo form_textarea(array('name'=>'textarea', 'class'=>'form-control', 'rows' => 5, 'placeholder'=>'Texto'));
		echo form_error('textarea');
	echo "</div>";
	?>
	<br />
	<small>Código</small>
	<pre>
&lt;?php
	echo "&lt;div class='form-group'&gt;";
		echo form_label('Textarea', 'textarea', array('style'=>'font-weight: bold;'));
		echo form_textarea(array('name'=>'textarea', 'class'=>'form-control', 'rows' => 5, 'placeholder'=>'Texto'));
		echo form_error('textarea');
	echo "&lt;/div&gt;";
?&gt;
	</pre>

	<hr />

	<?php
	echo "<div class='form-group'>";
		echo form_label('Upload', 'upload', array('style'=>'font-weight: bold;'));
		echo form_upload(array('name'=>'upload', 'class'=>'span12'));
		echo "<p class='help-block'>Texto de exemplo para download. (jpg, gif, png)</p>";
		echo form_error('upload');
	echo "</div>";
	?>
	<br />
	<small>Código</small>
	<pre>
&lt;?php
	echo "&lt;div class='form-group'&gt;";
		echo form_label('Upload', 'upload', array('style'=>'font-weight: bold;'));
		echo form_upload(array('name'=>'upload', 'class'=>'span12'));
		echo "&lt;p class='help-block'&gt;Texto de exemplo para download. (jpg, gif, png)&lt;/p&gt;";
		echo form_error('upload');
	echo "&lt;/div&gt;";
?&gt;
	</pre>
	<hr />

	<?php
	echo "<div class='checkbox'>";
		echo form_label('Checkbox', 'checkbox', array('style'=>'font-weight: bold;'));
		echo form_checkbox(array('name'=>'checkbox', 'checked' => TRUE));
		echo form_error('checkbox');
	echo "</div>";
	?>
	<br />
	<small>Código</small>
	<pre>
&lt;?php
	echo "&lt;div class='checkbox'&gt;";
		echo form_label('Checkbox', 'checkbox', array('style'=>'font-weight: bold;'));
		echo form_checkbox(array('name'=>'checkbox', 'checked' => TRUE));
		echo form_error('checkbox');
	echo "&lt;/div&gt;";
?&gt;
	</pre>

	<hr />

	<?php
	echo "<div class='radio'>";
		echo form_label('Radio', 'radio', array('style'=>'font-weight: bold;'));
		echo form_radio(array('name'=>'radio', 'checked' => TRUE));
		echo form_error('radio');
	echo "</div>";
	?>
	<br />
	<small>Código</small>
	<pre>
&lt;?php
	echo "&lt;div class='radio'&gt;";
		echo form_label('Radio', 'radio', array('style'=>'font-weight: bold;'));
		echo form_radio(array('name'=>'radio', 'checked' => TRUE));
		echo form_error('radio');
	echo "&lt;/div&gt;";
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
		echo form_dropdown('shirts', $select, '', 'class="form-control"');
		echo form_error('select');
	?>
	<br />
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
	echo form_dropdown('shirts', $select, '', 'class="form-control"');
	echo form_error('select');	
?&gt;
	</pre>

	<hr />

	<?php
	echo form_label('Botões', 'botoes', array('style'=>'font-weight: bold;'));
	echo "<p>".form_button(array('name'=>'botao', 'class'=>'btn btn-default', 'content'=>'Botao'))."</p>";
	echo "<p>".form_reset(array('name'=>'botao', 'class'=>'btn btn-default', 'value'=>'Resetar'))."</p>";
	echo "<p>".form_submit(array('name'=>'botao', 'class'=>'btn btn-default', 'value'=>'Enviar'))."</p>";
	?>

	<hr />

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
	<br />
	<hr />
	<h2>Modal</h2>
	  <a data-toggle="modal" href="#modal" class="btn btn-primary btn-lg">Abrir modal</a>

	  <!-- Modal -->
	<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Título do Modal</h4>
				</div>
				<div class="modal-body">
					Texto do modal
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-primary">Salvar</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<hr />

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