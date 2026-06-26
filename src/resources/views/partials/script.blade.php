<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="{{ asset('felsk/js/slick.js') }}"></script>

<script src="{{ asset('felsk/js/animacao.js') }}"></script>


<script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>

{{-- SweetAlert2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
<script>
document.addEventListener('DOMContentLoaded', function () {

    Swal.fire({
        icon: 'success',
        title: 'Mensagem enviada!',
        text: '{{ session("success") }}',

        background: '#1f1f1f',
        color: '#ffffff',

        confirmButtonColor: '#bf821d',

        timer: 3000,
        timerProgressBar: true,
        showConfirmButton: false
    });

});
</script>
@endif

{{-- Erros de validação --}}
@if($errors->any())
<script>
document.addEventListener('DOMContentLoaded', function () {

    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        html: `{!! implode('<br>', $errors->all()) !!}`,

        background: '#1f1f1f',
        color: '#ffffff',

        confirmButtonColor: '#bf821d'
    });

});
</script>
@endif


{{-- LINK PARA O NUMERO DE WHATSAPP --}}
<script type="text/javascript">
             window.onload = function(){
             (function(d, script) {
             script = d.createElement('script');
             script.type = 'text/javascript';
             script.async = true;
             script.src = 'https://w.app/widget-v1/v7MOHe.js';
             d.getElementsByTagName('head')[0].appendChild(script);
             }(document));
             };
</script>
