jQuery( document ).ready( function() {

  jQuery( '#age_form' ).validate( {
    messages: {
      day: 'Ingresa un día',
      month: 'Ingresa un mes',
      year: 'Ingresa un año'
    }
  } );
  if( !localStorage.getItem( 'JonhBarrAllowed' ) ) {
    jQuery( '#mostrarmodal' ).modal( {
      backdrop: 'static',
        keyboard: false
    } )
      .modal( 'show', {
        backdrop: 'false'
      } );
  }
  jQuery( '#senddate' ).on( 'click', function() {
    if( jQuery( '#age_form' ).valid() ) {
      checkAge();
    }
  } );
  // jQuery(function(){
  //       jQuery('a[href*=#]').click(function() {
  //           if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
  //               && location.hostname == this.hostname) {
  //               var jQuerytarget = jQuery(this.hash);
  //               jQuerytarget = jQuerytarget.length && jQuerytarget || jQuery('[name=' + this.hash.slice(1) +']');
  //               if (jQuerytarget.length) {
  //                   var targetOffset = jQuerytarget.offset().top;
  //                   jQuery('html,body').animate({scrollTop: targetOffset}, 1000);
  //                   return false;
  //               }
  //           }
  //       });
  //   });
} );

function checkAge() {
  var min_age = 18;
  var year = parseInt( document.forms[ 'age_form' ][ 'year' ].value );
  var month = parseInt( document.forms[ 'age_form' ][ 'month' ].value ) - 1;
  var day = parseInt( document.forms[ 'age_form' ][ 'day' ].value );

  var theirDate = new Date( (year + min_age), month, day );
  var today = new Date;
  console.log( 'theirDate', theirDate );
  if( (today.getTime() - theirDate.getTime()) < 0 ) {
    alert( 'Eres muy joven para ingresar a este sitio!' );
    return false;
  } else {
    if( jQuery( '#rememberme' ).is( ':checked' ) ) {
      localStorage.setItem( 'JonhBarrAllowed', 'true' );
    }
    jQuery( '#mostrarmodal' ).modal( 'hide' );
    return true;
  }
}