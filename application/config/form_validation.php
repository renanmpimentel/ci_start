<?php
// required            
// Retorna FALSE se o elemento do formulário está vazio.

// matches             
// Retorna FALSE se o elemento do formulário não corresponde a um no parâmetro.                                    
// matches[form_item]

// is_unique           
// Retorna FALSE se o elemento do formulário não é exclusivo para a tabela e nome do campo no parâmetro.           
// is_unique[table.field]

// min_length          
// Retorna FALSE se o elemento do formulário é menor, então o valor do parâmetro.                                  
// min_length[6]

// max_length          
// Retorna FALSE se o elemento do formulário é maior, então o valor do parâmetro                                   
// max_length[12]

// exact_length        
// Retorna FALSE se o elemento de formulário não é exatamente o valor do parâmetro.                                
// exact_length[8]

// greater_than       
// Retorna FALSE se o elemento de forma é menor do que o valor do parâmetro ou não numérico.                       
// greater_than[8]

// less_than          
// Retorna FALSE se o elemento de formulário é maior do que o valor do parâmetro ou não numérico.                  l
// ess_than[8]

// alpha               
// Retorna FALSE se o elemento de formulário contém outra coisa senão caracteres alfabéticos.  

// alpha_numeric       
// Retorna FALSE se o elemento de formulário contém outra coisa senão caracteres alfa-numéricos.     

// alpha_dash          
// Retorna FALSE se o elemento de formulário contém qualquer coisa que não caracteres alfanuméricos, sublinhados ou traços.  

// numeric             
// Retorna FALSE se o elemento de formulário contém outra coisa senão caracteres numéricos.   

// integer             
// Retorna FALSE se o elemento de formulário contém qualquer coisa que não seja um número inteiro.   

// decimal             
// Retorna FALSE se o elemento de formulário não é exatamente o valor do parâmetro.    

// is_natural          
// Retorna FALSE se o elemento de formulário contém qualquer coisa que não seja um número natural: 0, 1, 2, 3, etc.    

// is_natural_no_zero  
// Retorna FALSE se o elemento de formulário contém qualquer coisa diferente de um número natural, mas não zero: 1, 2, 3, etc     

// valid_email         
// Retorna FALSE se o elemento do formulário não contém um endereço de e-mail válido.

// valid_emails        
// Retorna FALSE se qualquer valor fornecido em uma lista separada por vírgula não é um e-mail válido.  

// valid_ip            
// Retorna FALSE se o IP fornecido não é válido. Aceita um parâmetro opcional de "IPv4" ou "IPv6" para especificar um formato IP.    

// valid_base64        
// Retorna FALSE se a seqüência fornecida contém outra coisa senão válidos Base64 caracteres.

//Qualquer função nativa do PHP que aceita um parâmetro pode ser usado como uma regra, como htmlspecialchars, trim, MD5, etc 
  
$config = array(
	'login' => 
  		array(
    			array(
         		'field'   => 'usr_login',
          		'label'   => 'usr_login', 
          		'rules'   => 'required'
        		)
        	)
	);
