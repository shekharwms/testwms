<?php
require_once("clsWord.php");

   $input = "http://localhost/test/doc_file_view/Template.docx";
   $output = "http://localhost/test/doc_file_view/Template1.docx";

   $Word = new clsMSWord;
   $Word->Open($input);
  $Word->WriteText("This is a test ");
   $Word->WriteBookmarkText("test","this is bookmark text");
   $Word->SaveAs($output);
   $Word->Quit();
echo 'The data is inserted successfully !';
?>