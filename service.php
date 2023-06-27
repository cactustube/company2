<?php

$search = $_GET['searchKey'];
$domain = array("LLP Registeration"=>"/llp-registration.html", "Private Limited Company Registration"=>"/private-limited-company-registration.html", "Nidhi Company Registeration"=>"/nidhi-company-registration.html","NBFC License"=>"/nbfc-registration.html","Section 8 Company Registration"=>"/section-8-company-registration.html","OPC Registration"=>"/opc-registration.html","Micro Finance Company"=>"/micro-finance-company.html");
// $list = array('LLP Registration','NBFC License','Nidhi Company Registeration','Private Limited Company Registration','Section 8 Company Registration','OPC Registration');
$list = ['LLP Registeration','NBFC License','Nidhi Company Registeration','Private Limited Company Registration','Section 8 Company Registration','OPC Registration','Micro Finance Company'];
if(in_array($search,$list)){
  echo("check");
  header('Location:'.'https://companyregistrationonline.in/'. $domain[$search]);
  // header("Location: https://www.legalraasta.com/thanks/");

}

  
  // Set output to "no suggestion" if no hint was found
  // or to the correct values

  ?>

