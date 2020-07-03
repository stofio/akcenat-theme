<?php

// Add scripts and stylesheets
function myTheme_scripts() {
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '3.5.1' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.5.0' );
  wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', array(), '4.5.0' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_script( 'navbar', get_template_directory_uri() . '/js/navbar.js', array( 'jquery' ));
	wp_enqueue_style( 'custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css' );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Martel:wght@700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'myTheme_scripts' );

//allowing categories to have pagination is some way (does not return 404 on page 2-3-...)
function wpse_modify_category_query( $query ) {
    if ( ! is_admin() && $query->is_main_query() ) {
        if ( $query->is_category() ) {
            $query->set( 'posts_per_page', 1 );
        } 
    } 
}
add_action( 'pre_get_posts', 'wpse_modify_category_query' );

// add 'start_with' to wp_query to get post with a starting letter
function wpse_298888_posts_where( $where, $query ) {
    global $wpdb;
    $starts_with = esc_sql( $query->get( 'starts_with' ) );
    if ( $starts_with ) {
        $where .= " AND $wpdb->posts.post_title LIKE '$starts_with%'";
    }
    return $where;
}
add_filter( 'posts_where', 'wpse_298888_posts_where', 10, 2 );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

//CUSTOM SINGLE TEMPLATES BY CATEGORY
add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t )
{
  foreach( (array) get_the_category() as $cat ) 
  { 
    if ( file_exists(get_stylesheet_directory() . "/single-category-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-category-{$cat->slug}.php"; 
    if($cat->parent)
    {
      $cat = get_the_category_by_ID( $cat->parent );
      if ( file_exists(get_stylesheet_directory() . "/single-category-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-category-{$cat->slug}.php";
    }
  } 
  return $t;
}
//
//FORMS
//
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$response = "";
function generate_response($type, $message){
  global $response; 
  if($type == "email-success") $response = "<div class='send-word-success'>{$message}</div>";
  else $response = "<div class='send-word-error'>{$message}</div>";
}
/********/
//PREDLOZI
/********/
//response messages
 $missing_content = "Reč nije poslata jer niste uneli sva potrebna polja. Pokušajte ponovo.";
 $message_sent = "Uspešno ste poslali reč. Hvala vam na saradnji!";
 $message_unsent = "Reč nije poslata, pokušajte ponovo.";

 //post
 $new_w = test_input($_POST['new_word']);
 $meaning = test_input($_POST['meaning']);
 $example = test_input($_POST['example']);
 $opc_name = test_input($_POST['opc_name']);
 $opc_location = test_input($_POST['opc_location']);
 
 //mail variables
 $to = "stofio@live.com";
 $subject = "Preporuka reči za akcenat.com";
 $msg = 'Reč: [' . $new_w . ']; Značenje reči: [' .  $meaning . ']; Primer: [' . $example . '].' . "\r\n";
 if(!empty($opc_name) || !empty($opc_location)) {
   $msg .= 'Poslao: [' . $opc_name . '] iz: [' . $opc_location . '].';
 }

//validate and send
if($_POST['send_word']) {
  if(empty($new_w) || empty($meaning) || empty($example)) {
    generate_response("email-error", $missing_content);
  }
  else { //send email
    $sent = wp_mail($to, $subject, strip_tags($msg));
    if($sent) generate_response("email-success", $message_sent); 
    else generate_response("email-error", $message_unsent); 
  }
}
//endPREDLOZI


//********/
//KONTAKT
//********/
$missing_content_contact = "Poruka nije poslata jer niste uneli sva potrebna polja. Pokušajte ponovo.";
$message_sent_contact = "Uspešno ste poslali vašu poruku. Odgovorićemo vam u najkraćem roku.";
$message_unsent_contact = "Poruka nije poslata, pokušajte ponovo.";
$email_invalid = "Niste uneli ispravnu email adresu.";

//post
$contact_name = test_input($_POST['contact_name']);
$contact_email = test_input($_POST['email']);
$contact_msg = test_input($_POST['msg']);

//email variables
$contact_to = "stofio@live.com";
$contact_subject = "Poruka iz kontakt forme akcenat.com";
$contact_headers = 'From: '. $contact_email . "\r\n" . 'Reply-To: ' . $contact_email . "\r\n";

//validate and send
if($_POST['send_contact_msg']) {
  if(!filter_var($contact_email, FILTER_VALIDATE_EMAIL)) {
    generate_response("email-error", $email_invalid);
  }
  else {
    if(empty($contact_name) || empty($contact_msg)) {
      generate_response("email-error", $missing_content_contact);
    }
    else { //send email
      $sent_contact_msg = wp_mail($contact_to, $contact_subject, strip_tags($contact_msg));
      if($sent_contact_msg) generate_response("email-success", $message_sent_contact); 
      else generate_response("email-error", $message_unsent_contact); 
      echo 'aaa';
    }
  } 
}
//endKONTAKT
