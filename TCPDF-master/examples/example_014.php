<?php
//============================================================+
// File name   : example_014.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 014 for TCPDF class
//               Javascript Form and user rights (only works on Adobe Acrobat)
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Javascript Form and user rights (only works on Adobe Acrobat)
 * @author Nicola Asuni
 * @since 2008-03-04
 */


// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('ASB ICT Ltd');
$pdf->SetTitle('NEC Money Transfer');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data

// $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 014', PDF_HEADER_STRING);
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE , PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// IMPORTANT: disable font subsetting to allow users editing the document
$pdf->setFontSubsetting(false);

// set font
$pdf->SetFont('helvetica', '', 10, '', false);

// add a page
$pdf->AddPage();

/*
It is possible to create text fields, combo boxes, check boxes and buttons.
Fields are created at the current position and are given a name.
This name allows to manipulate them via JavaScript in order to perform some validation for instance.
*/

// set default form properties
$pdf->setFormDefaultProp(array('lineWidth'=>1, 'borderStyle'=>'solid', 'fillColor'=>array(153, 204, 1), 'strokeColor'=>'green'));

$pdf->SetFont('helvetica', 'BI', 18);
$pdf->Cell(0, 5, 'Agent Registration Form', 0, 1, 'C');
$pdf->Ln(10);

$pdf->SetFont('helvetica', '', 12);

// First name
$pdf->Cell(35, 5, 'Name:');
$pdf->TextField('name', 50, 5);
$pdf->Ln(6);

// Last name
$pdf->Cell(35, 5, 'Father name:');
$pdf->TextField('f_name', 50, 5);
$pdf->Ln(6);

// Date of Birth
$pdf->Cell(35, 5, 'Date of Birth:');
$pdf->TextField('date', 50, 5);
$pdf->Ln(6);

// Birth city
$pdf->Cell(35, 5, 'Birth City:');
$pdf->TextField('b_city', 50, 5);
$pdf->Ln(6);

// Birth Country
$pdf->Cell(35, 5, 'Birth Country:');
$pdf->TextField('b_country', 50, 5);
$pdf->Ln(6);

// Nationality
$pdf->Cell(35, 5, 'Nationality:');
$pdf->TextField('nationality', 50, 5);
$pdf->Ln(6);

// Division/Region
$pdf->Cell(35, 5, 'Division/Region:');
$pdf->TextField('region', 50, 5);
$pdf->Ln(6);

// City/District
$pdf->Cell(35, 5, 'City/District:');
$pdf->TextField('city', 50, 5);
$pdf->Ln(6);

// City/District Code:
$pdf->Cell(35, 5, 'City/District Code:');
$pdf->TextField('code', 50, 5);
$pdf->Ln(6);

// State
$pdf->Cell(35, 5, 'State/Province:');
$pdf->TextField('state', 50, 5);
$pdf->Ln(6);

// state code
$pdf->Cell(35, 5, 'State/Province Code:');
$pdf->TextField('s_code', 50, 5);
$pdf->Ln(6);

// post code
$pdf->Cell(35, 5, 'Post Code:');
$pdf->TextField('p_code', 50, 5);
$pdf->Ln(6);

// Mobile
$pdf->Cell(35, 5, 'Mobile:');
$pdf->TextField('mobile', 50, 5);
$pdf->Ln(6);

//phone
$pdf->Cell(35, 5, 'Phone:');
$pdf->TextField('phone', 50, 5);
$pdf->Ln(6);

// fax
$pdf->Cell(35, 5, 'Fax:');
$pdf->TextField('fax', 50, 5);
$pdf->Ln(6);

// email
$pdf->Cell(35, 5, 'E-mail:');
$pdf->TextField('email', 50, 5);
$pdf->Ln(6);

// contrat person
$pdf->Cell(35, 5, 'Contract Person:');
$pdf->TextField('c_person', 50, 5);
$pdf->Ln(6);

// Image
$pdf->Cell(35, 5, 'Image:');
$pdf->TextField('image', 50, 28);
$pdf->Ln(6);

$pdf->Ln(25);
// sign
$pdf->Cell(35, 5, 'Signature:');
$pdf->TextField('sign', 50, 18);
$pdf->Ln(6);

$pdf->Ln(18);
// Address
$pdf->Cell(35, 5, 'Address:');
$pdf->TextField('address', 60, 18, array('multiline'=>true, 'lineWidth'=>0, 'borderStyle'=>'none'));
$pdf->Ln(19);

// Date of the day
$pdf->Cell(35, 5, 'Date:');
$pdf->TextField('date', 30, 5, array(), array('v'=>date('Y-m-d'), 'dv'=>date('Y-m-d')));
$pdf->Ln(10);

$pdf->SetX(50);

// Button to validate and print
$pdf->Button('print', 30, 10, 'Print', 'Print()', array('lineWidth'=>2, 'borderStyle'=>'beveled', 'fillColor'=>array(128, 196, 255), 'strokeColor'=>array(64, 64, 64)));

// Reset Button
$pdf->Button('reset', 30, 10, 'Edit', array('S'=>'ResetForm'), array('lineWidth'=>2, 'borderStyle'=>'beveled', 'fillColor'=>array(128, 196, 255), 'strokeColor'=>array(64, 64, 64)));

// Submit Button
$pdf->Button('submit', 30, 10, 'Submit', array('S'=>'SubmitForm', 'F'=>'http://localhost/printvars.php', 'Flags'=>array('ExportFormat')), array('lineWidth'=>2, 'borderStyle'=>'beveled', 'fillColor'=>array(128, 196, 255), 'strokeColor'=>array(64, 64, 64)));

// Form validation functions
$js = <<<EOD
function CheckField(name,message) {
	var f = getField(name);
	if(f.value == '') {
	    app.alert(message);
	    f.setFocus();
	    return false;
	}
	return true;
}
function Print() {
	if(!CheckField('name','Enter Name')) {return;}
	if(!CheckField('f_name','Enter Father Name')) {return;}
	if(!CheckField('date','Enter Date')) {return;}
	if(!CheckField('b_city','enter birth city')) {return;}
	if(!CheckField('b_country','First name is mandatory')) {return;}
	if(!CheckField('nationality','Last name is mandatory')) {return;}
	if(!CheckField('region','Gender is mandatory')) {return;}
	if(!CheckField('city','Address is mandatory')) {return;}
	if(!CheckField('code','First name is mandatory')) {return;}
	if(!CheckField('state','Last name is mandatory')) {return;}
	if(!CheckField('s_code','Gender is mandatory')) {return;}
	if(!CheckField('p_code','Address is mandatory')) {return;}
	if(!CheckField('mobile','First name is mandatory')) {return;}
	if(!CheckField('phone','Last name is mandatory')) {return;}
	if(!CheckField('fax','Gender is mandatory')) {return;}
	if(!CheckField('email','Address is mandatory')) {return;}
	if(!CheckField('c_person','First name is mandatory')) {return;}
	if(!CheckField('image','Last name is mandatory')) {return;}
	if(!CheckField('sign','Gender is mandatory')) {return;}
	if(!CheckField('address','Address is mandatory')) {return;}
	print();
}
EOD;

// Add Javascript code
$pdf->IncludeJS($js);

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_014.pdf', 'D');

//============================================================+
// END OF FILE
//============================================================+
