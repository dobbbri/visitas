$().ready(function(){

    $(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

    autosize($('textarea'));

    $(".alert-dismissable").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert-dismissable").alert('close');
    });

    $('tr[data-href]').on("click", function() {
        document.location = $(this).data('href');
    });

    $('.money').priceFormat({
        prefix: '',
        allowNegative: true,
        centsSeparator: ',',
        thousandsSeparator: '.',
        limit: 12,
        centsLimit: 2
    });

    $('.document-field').on('change', function(){
       if (this.checked){
            $('.document-label').text('CNPJ');
        } else {
            $('.document-label').text('CPF');
        }
    })
});


// $('.form-delete').on('submit',function(e){
//     if( !confirm('Confirme a exclusão deste registro?')){
//         e.preventDefault();
//     }
// });
