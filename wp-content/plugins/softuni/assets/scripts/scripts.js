jQuery(document).ready(function($) {
    $('.subscribe').on('click', function(e){
        e.preventDefault();

        let subject_id = jQuery(this).attr('data-id'); 
        jQuery.ajax({
            type: 'post',
            dataType: 'json',
            url: my_ajax_object.ajax_url,
            data: {
                action:'softuni_subject_subscribe', // PHP function
                subject_id: subject_id,
            },
            success: function(msg){
                console.log(msg);
            }
        });
    });
});