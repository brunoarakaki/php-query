<?php 
/** Helper **/
function n_stars($n) {
  if($n == 0) return '';
  else return '*' . n_stars($n-1);
}

function fill_stars($start, $end, $string){
  $totalChars = strlen($string);
  $stars = $totalChars - $start - $end;
  return substr($string, 0, $start) . n_stars($stars) . substr($string, - $end);
}

function hide_email($email) {
  //split email into 2 different pieces
  list($address, $domain) = explode('@', $email);
  //hide address
  $address = fill_stars(1,1,$address);
  //hide domain
  $domains = explode('.', $domain);
  $domains[0] = fill_stars(1,1,$domains[0]);
  $domain = implode('.', $domains);
  //glue them all back together
  return $address . '@' . $domain;
}

function hide_phone($phone){
  //hide phone
  return fill_stars(4,2,$phone);
}

function hide_cpf($cpf){
  //hide cpf
  $cpf = fill_stars(3, 2, $cpf);
  //format cpf
  $cpf = substr_replace(substr_replace(substr_replace($cpf, '-', 9,0), '.', 6, 0), '.', 3, 0);
  return $cpf;
}

?>
