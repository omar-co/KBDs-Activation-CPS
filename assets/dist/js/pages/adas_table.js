$('#status').stacktable();
$(function () {
    $('.vendor_status').editable({
        source: [
            {value: 'Process Started', text: 'Process Started'},
            {value: 'Done', text: 'Done'},
            {value: 'Hard Close', text: 'Hard Close'},
            {value: 'NO Status', text: 'NO Status'},
            {value: 'Detenido', text: 'Detenido'}
        ],
        url: site_url('country/update'),
        success: function (e, newValue) {
            var id = $(this).data('pk');
            if (newValue === 'Process Started') {
                $('.' + id).removeClass('bg-red bg-green bg-orange');
                $('.' + id + 'a').removeClass('text-white');
            }
            if (newValue === "Done") {
                $('.' + id).removeClass('bg-red bg-orange').addClass('bg-red bg-green bg-orange');
                $('.' + id).addClass('text-white');
            }
            if (newValue == "Hard Close") {
                $('.' + id).removeClass('bg-red bg-green').addClass('bg-orange');
                $('.' + id).addClass('text-white');
            }
            if (newValue == "NO Status") {
                $('.' + id).removeClass('bg-green bg-orange').addClass('bg-red');
                $('.' + id).addClass('text-white');
            }
            if (newValue == "Detenido") {
                $('.' + id).removeClass('bg-green bg-orange').addClass('bg-red');
                $('.' + id).addClass('text-white');
            }
        }
    });
    $('.fecha').editable({
        format: 'YYYY-MM-DD',
        viewformat: 'DD.MM.YYYY',
        template: 'D / MMMM ',
        url: site_url('country/update')
    });
    $('.comentarios').editable({
        rows: 4,
        url: site_url('country/update')
    });

});