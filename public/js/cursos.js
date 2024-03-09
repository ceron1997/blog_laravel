function confirmar() {

    Swal.fire({
        title: 'Confirmacion!',
        text: 'Estas seguro de eliminar este registro',
        icon: 'warning',
        confirmButtonText: 'yes',
        showCancelButton: true,
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('eliminar-curso').submit()
            Swal.fire("Registro Eliminado!", "", "success");

        } else if (result.isDenied) {
            return;
        }
    });
}