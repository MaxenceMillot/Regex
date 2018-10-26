<?php
/*<----------------###### PHP Regex  ######------------------>*/

	// MAIL Regex to match: anything@anything.anything 
	// There must be a word, an "@" another word, a "." and 2 to 8 letters 
	// (because nowadays domain extension can be .science or .computer)
	mailRegex = "#^[\w.-]+@[\w.-]+\.[a-z]{2,8}$#i";

	// PASSWORD Regex which matchs a password from 8 to 25 characters. 
	// There must be at least one number and one capital letter 
	// You can also check for at least one small letter with "(?=.*[a-z])"
	// but I don't estimate it as usefull
	passwordRegex = "/^(?=.*[0-9])(?=.*[A-Z])[0-9A-Za-z]{8,25}$/";

	// NAME Regex which matchs letters, capital letters, accentuated letters and hyphens. 
	// You can also check for "." or spaces if you want to. Just add them after the "-".
	nameRegex= "/^[a-zA-Z\p{L} -]*$/u";

    // To test your regex use preg_match()
    // It will return either true or false
    if(preg_match($regex,$myString)) {
    	// It's a match !
	}else{
		// no match
	}

$newMdp = format($_POST['password']);
if (!preg_match("/^(?=.*[0-9])(?=.*[A-Z])[0-9A-Za-z]{8,25}$/",$newMdp)) {
    $msg=$msg.$message['invalidPassword'];
    $validate=false;

/*<----------------###### JS Regex  ######------------------->*/

	// MAIL Regex to match: anything@anything.anything 
	// There must be a word, an "@" another word, a "." and 2 to 8 letters 
	// (because nowadays domain extension can be .science or .computer)
  	var mailRegex = RegExp("^[\\w.-]+@[\\w.-]+\\.[a-z]{2,8}$");

	// PASSWORD Regex which matchs a password from 8 to 25 characters. 
	// There must be at least one number and one capital letter 
	// You can also check for at least one small letter with "(?=.*[a-z])" 
	// but I don't estimate it as usefull
    var passwordRegex = RegExp("^(?=.*[0-9])(?=.*[A-Z])[0-9A-Za-z]{8,25}$");

	// NAME Regex which matchs letters, capital letters, accentuated letters and hyphens. 
	// You can also check for "." or spaces if you want to. Just add them after the "-".
	// If you want to check for a pseudo, you can add "0-9" to also check number (ideally after the A-Z).
    var nameRegex = RegExp("^[a-zA-ZáàâäãåæçéèêëíìîïñøóòôöõúùûüýÿÆÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑØÓÒÔÖÕÚÙÛÜÝŸß-]*$");

    // To test your regex use .test
    // It will return either true or false
 	var mail = "myaddress@domain.com":
    if (mailRegex.test(mail)){
    	// It's a match !
	}else{
		// no match
	}

<----------------###### INFOS  ######------------------->

##### About the MAIL regex #####
According to the RFC, email address can have any ASCII char in it, including special chars (!#$%&'*+-/=?^_`{|}~).
RFC 6531 even alow every UTF-8 above U+007F (DELETE) which means "(),:;<>@[\]" are theoricaly authorized.
I would advice not going too hard on the email field has it have a really wide range of content.
Checking that there is at least a word, an "@" another word, a "." and a domain is enough.
more info at : https://en.wikipedia.org/wiki/Email_address#Syntax

##### About the NAME regex #####
p{L} means all letters, including accentuated letters and specific letters like "ß".
p{L} cannot be used in JS so we have to declare it by hands

"áàâäãåæçéèêëíìîïñøóòôöõúùûüýÿÆÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑØÓÒÔÖÕÚÙÛÜÝŸß" 
should cover every specific letters (from Latin, to germanic and also nordic)


##### Regex VALIDATOR list#####

!#!#!#! I would advice to go check a regex validator. Those explains very well each part of regular expressions !#!#!#!
There you can try your own regex and also see those of the communities

https://regexr.com/
https://regex101.com/

