function config_toast(position) {
    return {
        toast: true,
        position: position,
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: false,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer);
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    }
}

function show_toast_success(msg) {
    // const default_position = 'top-end';
    const position = "top-end";
    Swal.mixin(config_toast(position)).fire({
        icon: 'success',
        title: msg
    })
}

function show_toast_warning(msg) {
    const default_position = 'top-end';
    const position = "<?= $setting ? ($setting->message_warning ?: 'top-end') : 'top-end' ?>";

    Swal.mixin(config_toast(position)).fire({
        icon: 'warning',
        title: msg
    })
}

function show_toast_error(msg) {
    const default_position = 'top-end';
    const position = "top-end";

    Swal.mixin(config_toast(position)).fire({
        icon: 'error',
        title: msg
    })
}
