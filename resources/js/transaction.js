$(function() {
    $("#transTable").DataTable({
        serverSide: true,
        processing: true,
        ajax: "/getTransactions",
        columns: [
            { data: "id", name: "id", visible: false },
            { data: "DT_RowIndex", name: "DT_RowIndex", orderable: false, searchable: false },
            { data: "cust_name", name: "cust_name" },
            { data: "cart", name: "cart" },
            { data: "total_transaction", name: "total_transaction" },
            { data: "payment_method", name: "payment_method" },
            { data: "payments.bank", name: "payments.bank" },
            { data: "address", name: "address" },
            { data: "expeditions.company", name: "expeditions.company" },
            { data: "pay_statuses.status", name: "pay_statuses.status" },
            { data: "actions", name: "actions", orderable: false, searchable: false },
        ],
        order: [[0, "desc"]],
        lengthMenu: [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"],
        ],
    });

    $(".datatable").on("click", ".btn-delete", function (e) {
        e.preventDefault();

        var form = $(this).closest("form");
        var name = $(this).data("name");

        Swal.fire({
            title: "Are you sure want to delete\n" + name + "?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonClass: "bg-primary",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
});
