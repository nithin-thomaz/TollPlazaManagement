
    function validate()
{ 
   if( document.tollbill.vno.value == "" )
   {
     alert( "Please provide the vehicle number!" );
     document.tollbill.vno.focus() ;
     return false;
   }
   if( document.tollbill.dno.value == "" )
   {
     alert( "Please provide the driver lic.no!" );
     document.tollbill.dno.focus() ;
     return false;
   }
     if( document.tollbill.mobileno.value == "" ||
           isNaN( document.tollbill.mobileno.value) ||
           document.tollbill.mobileno.value.length != 10 )
   {
     alert( "Please provide a Mobile No in the format 123." );
     document.tollbill.mobileno.focus() ;
     return false;
   }
    if ( ( tollbill.state[0].checked == false ) && ( tollbill.state[1].checked == false ) )
   {
   alert ( "Please choose your state" );
   return false;
   }   
   if( document.tollbill.type.value == "-1" )
   {
     alert( "Please provide the vehicle type!" );
     document.tollbill.type.focus() ;
     return false;
   }   
   if( document.tollbill.pass.value == "-1" )
   {
     alert( "Please provide the no. of passes!" );
    
     return false;
   }   
   return( true );
}
