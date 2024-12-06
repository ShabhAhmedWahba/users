function show_add() {

    Command:

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr["info"]("My name is Inigo Montoya. You killed my father. Prepare to die!", "Add user")

}

function confirm_delete() {

    let del = confirm("Do you want to delete the user ?");
    console.log(del)
    if (del == true) {

        window.location.href = "index.php?action=del&&id=" + IdleDeadline;
    }
}
function show_del() {

    Command:

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr["error"]("user delete successfully", "Delete user");

}

function edit(id) {


    let del = confirm("Do you want to delete the user ?");
    console.log(editl)
    if (edit == true) {
        window.location.href = "index.php?action=del&&id=" + id;

    }
    function edit(id) {
        window.location.href = "index.php?action=del&&id=" + id;
    }

}