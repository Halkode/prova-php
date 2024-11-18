import $ from 'jquery';
import Swal from 'sweetalert2';
import 'jquery-mask-plugin';

window.$ = $;


$(document).ready(function() {
    $('#cpf').mask('000.000.000-00');
    $('#phone').mask('(00) 0000-0000');

    $(document).on('click', '.deleteUserButton', function(e) {
        e.preventDefault();

        const href = $(this).attr('href');

        Swal.fire({
            title: "Você tem certeza que deseja excluir esse usuário?",
            showDenyButton: true,
            confirmButtonText: "Excluir",
            confirmButtonColor: 'red',
            denyButtonText: `Não excluir`,
            denyButtonColor: 'gray',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = href;
            } else if (result.isDenied) {
                return;
            }
        });
    });
});